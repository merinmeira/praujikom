<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    protected $table = 'Pembeli';

    protected $fillable = array ('pembeli_No_KTP','pembeli_nama','pembeli_alamat','pembeli_telpon','pembeli_HP');

    public function Kridit() {
        return $this->belongto('App\Pembeli', 'pembeli_No_KTP');
        }
    }