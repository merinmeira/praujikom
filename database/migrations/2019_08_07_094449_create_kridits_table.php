<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKriditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kridits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kridit_kode');
            $table->bigInteger('pembeli_No_KTP')->unsigned();
            $table->foreign('pembeli_No_KTP')->references('id')->on('kridits');
            $table->bigInteger('paket_kode')->unsigned();
            $table->foreign('paket_kode')->references('id')->on('kridits');
            $table->bigInteger('motor_kode')->unsigned();
            $table->foreign('motor_kode')->references('id')->on('kridits');
            $table->date('kridit_tanggal');
            $table->binary('fotokopi_KTP');
            $table->binary('fotokopi_KK');
            $table->binary('fotokopi_slip_gaji');

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
        Schema::dropIfExists('kridits');
    }
}
