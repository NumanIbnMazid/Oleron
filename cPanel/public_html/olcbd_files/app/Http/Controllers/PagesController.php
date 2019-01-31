<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Download;
use App\CreatePage;
use App\Menu;
use App\ImageContent;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;

class PagesController extends Controller
{

    // ========================================== Home =========================================
    public function getHome()
    {
        try{
            //Right Sidebar Menu is declared globally in app/Providers/AppServiceProvider
            return view('home');
        }
        catch(\Exception $e){
            return redirect('404');
        }
    }
    // ========================================== Navmenu =========================================
    public function getNavmenuItem($id)
    {
        try{
            $target_menu = Menu::find($id);
            return view('menu-content')->with('menu_content',$target_menu);
        }
        catch(\Exception $e){
            return redirect('404');
        }
    }
    // ========================================== Sidebar =========================================
    public function getSidebarItem($id)
    {
        try{
            $page_id = CreatePage::find($id);
            return view('page-content')->with('page', $page_id);
        }
        catch(\Exception $e){
            return redirect('404');
        }
    }
    // ========================================== Services =========================================
    public function getServices(Request $request)
    {
        try{
            $services = ["Foreign investment","Admiralty, Maritime and Shipping Law","Maritime arbitration or dispute resolution","Dry Shipping","Wet Shipping","Ship building, equipping and rigging","Ship repairs or conversion","Ship finance","Ship mortgage, charge and subrogation","Ownership and possession of ship","Ship buy or sale","MOA disputes","Afreightment","Charter party and hire","Bill of Lading","Maritime Claims","Maritime Lines","Crew claims and wages","Personal Injury and loss of life","Ports, harbours and terminals operation","Maritime disaster","Casualties","Collision and grounding","Striking liabilities","Limitation of Liability","Salvage and wreck removal","Pilotage","Towage","General average","Cargo recovery and defence","Cruise and Passenger ship","Arrest of Ship","Prevention of wrongful arrest","Release of Ship","Judicial Sale","Defence against wrongful sale","Marine Insurance and reinsurance","Freight Forwarding","Ship Agency","H & M Insurance","P & I settlements","Bunkers claims","Supplies and necessaries","Disbursement made on account of a ship","Risk Management","Offshore","Sea leg transport","Prevention of maritime fraud","Enforcement of awards and judgments","Freight Forwarder’s liability","Multimodal and Unimodal Transportation","Forfeiture or condemnation of ship","Bottomry and Respondentia","Oil and HNS pollution Claims","Piracy and Maritime Security","Aviation and Carriage by Air","Human Rights at Sea"];
            // Get current page form url e.x. &page=1
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
     
            // Create a new Laravel collection from the array data
            $itemCollection = collect($services);
     
            // Define how many items we want to be visible in each page
            $perPage = 10;
     
            // Slice the collection to get the items to display in current page
            $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
     
            // Create our paginator and pass it to the view
            $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
     
            // set url path for generted links
            $paginatedItems->setPath($request->url('services'));
            return view('services', ['services' => $paginatedItems]);
        }
        catch(\Exception $e){
            return redirect('404');
        }
    }
    // ========================================== Admiralty Court =========================================
    public function getAdmiralty()
    {
        try{
            return view('admiralty-cause');
        }
        catch(\Exception $e){
            return redirect('404');
        }
    }
    // ========================================== Downloads =========================================
    public function getDownloads()
    {
        try{
            $download = Download::all();
            return view('download')->with('downloads', $download);
        }
        catch(\Exception $e){
            return redirect('404');
        }
    }

    public function getOneDownload($id)
    {
        try{
            $download = Download::find($id);
            return view('download-single')->with('downloads',$download);
        }
        catch(\Exception $e){
            return redirect('404');
        }
    }
    // ========================================== Custom Pages =========================================
    public function getCustomPageView($id)
    {
        try{
            $item = ImageContent::find($id);
            return view('custom-page-view')->with('page_items',$item);
        }
        catch(\Exception $e){
            return redirect('404');
        }
    }
    
    // ========================================== Contact =========================================
    public function getContact()
    {
        try{
            return view('contact');
        }
        catch(\Exception $e){
            return redirect('404');
        }
    }

    // ========================================== 404 =========================================
    public function get404()
    {
        try{
            return view('404');
        }
        catch(\Exception $e){
            return "Whoops !!! Something went wrong. Please try again later !!!";
        }
    }

}
