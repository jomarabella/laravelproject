<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('Date_start');
            $table->string('Date_end');
            $table->string('Time');
            $table->string('Package');
            $table->string('DownPayment');
            $table->string('DP_Date');
            $table->string('Fullpayment');  
            $table->string('FP_Date');
            $table->integer('client_id');
            $table->string('appointment_status');
            $table->timestamps();
            
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
