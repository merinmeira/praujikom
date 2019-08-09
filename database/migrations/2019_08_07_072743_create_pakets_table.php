<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pakets', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('paket_kode');
            $table->double('paket_harga_cash');
            $table->double('paket_uang_muka');
            $table->bigInteger('paket_jumlah_cicilan');
            $table->double('paket_bunga');
            $table->double('paket_nilai_cicilan');
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
        Schema::dropIfExists('pakets');
    }
}
