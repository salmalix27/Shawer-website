<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
  public function up(): void
  {
    Schema::table('cars', function (Blueprint $table) {

      // gallery
      if (!Schema::hasColumn('cars','images')) {
        $table->json('images')->nullable()->after('image');
      }

      // city bilingual
      if (!Schema::hasColumn('cars','city_en')) $table->string('city_en',120)->nullable()->after('city');
      if (!Schema::hasColumn('cars','city_ar')) $table->string('city_ar',120)->nullable()->after('city_en');

      // description bilingual
      if (!Schema::hasColumn('cars','description_en')) $table->text('description_en')->nullable()->after('city_ar');
      if (!Schema::hasColumn('cars','description_ar')) $table->text('description_ar')->nullable()->after('description_en');

      // values bilingual
      if (!Schema::hasColumn('cars','condition_en')) $table->string('condition_en',50)->nullable()->after('description_ar');
      if (!Schema::hasColumn('cars','condition_ar')) $table->string('condition_ar',50)->nullable()->after('condition_en');

      if (!Schema::hasColumn('cars','fuel_en')) $table->string('fuel_en',50)->nullable()->after('condition_ar');
      if (!Schema::hasColumn('cars','fuel_ar')) $table->string('fuel_ar',50)->nullable()->after('fuel_en');

      if (!Schema::hasColumn('cars','transmission_en')) $table->string('transmission_en',50)->nullable()->after('fuel_ar');
      if (!Schema::hasColumn('cars','transmission_ar')) $table->string('transmission_ar',50)->nullable()->after('transmission_en');

      if (!Schema::hasColumn('cars','payment_options_en')) $table->string('payment_options_en',160)->nullable()->after('transmission_ar');
      if (!Schema::hasColumn('cars','payment_options_ar')) $table->string('payment_options_ar',160)->nullable()->after('payment_options_en');

      if (!Schema::hasColumn('cars','body_type_en')) $table->string('body_type_en',120)->nullable()->after('payment_options_ar');
      if (!Schema::hasColumn('cars','body_type_ar')) $table->string('body_type_ar',120)->nullable()->after('body_type_en');

      if (!Schema::hasColumn('cars','air_conditioning_en')) $table->string('air_conditioning_en',160)->nullable()->after('body_type_ar');
      if (!Schema::hasColumn('cars','air_conditioning_ar')) $table->string('air_conditioning_ar',160)->nullable()->after('air_conditioning_en');

      if (!Schema::hasColumn('cars','color_en')) $table->string('color_en',120)->nullable()->after('air_conditioning_ar');
      if (!Schema::hasColumn('cars','color_ar')) $table->string('color_ar',120)->nullable()->after('color_en');

      if (!Schema::hasColumn('cars','interior_en')) $table->string('interior_en',160)->nullable()->after('color_ar');
      if (!Schema::hasColumn('cars','interior_ar')) $table->string('interior_ar',160)->nullable()->after('interior_en');
    });
  }

  public function down(): void
  {
    Schema::table('cars', function (Blueprint $table) {
      $cols = [
        'images',
        'city_en','city_ar',
        'description_en','description_ar',
        'condition_en','condition_ar',
        'fuel_en','fuel_ar',
        'transmission_en','transmission_ar',
        'payment_options_en','payment_options_ar',
        'body_type_en','body_type_ar',
        'air_conditioning_en','air_conditioning_ar',
        'color_en','color_ar',
        'interior_en','interior_ar',
      ];

      foreach ($cols as $c) {
        if (Schema::hasColumn('cars', $c)) {
          $table->dropColumn($c);
        }
      }
    });
  }
};