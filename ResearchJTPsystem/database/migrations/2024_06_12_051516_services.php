<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id('services_id');
            $table->string('services_name');
            $table->string('price');
            $table->string('description');
            $table->string('ratings');
            $table->foreignId('admin_id');
            $table->timestamps();
        });
        //
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */

    
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
