<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCicilansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cicilans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode');
            $table->string('kridit_code');
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
        Schema::dropIfExists('cicilans');
    }
}
