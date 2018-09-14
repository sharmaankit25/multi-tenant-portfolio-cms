<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Organisation;
use App\Slider;

class MainController extends Controller
{
    public function index()
    {
        $slider = Slider::where('title','Slider 1')->first();
        return view('pages.main.home',compact('slider'));
    }

    public function page($slug)
    {
        $page = Page::where('slug',$slug)->first();
        if(empty($page)){
            return abort(404);
        }
        return view('pages.main.page',compact('page'));
    }

    public function contact()
    {
        return view('pages.main.contact');
    }
}
