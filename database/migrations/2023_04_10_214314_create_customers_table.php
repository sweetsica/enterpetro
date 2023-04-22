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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('type')->default('Sỉ');
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->dateTime('dob')->nullable();
            $table->string('totalMass')->nullable();
            $table->string('totalPaid')->nullable();
            $table->string('totalShell')->nullable();
            $table->string('totalBill')->nullable();
            $table->string('debtMoney')->nullable();
            $table->string('debtShell')->nullable();
            $table->text('note')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
