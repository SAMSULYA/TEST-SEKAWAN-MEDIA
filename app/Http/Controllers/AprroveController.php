<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AprroveController extends Controller
{
    public function index()
    {
        $approve = DB::table('aprroves')
                    ->join('users','users.id','=','aprroves.user_id')
                    ->join('orders','orders.id','=','aprroves.order_id')
                    ->select('aprroves.*','users.name','orders.jadwal_pemesanan')
                    ->get();
        return view('approve.index', compact('approve'));
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

    public function destroy()
    {
    }
}
