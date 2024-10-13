<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('employee_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employee_id')->constrained()->onDelete('cascade'); // Assuming you have an employees table
            $table->date('schedule_date');
            $table->time('start_time');
            $table->time('end_time');
            $table->string('status')->default('active'); // Status of the schedule
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('employee_schedules');
    }
}
