<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromotionBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('promotion_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->date('booking_date');
            $table->string('booking_time');
            $table->text('details')->nullable();
            $table->string('service');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('promotion_bookings');
    }
}
