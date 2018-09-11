<?php

namespace App\Http\Controllers;

use App\Achiever;
use App\Event;
use Illuminate\Http\Request;

class AchieverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.manage.achievers.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = Event::get();
        return view('pages.manage.achievers.create',compact('events'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Achiever::create($request->all());
        return redirect()->route('achievers.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Achiever  $achiever
     * @return \Illuminate\Http\Response
     */
    public function show(Achiever $achiever)
    {
        return view('pages.manage.achievers.show',compact('achiever'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Achiever  $achiever
     * @return \Illuminate\Http\Response
     */
    public function edit(Achiever $achiever)
    {
        return view('pages.manage.achievers.edit',compact('achiever'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Achiever  $achiever
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Achiever $achiever)
    {
        $achiever->update($request->all());
        return redirect()->route('achievers.show',['achiever'=>$achiever]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Achiever  $achiever
     * @return \Illuminate\Http\Response
     */
    public function destroy(Achiever $achiever)
    {
        return redirect()->route('achievers.index');
    }
}
