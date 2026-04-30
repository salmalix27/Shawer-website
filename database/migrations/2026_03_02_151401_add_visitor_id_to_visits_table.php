<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void {
    Schema::table('visits', function (Blueprint $table) {
      $table->string('visitor_id', 64)->nullable()->after('id');
      $table->index(['visitor_id','visited_on']);
    });
  }

  public function down(): void {
    Schema::table('visits', function (Blueprint $table) {
      $table->dropIndex(['visitor_id','visited_on']);
      $table->dropColumn('visitor_id');
    });
  }
};