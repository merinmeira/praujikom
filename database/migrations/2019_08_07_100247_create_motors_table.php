<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('motor_kode');
            $table->string('motor_merk');
            $table->date('cicilan_tanggal');
            $table->Integer('cicilan_jumlah');
            $table->Integer('cicilan_ke');
            $table->Integer('cicilan-sisa_ke');
            $table->double('cicilan-sisa_harga');
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
        Schema::dropIfExists('motors');
    }
}
