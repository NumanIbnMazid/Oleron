<?php

namespace App\Http\Controllers;

use App\ImageContent;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ImageContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (true ==Auth::check()) {
            try{
                $content = ImageContent::all();
                return view('admin.a_create-image-content')->with('pg_id', $content);
                //return view('admin.a_create-image-content');
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (true ==Auth::check()) {
            // ===================================== File Upload ===================================
            try{
                if(($request->file('image')) != null)
                {
                    $upload = $request->image->store('Attachments 2');

                    // Other variables declaration
                    $file = $request->file('image');
                    $fname = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $path = $file->getRealPath();
                    $mim = $file->getMimeType();
                    $image = $fname;
                }
                if(($request->file('image2')) != null)
                {
                    $upload2 = $request->image2->store('Attachments 2');

                    // Other variables declaration
                    $file2 = $request->file('image2');
                    $fname2 = $file2->getClientOriginalName();
                    $extension2 = $file2->getClientOriginalExtension();
                    $path2 = $file2->getRealPath();
                    $mim2 = $file2->getMimeType();
                    $image2 = $fname2;
                }
                if(($request->file('image3')) != null)
                {
                    $upload3 = $request->image3->store('Attachments 2');

                    // Other variables declaration
                    $file3 = $request->file('image3');
                    $fname3 = $file3->getClientOriginalName();
                    $extension3 = $file3->getClientOriginalExtension();
                    $path3 = $file3->getRealPath();
                    $mim3 = $file3->getMimeType();
                    $image3 = $fname3;
                }
                if(($request->file('image4')) != null)
                {
                    $upload4 = $request->image4->store('Attachments 2');

                    // Other variables declaration
                    $file4 = $request->file('image4');
                    $fname4 = $file4->getClientOriginalName();
                    $extension4 = $file4->getClientOriginalExtension();
                    $path4 = $file4->getRealPath();
                    $mim4 = $file4->getMimeType();
                    $image4 = $fname4;
                }


                //============
                if(($request->file('image')) == null)
                {
                    $upload = NULL;
                    $file = NULL;
                    $fname = NULL;
                    $extension = NULL;
                    $path = NULL;
                    $mim = NULL;
                    $image = NULL;
                    //echo $image;
                }
                if(($request->file('image2')) == null)
                {
                    $upload2 = NULL;
                    $file2 = NULL;
                    $fname2 = NULL;
                    $extension2 = NULL;
                    $path2 = NULL;
                    $mim2 = NULL;
                    $image2 = NULL;
                    //echo $image;
                }
                if(($request->file('image3')) == null)
                {
                    $upload3 = NULL;
                    $file3 = NULL;
                    $fname3 = NULL;
                    $extension3 = NULL;
                    $path3 = NULL;
                    $mim3 = NULL;
                    $image3 = NULL;
                    //echo $image;
                }
                if(($request->file('image4')) == null)
                {
                    $upload4 = NULL;
                    $file4 = NULL;
                    $fname4 = NULL;
                    $extension4 = NULL;
                    $path4 = NULL;
                    $mim4 = NULL;
                    $image4 = NULL;
                    //echo $image;
                }
            }
            catch(\Exception $e){
                Session::flash('wrong', 'The attachment failed to upload !!! Please try to upload a valid file within 2 MB !!!');
                return redirect('/');
            }
            
            // =============================== End of File Upload =================================
            try{
                $post = new ImageContent;
                $post->title = $request->input('title');
                $post->appear_on = $request->input('appear_on');
                $post->image = $upload;
                $post->image2 = $upload2;
                $post->image3 = $upload3;
                $post->image4 = $upload4;
                $post->content = $request->input('content');
                $post->content2 = $request->input('content2');
                $post->content3 = $request->input('content3');
                $post->content4 = $request->input('content4');
                $post->publication_status = $request->input('publication_status');

                $post->save();

                Session::flash('success', 'The page has been added successfully !!!');
                return redirect()->route('create-image-content.index');
            }
            catch(\Exception $e){
                Session::flash('wrong', 'Something went wrong. Please try again later !!!');
                return redirect('/');
            }
        }
        else {
          Session::flash('wrong','You are not allowed !!!');
          return redirect('/');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ImageContent  $imageContent
     * @return \Illuminate\Http\Response
     */
    public function show(ImageContent $imageContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ImageContent  $imageContent
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (true ==Auth::check()) {           
            $item = ImageContent::find($id);
            return view('admin.a_image-content-edit')->with('page_id',$item);
        }
        else {
          Session::flash('wrong','You are not allowed !!!');
          return redirect('/');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ImageContent  $imageContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (true ==Auth::check()) {
            // ===================================== File Upload ===================================
            try{
                if(($request->file('image')) != null)
                {
                    $upload = $request->image->store('Attachments 2');

                    // Other variables declaration
                    $file = $request->file('image');
                    $fname = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $path = $file->getRealPath();
                    $mim = $file->getMimeType();
                    $image = $fname;
                }
                if(($request->file('image2')) != null)
                {
                    $upload2 = $request->image2->store('Attachments 2');

                    // Other variables declaration
                    $file2 = $request->file('image2');
                    $fname2 = $file2->getClientOriginalName();
                    $extension2 = $file2->getClientOriginalExtension();
                    $path2 = $file2->getRealPath();
                    $mim2 = $file2->getMimeType();
                    $image2 = $fname2;
                }
                if(($request->file('image3')) != null)
                {
                    $upload3 = $request->image3->store('Attachments 2');

                    // Other variables declaration
                    $file3 = $request->file('image3');
                    $fname3 = $file3->getClientOriginalName();
                    $extension3 = $file3->getClientOriginalExtension();
                    $path3 = $file3->getRealPath();
                    $mim3 = $file3->getMimeType();
                    $image3 = $fname3;
                }
                if(($request->file('image4')) != null)
                {
                    $upload4 = $request->image4->store('Attachments 2');

                    // Other variables declaration
                    $file4 = $request->file('image4');
                    $fname4 = $file4->getClientOriginalName();
                    $extension4 = $file4->getClientOriginalExtension();
                    $path4 = $file4->getRealPath();
                    $mim4 = $file4->getMimeType();
                    $image4 = $fname4;
                }
            }
            catch(\Exception $e){
                Session::flash('wrong', 'The attachment failed to upload !!! Please try to upload a valid file within 2 MB !!!');
                return redirect('/');
            }
            
            // =============================== End of File Upload =================================
            try{
                $this->validate(
                    $request, array(
                        'title'=>'required',
                    )
                );

                $post = ImageContent::find($id);
                $post->title = $request->input('title');
                $post->appear_on = $request->input('appear_on');
                if(($request->file('image')) != null)
                {
                    $post->image = $upload;
                }
                if(($request->file('image2')) != null)
                {
                    $post->image2 = $upload2;
                }   
                if(($request->file('image3')) != null)
                {
                    $post->image3 = $upload3;
                }
                if(($request->file('image4')) != null)
                {
                    $post->image4 = $upload4;
                }
                $post->content = $request->input('content');
                $post->content2 = $request->input('content2');
                $post->content3 = $request->input('content3');
                $post->content4 = $request->input('content4');
                $post->publication_status = $request->input('publication_status');

                $post -> update();
                Session::flash('success', 'The Page has been updated successfully !!!');
                return redirect() -> route('create-image-content.index');
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ImageContent  $imageContent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (true ==Auth::check()) {
            try{
                $post = ImageContent::find($id);
                if(($post->image) != null){
                    Storage::delete($post->image);
                }
                if(($post->image2) != null){
                    Storage::delete($post->image2);
                }
                if(($post->image3) != null){
                    Storage::delete($post->image3);
                }
                if(($post->image4) != null){
                    Storage::delete($post->image4);
                }
                $post->delete();
                Session::flash('success', 'The page has been deleted successfully !!!');
                return redirect()->route('create-image-content.index');
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
}
