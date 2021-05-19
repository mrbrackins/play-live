<?php

namespace App\Http\Controllers;

use App\Models\UploadVideo;
use Illuminate\Http\Request;

class UploadVideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('uploadvideo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\UploadVideo  $uploadVideo
     * @return \Illuminate\Http\Response
     */
    public function show(UploadVideo $uploadVideo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UploadVideo  $uploadVideo
     * @return \Illuminate\Http\Response
     */
    public function edit(UploadVideo $uploadVideo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UploadVideo  $uploadVideo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UploadVideo $uploadVideo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UploadVideo  $uploadVideo
     * @return \Illuminate\Http\Response
     */
    public function destroy(UploadVideo $uploadVideo)
    {
        //
    }
}
