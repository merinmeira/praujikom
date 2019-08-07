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
            $table->string('kode');
            $table->foreign('No_KTP')->references('No_KTP')->on('pembelis')->onDelete('cascade');
            $table->foreign('paket_kode')->references('paket_code')->on('pakets')->onDelete('cascade');
            $table->foreign('motor_kode')->references('motor_code')->on('');
            $table->date('kridit_tanggal');
            $table->boolean('fotokopi_KTP');
            $table->boolean('fotokopi_KK');
            $table->boolean('fotokopi_slip_gaji');
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
