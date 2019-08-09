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
            $table->string('cicilan_kode');
            $table->bigInteger('kridit_code')->unsigned();
            $table->foreign('kridit_code')->references('id')->on('cicilans');
            $table->bigInteger('cicilan_jumlah')->unsigned();
            $table->foreign('cicilan_jumlah')->references('id')->on('cicilans');
            $table->date('cicilan_sisa_ke');
            $table->double('cicilan_sisa_harga');
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
