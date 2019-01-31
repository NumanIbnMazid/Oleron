<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Email;

use App\ImageContent;

use Session;

use Illuminate\Support\Facades\Storage;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    // =================== Get Admin Dashboard ===================
    public function index()
    {       
        if (true ==Auth::check()) {
            try{
                $counts = Email::where('status','=','0')->count();
                return view('admin.a_dashboard')->with('counts',$counts);
            }
            catch(\Exception $e){
              return redirect('404');
            }
        }
        else {
            Session::flash('wrong','You are not allowed !!!');
            return redirect('/');
        }
        
    }
    // =================== Get All Emails ===================
    public function getMails()
    {
        if (true ==Auth::check()) {
            try{
                $mails = Email::all();
                return view('admin.a_emails')->with('mails',$mails);
            }
            catch(\Exception $e){
              return redirect('404');
            }
        }
        else {
          Session::flash('wrong','You are not allowed !!!');
          return redirect('/');
        }
    }

    public function deleteMail($id)
    {
        if (true ==Auth::check()) {
            try{
                $mail = Email::find($id);
                Storage::delete($mail->attachment);
                $mail->delete();
                Session::flash('success','The mail has been deleted successfully !!!');
                return redirect('/all-mails');
            }
            catch(\Exception $e){
              return redirect('404');
            }
        }
        else {
          Session::flash('wrong','You are not allowed !!!');
          return redirect('/');
        }
    }


    public function viewMarkMail($id)
    {
        if (true ==Auth::check()) {
            try{
                $mail = Email::find($id);
                return view('admin.a_mark-mail')->with('mail',$mail);
            }
            catch(\Exception $e){
              return redirect('404');
            }
        }
        else {
          Session::flash('wrong','You are not allowed !!!');
          return redirect('/');
        }
    }

    public function markmail(Request $request, $id)
    {
        if (true ==Auth::check()) {
            try{
                $mail = Email::find($id);
                $mail->status = $request->input('status');

                $mail->update();
                Session::flash('success','Mail status has been updated successfully !!!');
                return redirect('/all-mails');
            }
            catch(\Exception $e){
              return redirect('404');
            }
        }
        else {
          Session::flash('wrong','You are not allowed !!!');
          return redirect('/');
        }
    }

    public function downloadAttachment($id)
    {
        if (true ==Auth::check()) {
            try{
                $mail = Email::find($id);
                $contents = Storage::download($mail->attachment);
                return $contents;
            }
            catch(\Exception $e){
              return redirect('404');
            }
        }
        else {
          Session::flash('wrong','You are not allowed !!!');
          return redirect('/');
        }
    }

    public function viewMessage($id)
    {
        if (true ==Auth::check()) {
            try{
                $mail = Email::find($id);
                return view('admin.a_view-message')->with('mail',$mail);
            }
            catch(\Exception $e){
              return redirect('404');
            }
        }
        else {
          Session::flash('wrong','You are not allowed !!!');
          return redirect('/');
        }
    }
    // =================== End ===================
}
