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
        return view('admin.add-new-page');
    }

    public function saveNewPage(Request $request){
        $validated = $request->validate([
            $request->pageName => 'required|string',
            $request->pageContent => 'required',
        ]);

        $page = new Pages;
        $page->pageName = $validated['pageName'];
        $page->pageName = $validated['pageContent'];

        return $request->all();
    }
}
