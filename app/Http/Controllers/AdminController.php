<?php

namespace App\Http\Controllers;

use App\Models\Pages;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        return view('admin.home');
    }

    public function getPages(){
        return Pages::all();
    }

    public function addNewPage(){
        return view('admin.page');
    }

    public function saveNewPage(Request $request){

        $page = new Pages;
        $page->pageName = $request->pageName;
        $page->pageContent = $request->pageContent;
        $page->save();
        return response()->json(['status' => 'success', 'message' => 'Page Created Successfully']);
    }

    public function viewPage($slug){
        $page = Pages::where('pageSlug',$slug);
        if($page->count()){
            return view('page')->with('page',$page->first());
        } else {
            abort(404);
        }
    }


    public function editPage($slug){
        $page = Pages::where('pageSlug',$slug)->first();
        return view('admin.page')->with('page',$page);
    }

        public function updatePage(Request $request, $slug){
            $page = Pages::where('pageSlug',$slug)->first();
            $page->pageName = $request->pageName;
            $page->pageContent = $request->pageContent;
            $page->save();
            return response()->json(['status' => 'success', 'message' => 'Page Updated Successfully']);
        }


}
