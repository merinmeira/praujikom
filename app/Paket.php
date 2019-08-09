<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    protected $table = 'Paket';

    protected $fillable = array ('paket_kode','paket_harga_cash','paket_uang_muka','paket_jumlah_cicilan','paket_bunga','paket_nilai_cicilan');

    public function Kridit() {
        return $this->belongto('App\Kridit', 'paket_kode');
        }
}
