<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Menu;

use Session;

use Illuminate\Support\Facades\Auth;

class MenusController extends Controller
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
                $menu = Menu::all();
                return view('admin.a_create-menu')->with('menus',$menu);
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
                    'title'=>'required|max:50',
                    'description'=>'max:100',
                    'content'=>'required'
                ));
                $post = new Menu;
                $post->menu_title = $request->title;
                $post->short_description = $request->description;
                $post->menu_content = $request->content;
                $post->publication_status = $request->publication_status;

                $post->save();
                Session::flash('success','New Menu has been added successfully !!!');
                return redirect()->route('create-menu.index');
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
//        $target_menu = Menu::find($id);
//        return view('menu-content')->with('menu_content',$target_menu);
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
                $menu_id = Menu::find($id);
                return view('admin.a_menu-edit')->with('menus',$menu_id);
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
                $this->validate($request, array(
                  'title'=>'required|max:50',
                  'description'=>'max:100',
                  'content'=>'required'
                ));

                $post = Menu::find($id);
                $post->menu_title = $request->input('title');
                $post->short_description = $request->input('description');
                $post->menu_content = $request->input('content');
                $post->publication_status = $request->input('publication_status');

                $post->update();
                Session::flash('success','The menu has been updated successfully !!!');
                return redirect()->route('create-menu.index');
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

                $target = Menu::find($id);
                $target->delete();
                Session::flash('success', 'The menu has been deleted successfully !!!');
                return redirect()->route('create-menu.index');
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
