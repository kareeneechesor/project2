<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimesTable extends Migration
{
    public function up()
    {
        Schema::create('times', function (Blueprint $table) {
            $table->id();
            $table->time('time'); // Store time
            $table->string('status')->default('available'); // Status can be available or booked
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('times');
    }
}
