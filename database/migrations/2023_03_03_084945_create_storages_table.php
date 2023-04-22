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
        Schema::create('storages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('totalShell')->nullable();
            $table->string('totalShellMass')->nullable();
            $table->integer('bt20')->default(0);
            $table->integer('bt25')->default(0);
            $table->integer('bt27')->default(0);
            $table->integer('bt28')->default(0);
            $table->integer('bn2')->default(0);
            $table->integer('bn3')->default(0);
            $table->integer('bn4')->default(0);
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('note')->nullable();
            $table->boolean('status')->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storages');
    }
};
