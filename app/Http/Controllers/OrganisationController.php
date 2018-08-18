<?php

namespace App\Http\Controllers;

use App\Organisation;
use Illuminate\Http\Request;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $this->authorize('view',Organisation::class);
       $organisations = Organisation::all();
       return view('pages.manage.organisations.index',compact('organisations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.manage.organisations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Organisation::create($request->all());
        return redirect()->route('organisations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organisaton  $organisaton
     * @return \Illuminate\Http\Response
     */
    public function show(Organisaton $organisaton)
    {
        //
        return view('pages.manage.organisations.show',compact('organisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organisaton  $organisaton
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisaton $organisaton)
    {
        //
        return view('pages.manage.organisations.edit',compact('organisation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organisaton  $organisaton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisaton $organisaton)
    {
        $organisation->update($request->all());
        return redirect()->route('organisations.show',['organisation'=>$organisation]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organisaton  $organisaton
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisaton $organisaton)
    {
        //
        return redirect()->route('organisations.index');
    }
}
