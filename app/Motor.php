<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motor extends Model
{
    protected $fillable = ['motor_kode', 'motor_merk', 'motor_type', 'warna_pilihan', 'harga_motor', 'gambar_motor'];
    public $timestamps = true;
    public function Beli_kridit()
    {
        return $this->hasOne('App\Beli_kridit');
    }
}
