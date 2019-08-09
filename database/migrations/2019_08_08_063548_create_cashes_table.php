<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cash_code');
            $table->bigInteger('pembeli_No_KTP')->unsigned();
            $table->foreign('pembeli_No_KTP')->references('id')->on('cashes');
            $table->bigInteger('motor_kode')->unsigned();
            $table->foreign('kode-motor')->references('id')->on('cashes');
            $table->date('cash_tanggal');
            $table->double('cash_bayar');
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
        Schema::dropIfExists('cashes');
    }
}
