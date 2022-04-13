<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['nama_kendaraan','jadwal_service','konsumsi_bbm','satuan_bbm'];
}
