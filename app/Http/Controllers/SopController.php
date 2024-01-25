<?php

namespace App\Http\Controllers;

use App\Models\Sop;
use App\Http\Requests\StoreSopRequest;
use App\Http\Requests\UpdateSopRequest;

class SopController extends Controller
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
     * @param  \App\Http\Requests\StoreSopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function show(Sop $sop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function edit(Sop $sop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSopRequest  $request
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSopRequest $request, Sop $sop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sop  $sop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sop $sop)
    {
        //
    }
}
