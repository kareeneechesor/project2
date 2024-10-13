<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPromotionIdToPromotionBookingsTable extends Migration
{
    public function up()
    {
        Schema::table('promotion_bookings', function (Blueprint $table) {
            $table->unsignedBigInteger('promotion_id')->nullable()->after('id');

            // If you want to enforce the foreign key relationship
            $table->foreign('promotion_id')->references('id')->on('promotions')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('promotion_bookings', function (Blueprint $table) {
            $table->dropForeign(['promotion_id']);
            $table->dropColumn('promotion_id');
        });
    }
}
