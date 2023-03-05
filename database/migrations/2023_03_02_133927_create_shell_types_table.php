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
        Schema::create('shell_types', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('code')->nullable();
            $table->integer('massShell')->nullable();
            $table->string('unitShell')->nullable();
            $table->string('note')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shell_types');
    }
};
