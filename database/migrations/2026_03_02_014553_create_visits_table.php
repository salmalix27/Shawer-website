<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::create('visits', function (Blueprint $table) {
      $table->id();
      $table->string('ip', 64)->nullable();
      $table->string('user_agent')->nullable();
      $table->string('path')->nullable();
      $table->string('referrer')->nullable();
      $table->date('visited_on')->index();
      $table->timestamps();

      $table->index(['ip','visited_on']);
    });
  }

  public function down(): void {
    Schema::dropIfExists('visits');
  }
};