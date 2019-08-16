<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{

    protected $fillable = ['No_KTP', 'Nama_pembeli', 'Alamat_pembeli', 'Telepone', 'Pembeli_HP'];
    public $timestamps = true;
    public function Beli_kridit()
    {
        return $this->hasOne('App\Beli_kridit');
    }
    
    public function Beli_cash()
    {
        return $this->hasOne('App\Beli_cash');
    }   
}