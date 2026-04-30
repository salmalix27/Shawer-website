<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('phone', 30);
            $table->string('product');
            $table->decimal('loan_amount', 12, 2);
            $table->string('status')->default('NEW'); // NEW / ACCEPTED / REJECTED

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
