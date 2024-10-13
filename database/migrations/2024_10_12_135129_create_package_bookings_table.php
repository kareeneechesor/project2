<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackageBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('package_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone');
            $table->date('booking_date');
            $table->time('booking_time');
            $table->string('service'); // Package name
            $table->decimal('price', 10, 2);
            $table->integer('times_used')->default(1); // Default to 1
            $table->integer('visit_count')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('package_bookings');
    }
}
