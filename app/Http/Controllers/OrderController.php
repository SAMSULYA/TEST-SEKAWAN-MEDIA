<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class OrderController extends Controller
{
    public function index()
    {
        $order = DB::table('orders')
                    ->join('users','users.id','=','orders.user_id')
                    ->join('vehicles','vehicles.id','=','orders.vehicle_id')
                    ->join('drivers','drivers.id','=','orders.driver_id')
                    ->select('orders.jadwal_pemesanan','users.name','vehicles.nama_kendaraan','drivers.nama_driver')
                    ->get();
        // foreach($order as $order)
        // {
        //     return $order->nama_driver;
        // }
        return view('order.index',compact('order'));
    }
}
