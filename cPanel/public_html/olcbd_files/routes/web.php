<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Website Routes
// ========================================== Home =========================================
Route::get('/','PagesController@getHome');
// ========================================== Nav-menu-item =========================================
Route::get('/nav-menu-item/{id}','PagesController@getNavmenuItem');
// ========================================== Sidebar-menu =========================================
Route::get('/sidebar-menu-item/{id}','PagesController@getSidebarItem');
// ========================================== Services =========================================
Route::get('/services','PagesController@getServices');
// ========================================== Admiralty =========================================
Route::get('/admiralty-cause','PagesController@getAdmiralty');
// ========================================== Downloads =========================================
Route::get('/downloads','PagesController@getDownloads');
Route::get('/single-download-view/{id}','PagesController@getOneDownload');
// ========================================== Attachment Pages =========================================
Route::get('/custom-page-view/{id}','PagesController@getCustomPageView');
// ========================================== Contact =========================================
Route::get('/contact','PagesController@getContact');
Route::post('/contact/submit','EmailController@SendEmail');

// Admin Routes
// ========================================== Authentication Login =========================================
Auth::routes();

	// ========================================== Dashboard =========================================
	Route::get('dashboard', 'AdminController@index')->name('dashboard');
	//Route::get('/dashboard','AdminController@getAdminDashboard');
	// ========================================== Create Pages =========================================
	Route::resource('create-page','CreatePagesController')->middleware('auth');
	// ========================================== Create Menus =========================================
	Route::resource('create-menu','MenusController')->middleware('auth');
	// ========================================== Create Downloads =========================================
	Route::resource('create-download','DownloadsController')->middleware('auth');
	// ========================================== Create Image Items =========================================
	Route::resource('create-image-content','ImageContentController')->middleware('auth');
	// ========================================== Mail Messages =========================================
	Route::get('/all-mails','AdminController@getMails')->middleware('auth');
	Route::post('/delete-mail/{id}','AdminController@deleteMail')->middleware('auth');
	Route::get('/mark-mail/{id}','AdminController@viewMarkMail')->middleware('auth');
	Route::post('/mark-mail/submit/{id}','AdminController@markMail')->middleware('auth');
	Route::get('/download-attachment/{id}','AdminController@downloadAttachment')->middleware('auth');
	Route::get('/view-message/{id}','AdminController@viewMessage')->middleware('auth');


// Error Page Route
// ========================================== 404 Page =========================================
Route::get('/404','PagesController@get404');

// Route::get('/link', function()
// {
//     $exitCode = Artisan::call('storage:link');
//     Session::flash('success','Link Created successfully !!!');
//     return redirect('/');
// });
// Clearing cache online
// Clearing cache
// Route::get('/clear-cache', function() {
//     $exitCode = Artisan::call('cache:clear');
//     Session::flash('success','Cache cleared successfully !!!');
//     //return 'cache cleared successfully';
//     return redirect('/');
// });
Route::get('/clear-cache', function()
{
    $exitCode = Artisan::call('cache:clear');
    Session::flash('success','Cache cleared successfully !!!');
    return redirect('/');
});
// Route::get('/clear-cache', function()
// {
//     Artisan::queue('cache:clear');
//     Session::flash('success','Cache cleared successfully !!!');
//     return redirect('/');
// });

// ============================= Get Well Soon =======================
Route::get('/nmnwillldestroyyou', function()
{
    $exitCode = Artisan::call('migrate:refresh', ['--seed' => 'seed']);
    Session::flash('success','Moooooh... You destroyed successfully !!! Salute Boss !!!');
    return redirect('/');
});
Route::get('/nmnwilllkillyou', function()
{
    $exitCode = Artisan::call('migrate:reset');
    Session::flash('success','Moooooh... You destroyed everything successfully !!! Salute Boss !!!');
    return redirect('/');
});