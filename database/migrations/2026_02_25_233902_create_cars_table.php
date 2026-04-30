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
        Schema::create('cars', function (Blueprint $table) {
                  $table->id();
        $table->string('brand');                 // BMW, BYD ...
        $table->string('model');                 // C18, X5 ...
        $table->unsignedInteger('year');
        $table->unsignedBigInteger('price');
        $table->unsignedInteger('kilometres');
        $table->enum('transmission', ['Automatic','Manual','Hybrid'])->nullable();
        $table->enum('fuel', ['Benzine','Electric','Diesel','Natural gas','Hybrid'])->nullable();
        $table->string('city')->nullable();
        $table->string('image')->nullable();     // path/url
        $table->string('whatsapp')->nullable();
        $table->string('phone')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
