<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kridit extends Model
{
    protected $table = 'Kridit';

    protected $fillable = array ('kridit_kode','pembeli_no_ktp','paket_code','motor_kode','kridit_tanggal','fotocopy_KTP','fotocopy_KK','fotocopy_slip_gaji');

    public function cicilan() {
        return $this->belongsTo('App\Cicilan', 'kridit_kode');
    }
    public function pembeli() {
        return $this->hasMany('App\Pembeli','pembeli_no_ktp');
    }
    public function kridit_paket() {
        return $this->hasMany('App\Paket','motor_paket');
    }
    public function motor() {
        return $this->hasMany('App\Motor','motor_kode');
    }
}
