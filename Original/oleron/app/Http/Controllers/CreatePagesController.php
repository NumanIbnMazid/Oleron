<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CreatePage;

use Session;

use Illuminate\Support\Facades\Auth;

class CreatePagesController extends Controller
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
                //$page = CreatePage::paginate(5);
                $page = CreatePage::all();
                return view('admin.a_create-page')->with('pg_id', $page);
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
                $this->validate(
                    $request, array(
                        'title'=>'required|max:100',
                        'description'=>'max:200',
                        'content'=>'required'
                    )
                );

                $post = new CreatePage;
                $post->page_title = $request->title;
                $post->short_description = $request->description;
                $post->page_content = $request->content;
                $post->publication_status = $request->publication_status;

                $post->save();

                Session::flash('success', 'New Page Has Been Created Successfully !!!');

                return redirect()->route('create-page.index');
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
//        $page_id = CreatePage::find($id);
//        return view('page-content')->with('page', $page_id);
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
                $page_id = CreatePage::find($id);
                return view('admin.a_page-edit')->with('page_id',$page_id);
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
                      'title'=>'required|max:100',
                      'description'=>'max:200',
                      'content'=>'required'
                  )
                );
                $post = CreatePage::find($id);
                $post -> page_title = $request -> input('title');
                $post -> short_description = $request -> input('description');
                $post -> page_content = $request -> input('content');
                $post -> publication_status = $request -> input('status');

                $post -> update();
                Session::flash('success', 'Page has been updated successfully !!!');
                return redirect() -> route('create-page.index');
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
                $post = CreatePage::find($id);
                $post->delete();
                Session::flash('success', 'The page has been deleted successfully !!!');
                return redirect()->route('create-page.index');
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
