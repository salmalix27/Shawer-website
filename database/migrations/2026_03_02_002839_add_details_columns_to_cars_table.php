<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::table('cars', function (Blueprint $table) {
      $table->string('condition')->nullable();        // USED / NEW
      $table->string('version')->nullable();          // AMG
      $table->string('body_type')->nullable();        // SEDAN
      $table->string('color')->nullable();            // GREY
      $table->string('interior')->nullable();         // FULL LEATHER
      $table->string('payment_options')->nullable();  // CASH OR INSTALLMENT
      $table->string('air_conditioning')->nullable(); // AUTOMATIC AIR CONDITIONING
      $table->unsignedInteger('doors')->nullable();   // 4
      $table->text('description')->nullable();
 
      $table->json('images')->nullable();
    });
  }

  public function down(): void {
    Schema::table('cars', function (Blueprint $table) {
      $table->dropColumn([
        'condition','version','body_type','color','interior',
        'payment_options','air_conditioning','doors','description','images'
      ]);
    });
  }
};