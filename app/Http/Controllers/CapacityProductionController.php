<?php

namespace App\Http\Controllers;

use App\Models\CapacityProduction;
use App\Http\Requests\StoreCapacityProductionRequest;
use App\Http\Requests\UpdateCapacityProductionRequest;

class CapacityProductionController extends Controller
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
     * @param  \App\Http\Requests\StoreCapacityProductionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCapacityProductionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CapacityProduction  $capacityProduction
     * @return \Illuminate\Http\Response
     */
    public function show(CapacityProduction $capacityProduction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CapacityProduction  $capacityProduction
     * @return \Illuminate\Http\Response
     */
    public function edit(CapacityProduction $capacityProduction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCapacityProductionRequest  $request
     * @param  \App\Models\CapacityProduction  $capacityProduction
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCapacityProductionRequest $request, CapacityProduction $capacityProduction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CapacityProduction  $capacityProduction
     * @return \Illuminate\Http\Response
     */
    public function destroy(CapacityProduction $capacityProduction)
    {
        //
    }
}
