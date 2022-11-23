<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->date('today_date');
            $table->date('trip_date');
            $table->string('car_number');
            $table->string('driver_name');
            $table->integer('gross_income');
            $table->integer('net_income');
            $table->integer('road_cost');
            $table->integer('maintenance_cost');
            $table->integer('driver_commission');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
