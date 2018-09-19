<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Photo;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::get();
        return view('pages.manage.sliders.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $slider_options = $this->slider_options();
        return view('pages.manage.sliders.create',compact('slider_options'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Slider::create($request->all());
        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        return view('pages.manage.sliders.show',compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $slider_options = $this->slider_options();
        return view('pages.manage.sliders.edit',compact('slider','slider_options'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        $photo_description = $request->description;
        foreach($request->file('photo') as $k => $photo)
        {
            $path = $photo->store('sliders');
            // If photo is being uploaded then upload photo and remove previous photo from folder using Unlink
            // ELSE if photo is empty then skip unilinking and uploading

            $photo = Photo::create([
                'photo'=>$path,
                'description'=>$photo_description[$k]
            ]);
            $slider->photos()->attach($photo);
        }
        $slider->update($request->all());
        return redirect()->route('sliders.show',['slider'=>$slider]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        return redirect()->route('sliders.index');
    }

    protected function slider_options()
    {
        $sliders = Slider::get();
        
        $options = [
            'home-page'=>'Home Banner'
        ];


        foreach($sliders as $slider){
            if(array_key_exists($slider->title,$options)){
                unset($options[$slider->title]);
            }
        }
        return $options;
    }
}
