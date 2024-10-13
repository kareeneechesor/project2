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
    Schema::create('packages', function (Blueprint $table) {
        $table->id(); // ลำดับ
        $table->string('name'); // ชื่อแพคเกจ
        $table->text('description'); // รายละเอียด
        $table->string('image')->nullable(); // รูป
        $table->decimal('price', 8, 2); // ราคา
        $table->integer('usage_count'); // จำนวนครั้งที่ใช้
        $table->enum('status', ['available', 'unavailable']); // สถานะ
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
