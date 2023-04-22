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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string('codeBill')->nullable();
            $table->dateTime('inStoreDate')->nullable();//Ngày nhập
            $table->string('nameCustomer')->nullable();//Tên khách
            $table->string('address')->nullable();//Địa chỉ
            $table->string('contact')->nullable();//Liên hệ
            $table->string('unit')->nullable();//Đơn vị tính
            $table->integer('shellType')->nullable();//Khối lượng
            $table->integer('ammount')->nullable();//Số lượng
            $table->integer('massTotal')->nullable();//Tổng kg
            $table->integer('storageId')->nullable();//Tổng kg
            $table->integer('salePrice')->nullable();//Đơn giá bán
            $table->integer('income')->nullable();//Doanh thu
            $table->integer('bill')->nullable();//Thanh toán
            $table->integer('debt')->signed()->nullable();//Tiền nợ
            $table->integer('shellDebt')->signed()->nullable();//Nợ vỏ
            $table->integer('shellDebtAmmount')->nullable();//Số vỏ nợ
            $table->integer('buyPrice')->nullable();//Giá nhập hàng
            $table->integer('buyTotal')->nullable();//Tổng phí nhập hàng
            $table->integer('interest')->nullable();//Lợi nhuận gộp
            $table->integer('moneySent')->nullable();//Tiền đã thanh toán nhập hàng
            $table->integer('moneyPaidTotal')->nullable();//Tổng tiền chi thanh toán nhập hàng
            $table->integer('moneyPaidDebt')->nullable();//Chênh dư nợ tiền thanh toán nhập hàng
            $table->integer('reciveInfo')->nullable();//Thông tin nhận tiền
            $table->integer('idSale')->nullable();//id nhân viên bán
            $table->string('note')->nullable();//Ghi chú

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
