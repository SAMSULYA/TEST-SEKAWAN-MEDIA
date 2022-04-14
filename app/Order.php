<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
class Order extends Model
{
    protected $fillable = ['nama_kendaraan','jadwal_service','konsumsi_bbm','satuan_bbm'];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function vehicle()
    {
        return $this->belongsToMany('App\Vehicle');
    }
}
