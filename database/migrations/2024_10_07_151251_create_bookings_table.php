<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->date('booking_date');
            $table->time('booking_time');
            $table->string('service');
            $table->decimal('price', 8, 2);
            $table->string('employee');
            $table->text('details')->nullable();
            $table->string('status')->default('pending');
            $table->timestamps();
        });
    }        

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}
