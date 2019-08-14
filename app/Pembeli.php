<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{

    protected $fillable = [
        'pembeli_No_KTP','pembeli_nama','pembeli_alamat','pembeli_telpon','pembeli_HP'
    ];

   
        
    }