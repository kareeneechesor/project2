<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('bookings', function (Blueprint $table) {
        $table->enum('approved', ['pending', 'approved', 'rejected'])->default('pending')->change();
    });
}

public function down()
{
    Schema::table('bookings', function (Blueprint $table) {
        $table->integer('approved')->default(0)->change(); // In case you want to roll back
    });
}
    
    
};
