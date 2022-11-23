<?php

namespace App\Http\Controllers;
Use App\Models\Cars;
use App\Models\Drivers;
use Illuminate\Http\Request;

class DriversController extends Controller
{
    /**
     * Display a listing of the resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
//     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars=Cars::all();
        return view('drivers')->with('cars',$cars);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car_id = $request->car_id;
       $car_name=Cars::select('car_name')->where('id',$car_id)->first();

        $driverData=[
            'car_id'=>$request->car_id,
            'driver_name'=>$request->driver_name,
            'car_name'=>$car_name->car_name,
            'phone_number'=>$request->phone_number,
            'address'=>$request->address


        ];
        Drivers::create($driverData);
        return redirect('/drivers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function show(Drivers $drivers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function edit(Drivers $drivers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Drivers $drivers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Drivers  $drivers
     * @return \Illuminate\Http\Response
     */
    public function destroy(Drivers $drivers)
    {
        //
    }
    public function cardetails($id){
        $car= Cars::find($id);
        if($car){
            return response()->json([
                'status' => '200',
                'car' => $car,
            ]);
        }
        else {
        return response()->json([
               'status' => '404'
            ]);
        }
    }
}
