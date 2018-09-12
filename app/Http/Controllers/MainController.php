<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class MainController extends Controller
{
    public function page($slug)
    {
        $page = Page::where('slug',$slug)->first();
        if(empty($page)){
            return abort(404);
        }
        return view('pages.main.page',compact('page'));
    }
}
