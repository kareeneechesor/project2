<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
   // create_services_table.php
public function up()
{
    Schema::create('services', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 8, 2);
        $table->string('duration');
        $table->string('image'); // This will store the image path
        $table->timestamps();
    });
}

    public function down()
    {
        Schema::dropIfExists('services');
    }
}
