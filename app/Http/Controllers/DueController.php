<?php

namespace App\Http\Controllers;

use App\Models\Due;
use App\Http\Requests\StoreDueRequest;
use App\Http\Requests\UpdateDueRequest;

class DueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dues.index');
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
     * @param  \App\Http\Requests\StoreDueRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDueRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function show(Due $due)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function edit(Due $due)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDueRequest  $request
     * @param  \App\Models\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDueRequest $request, Due $due)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Due  $due
     * @return \Illuminate\Http\Response
     */
    public function destroy(Due $due)
    {
        //
    }
}
