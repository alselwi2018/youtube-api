<?php

namespace App\Http\Controllers;

use App\videoSearch;
use Illuminate\Http\Request;

class VideoSearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('show-video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\videoSearch  $videoSearch
     * @return \Illuminate\Http\Response
     */
    public function show(videoSearch $videoSearch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\videoSearch  $videoSearch
     * @return \Illuminate\Http\Response
     */
    public function edit(videoSearch $videoSearch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\videoSearch  $videoSearch
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, videoSearch $videoSearch)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\videoSearch  $videoSearch
     * @return \Illuminate\Http\Response
     */
    public function destroy(videoSearch $videoSearch)
    {
        //
    }
}
