<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Organisation;
use App\Slider;
use App\Event;

class MainController extends Controller
{
    public function index()
    {
        $slider = Slider::where('title','home-page')->first();
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

    public function admission()
    {
        return view('pages.main.admission');
    }

    public function challan()
    {
        return view('pages.main.challan');
    }

    public function careers()
    {
        return view('pages.main.careers');
    }

    public function gallery()
    {
        return view('pages.main.gallery');
    }

    public function events()
    {
        $events = Event::get();
        return view('pages.main.events',compact('events'));
    }

    public function feedback()
    {
        return view('pages.main.feedback');
    }

    public function notice()
    {
        return view('pages.main.notice-news');
    }

    public function news()
    {
        return view('pages.main.notice-news');
    }

    public function results()
    {
        return view('pages.main.results');
    }

    public function staff()
    {
        return view('pages.main.staff');
    }
}
