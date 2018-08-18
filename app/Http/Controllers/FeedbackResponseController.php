<?php

namespace App\Http\Controllers;

use App\FeedbackResponse;
use Illuminate\Http\Request;

class FeedbackResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.manage.feedback_responses.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.manage.feedback_responses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return \Illuminate\Http\Response
     */
    public function show(FeedbackResponse $feedbackResponse)
    {
        return view('pages.manage.feedback_responses.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(FeedbackResponse $feedbackResponse)
    {
        return view('pages.manage.feedback_responses.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeedbackResponse $feedbackResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeedbackResponse  $feedbackResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeedbackResponse $feedbackResponse)
    {
        //
    }
}
