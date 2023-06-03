<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_details', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('mob_no')->nullable();
            $table->string('email')->nullable();
            $table->string('no_days')->nullable();
            $table->string('address')->nullable();
            $table->date('Arrival_Date')->nullable();
            $table->date('Return_Date')->nullable();
            $table->string('car_need')->nullable();
            $table->integer('car_det_tbl_id')->nullable();
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
        Schema::dropIfExists('booking_details');
    }
}
