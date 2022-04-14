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
                    ->select('orders.*','users.name','vehicles.nama_kendaraan','drivers.nama_driver')
                    ->get();
        // foreach($order as $order)
        // {
        //     return $order->nama_driver;
        // }
        return view('order.index',compact('order'));
    }
    public function create()
    {
        
    }

    public function store(Request $request)
    {

    }

    public function show()
    {
    }

    public function edit()
    {

    }

    public function update()
    {
    }

    public function destroy($id)
    {
        DB::table('orders')->where('id',$id)->delete();
        return redirect()->route('orders.index');
    }
}
