<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Trip_infos;
use App\Models\Trips;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Trip_infosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::select('select * from trips,trip_infos where trips.id=trip_infos.trip_id ');
        return view('tripdetails',['data'=>$data]);
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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip_infos  $trip_infos
     * @return \Illuminate\Http\Response
     */
    public function show(Trip_infos $trip_infos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip_infos  $trip_infos
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip_infos $trip_infos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip_infos  $trip_infos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip_infos $trip_infos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip_infos  $trip_infos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip_infos $trip_infos)
    {
        //
    }
}
