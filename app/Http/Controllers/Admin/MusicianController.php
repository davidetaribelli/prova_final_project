<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\musician;
use App\Http\Requests\StoremusicianRequest;
use App\Http\Requests\UpdatemusicianRequest;

class MusicianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoremusicianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremusicianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\musician  $musician
     * @return \Illuminate\Http\Response
     */
    public function show(musician $musician)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\musician  $musician
     * @return \Illuminate\Http\Response
     */
    public function edit(musician $musician)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemusicianRequest  $request
     * @param  \App\Models\musician  $musician
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemusicianRequest $request, musician $musician)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\musician  $musician
     * @return \Illuminate\Http\Response
     */
    public function destroy(musician $musician)
    {
        //
    }
}
