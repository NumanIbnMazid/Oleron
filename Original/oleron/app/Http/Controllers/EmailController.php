<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;
use Session;

use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EmailController extends Controller
{
    public function SendEmail(Request $request)
    {
        $this->validate($request, array(
            'name'=>'required|max:50',
            'email'=>'required',
            'attachment'=>'max:2048'
        ));

        // ===================================== File Upload ===================================
        try{
            if(($request->file('attachment')) != null)
            {
                $upload = $request->attachment->store('Attachments');

                // Other variables declaration
                $file = $request->file('attachment');
                $fname = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $path = $file->getRealPath();
                $mim = $file->getMimeType();
                $attachment = $fname;
            }
            if(($request->file('attachment')) == null)
            {
                $upload = NULL;
                $file = NULL;
                $fname = NULL;
                $extension = NULL;
                $path = NULL;
                $mim = NULL;
                $attachment = NULL;
                //echo $attachment;
            }
        
        // =============================== End of File Upload =================================

            $post = new Email;
            $post->name = $request->input('name');
            $post->email = $request->input('email');
            $post->service = $request->input('service');
            $post->attachment = $upload;
            $post->message = $request->input('message');

            $post->save();
        }
        catch(\Exception $e){
            Session::flash('wrong', 'The attachment failed to upload !!! Please try to upload a valid file within 2 MB !!!');
            return redirect('/');
        }

        try{
            $name = $request->input('name');
            $email = $request->input('email');
            $service = $request->input('service');
            $content = $request->input('message');

            $data = array('name' => $name, 'email' => $email, 'service' => $service, 'content' => $content, 'attachment' => $attachment);

            // Mail Send to OlcBd-------------
            Mail::send('mails.mail', $data, function($message) use($request, $file,$fname,$extension,$path,$mim){
                $message->to('olcbd149@gmail.com','olcbd.com')->subject
                ('Mail from your client: '.$request->name);
                //$message->attach(storage_path('app/Attachments/??'));
                //$message->attach('C:\xampp\htdocs\olcbd\public\Attachments\test.pdf');
                if(($request->file('attachment')) != null){
                    $message->attach($path, array(
                        'as' => 'attachment.' . $extension, 
                        'mime' => $mim)
                    );
                }
                $message->from($request->email,$request->name);
            });
            // Mail Send to Client-------------
            Mail::send('mails.mail-client', $data, function($message) use($request, $file,$fname,$extension,$path,$mim){
                $message->to($request->email,$request->name)->subject
                ('Confirmation email from olcbd.com');
                $message->from('olcbd149@gmail.com','olcbd.com');
            });

            Session::flash('success', 'Your message has been sent successfully !!!');
            return redirect('/contact');
        }
        catch(\Exception $e){
            Session::flash('wrong', 'Something went wrong. Please try again later !!!');
            return redirect('/contact');
        }

    }
}
