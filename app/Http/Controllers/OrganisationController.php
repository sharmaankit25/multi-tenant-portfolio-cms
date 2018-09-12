<?php

namespace App\Http\Controllers;

use App\Organisation;
use Illuminate\Http\Request;
use Unique;

class OrganisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $this->authorize(Organisation::class);
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
        $this->authorize(Organisation::class);
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
        $this->authorize(Organisation::class);
        $inputs = $request->all();
        $inputs['token'] = Unique::byModal('App\Organisation','token','alphanumeric',8,'ORG');
        Organisation::create($inputs);
        return redirect()->route('organisations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Organisaton  $organisaton
     * @return \Illuminate\Http\Response
     */
    public function show(Organisation $organisation)
    {
        $this->authorize($organisation);
        return view('pages.manage.organisations.show',compact('organisation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organisaton  $organisaton
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisation $organisation)
    {
        $this->authorize($organisation);
        return view('pages.manage.organisations.edit',compact('organisation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organisaton  $organisaton
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organisation $organisation)
    {
        $this->authorize($organisation);
        $organisation->update($request->except('token'));
        return redirect()->route('organisations.show',['organisation'=>$organisation]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organisaton  $organisaton
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organisation $organisation)
    {
        $this->authorize($organisation);
        return redirect()->route('organisations.index');
    }
}
