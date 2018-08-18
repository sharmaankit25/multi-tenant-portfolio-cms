<?php

namespace App\Http\Controllers;

use App\Challan;
use Illuminate\Http\Request;

class ChallanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.manage.challans.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.manage.challans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Challan::create($request->all());
        return redirect()->route('challans.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Challan  $challan
     * @return \Illuminate\Http\Response
     */
    public function show(Challan $challan)
    {
        return view('pages.manage.challans.show',compact('challan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Challan  $challan
     * @return \Illuminate\Http\Response
     */
    public function edit(Challan $challan)
    {
        return view('pages.manage.challans.edit',compact('challan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Challan  $challan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Challan $challan)
    {
        $challan->update($request->all());
        return redirect()->route('challans.show',['challan'=>$challan]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Challan  $challan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challan $challan)
    {
        return redirect()->route('challans.index');
    }
}
