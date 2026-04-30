<?php

// database/migrations/xxxx_add_status_to_contact_requests_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::table('contact_requests', function (Blueprint $table) {
      $table->string('status')->default('pending')->after('car_comment');
      $table->timestamp('accepted_at')->nullable()->after('status');
    });
  }

  public function down(): void {
    Schema::table('contact_requests', function (Blueprint $table) {
      $table->dropColumn(['status','accepted_at']);
    });
  }
};