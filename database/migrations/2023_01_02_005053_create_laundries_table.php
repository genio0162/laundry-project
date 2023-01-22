<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laundries', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable()->unique();
            $table->foreignId('item_id');
            $table->foreignId('perfume_id');
            $table->foreignId('user_id');
            $table->foreignId('satuan_id')->nullable();
            $table->foreignId('kiloan_id')->nullable();
            $table->date('tanggal_masuk');
            $table->date('tanggal_selesai');
            $table->integer('total_pembayaran')->nullable();
            $table->integer('bayar')->nullable();
            $table->integer('kembalian')->nullable();
            $table->foreignId('payment_id')->default(2);
            $table->foreignId('pickup_id')->default(2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laundries');
    }
};
