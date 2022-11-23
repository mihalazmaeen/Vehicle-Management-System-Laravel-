<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Drivers;
use App\Models\Trip;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TripController extends Controller
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
        $cars=Cars::all();
        $drivers=Drivers::all();
        return view('trip')->with('cars',$cars)->with('drivers',$drivers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car_id = $request->car_name;
        $driver_id = $request->driver_name;
        $car_number=Cars::select('car_number')->where('id',$car_id)->first();
        $driver_name =Drivers::select('driver_name')->where('id',$driver_id)->first();
        $tripData=[
            'today_date'=>Carbon::now()->format('Y-m-d'),
            'trip_date'=>$request->trip_date
//            'car_number'=>$car_number,
//            'driver_name'=>$driver_name



        ];
        Trip::create($tripData);
        return redirect('/trip');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function show(Trip $trip)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trip $trip)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        //
    }
}
