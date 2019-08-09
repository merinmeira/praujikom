<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePembelisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelis', function (Blueprint $table) {
            $table->bigIncrements('id'); 
            $table->bigInteger('pembeli_sNo_KTP');
            $table->string('pembeli_nama');
            $table->string('pembeli_alamat');
            $table->bigInteger('pembeli_telepone');
            $table->Integer('Pembeli_hp');
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
        Schema::dropIfExists('pembelis');
    }
}
