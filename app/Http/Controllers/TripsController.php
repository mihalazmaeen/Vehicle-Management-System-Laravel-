<?php

namespace App\Http\Controllers;

use App\Models\Cars;
use App\Models\Drivers;
use App\Models\Trips;
use App\Models\Trip_infos;
use App\Models\Maintenance_cost;
use App\Models\Road_cost;
use App\Models\Commissions;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TripsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    return view('showtrips');

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
        return view('trips')->with('cars',$cars)->with('drivers',$drivers);

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
        $trips=new Trips();
        $trips->today_date=Carbon::now()->format('Y-m-d');
        $trips->trip_date=$request->trip_date;
        $trips->car_number=$car_number->car_number;
        $trips->driver_name=$driver_name->driver_name;
        $trips->gross_income=$request->final_fair;
        $trips->save();
        $trip_id=$trips->id;

       $destination_from=$request->destination_from;
       $destination_to=$request->destination_to;
       for($count=0;$count<count($destination_from);$count++)
       {
           $data=array(
             'trip_id'=>$trip_id,
             'destination_from'=>$destination_from[$count],
             'destination_to'=>$destination_to[$count]

           );
           $insert_data[]=$data;
       }
       Trip_infos::insert($insert_data);

        return redirect('/trips');

    }
    public function fetchtrips()
    {
        $fetchtrips=Trips::all();
        return response()->json([
            'fetchtrips' => $fetchtrips
    ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function show(Trips $trips)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function edit(Trips $trips)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trips $trips)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trips  $trips
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trips $trips)
    {
        //
    }
    public function costing(Request $request){
        $id = $request->trip_id;

        $gross=Trips::select('gross_income')->where('id',$id)->first();
        $driver_name=Trips::select('driver_name')->where('id',$id)->first();
        $g_income=$gross->gross_income;
        $rate=$request->commission;
        $road=$request->total_cost;
        $maint=$request->m_total_cost;
        $commission= ($g_income*$rate)/100;
        $expense= $commission+$road+$maint;
        $net_income=$g_income-$expense;

        $roadcost=new Road_cost();
        $roadcost->trip_id=$request->trip_id;
        $roadcost->r_type = $request->cost_type;
        $roadcost->r_amount = $request->amount;
        $roadcost->r_quantity = $request->quantity;
        $roadcost->r_total_cost = $request->total_cost;
        $roadcost->save();


        $maintenance=new Maintenance_cost();
        $maintenance->trip_id=$request->trip_id;
        $maintenance->m_type=$request->m_type;
        $maintenance->m_amount=$request->m_amount;
        $maintenance->m_total_cost = $request->m_total_cost;
        $maintenance->save();

        $commissions=new Commissions();
        $commissions->trip_id=$request->trip_id;
        $commissions->driver_name=$driver_name->driver_name;
        $commissions->commission_amount=$commission;
        $commissions->save();


        $trips=Trips::find($id);
        $trips->net_income=$net_income;
        $trips->road_cost=$road;
        $trips->maintenance_cost=$maint;
        $trips->driver_commission = $commission;
        $trips->update();

        return redirect('/showtrips');







    }

}
