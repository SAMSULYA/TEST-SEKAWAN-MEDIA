<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;

class VehicleController extends Controller
{
    public function index()
    {
        $vehicles = Vehicle::all();
        //dd($vehicles);
        return view('vehicles.index',compact('vehicles'));
    }

    public function create()
    {
        return view('vehicles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_kendaraan' => 'required',
            'jadwal_service' => 'required',
            'konsumsi_bbm' => 'required',
            'satuan_bbm' => 'required'
        ]);

        Vehicle::create($request->all());

        return redirect()->route('drivers.index')
            ->with('success', 'Vehicle data created successfully.');
    }

    public function show()
    {
    }

    public function edit(Vehicle $vehicle)
    {
        return view('vehicles.edit', compact('vehicle'));
    }

    public function update(Request $request, Vehicle $vehicle)
    {
        $request->validate([
            'nama_kendaraan' => 'required',
            'jadwal_service' => 'required',
            'konsumsi_bbm' => 'required',
            'satuan_bbm' => 'required'
        ]);

        $vehicle->update($request->all());

        return redirect()->route('vehicles.index')
            ->with('success', 'Vehicle data updated successfully'); //Redirect ke halaman drivers/index.blade.php dengan pesan success
    }

    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect()->route('vehicles.index')
            ->with('success', 'Vehicle deleted successfully'); //Redirect ke halaman books/index.blade.php dengan pesan success
    }
}
