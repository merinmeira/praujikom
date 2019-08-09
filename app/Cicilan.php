<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cicilan extends Model
{
    protected $table = 'Cicilan';

    protected $fillable = array ('cicilan_kode','kridit_kode','cicilan_tanggal','cicilan_jumlah','cicilan_ke','cicilan_sisa_ke','cicilan_sisa_harga');

    public function kridit() {
        return $this->hasMany('App\Kridit', 'kridit_kode');
    }
}
