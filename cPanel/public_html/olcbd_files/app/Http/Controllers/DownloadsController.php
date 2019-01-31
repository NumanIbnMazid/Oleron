<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Download;

use Session;

use Illuminate\Support\Facades\Auth;

class DownloadsController extends Controller
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
                $download = Download::all();
                return view('admin.a_create-download')->with('pg_id', $download);
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
            try{
                $this->validate($request, array(
                    'title'=>'required',
                    'content'=>'required'
                ));
                $post = new Download;
                $post->title = $request->title;
                $post->content = $request->content;
                $post->publication_status = $request->publication_status;

                $post->save();
                Session::flash('success', 'The Download page has been added successfully !!!');
                return redirect()->route('create-download.index');
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (true ==Auth::check()) {
            try{
                $download = Download::find($id);
                return view('admin.a_download-edit')->with('page_id',$download);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if (true ==Auth::check()) {
            try{
                $this->validate(
                    $request, array(
                        'title'=>'required',
                        'content'=>'required'
                    )
                );
                $post = Download::find($id);
                $post -> title = $request -> input('title');
                $post -> content = $request -> input('content');
                $post -> publication_status = $request -> input('status');

                $post -> update();
                Session::flash('success', 'The Page has been updated successfully !!!');
                return redirect() -> route('create-download.index');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (true ==Auth::check()) {
            try{
                $post = Download::find($id);
                $post->delete();
                Session::flash('success', 'The Download page has been deleted successfully !!!');
                return redirect()->route('create-download.index');
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
