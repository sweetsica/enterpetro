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
        Schema::create('menu_prices', function (Blueprint $table) {
            $table->id();
            $table->string('shellType')->nullable();
            $table->string('ammount')->nullable();
            $table->string('totalMass')->nullable();
            $table->string('billID')->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_prices');
    }
};
