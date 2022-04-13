<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Driver;
class DriverController extends Controller
{
    public function index()
    {
        $drivers = Driver::all();
        return view('drivers.index',compact('drivers'));
    }

    public function create()
    {
        return view('drivers.create'); //Redirect ke halaman drivers/create.blade.php
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_driver' => 'required',
        ]);

        Driver::create($request->all()); //Fungsi untuk menyimpan data inputan kita

        return redirect()->route('drivers.index')
            ->with('success', 'Driver data created successfully.'); //Redirect ke halaman drivers/index.blade.php dengan pesan success
    }

    public function show(Driver $driver)
    {
        return view('drivers.show', compact('driver')); //Redirect ke halaman drivers/detail.blade.php dengan membawa data driver sesuai ID yang dipilih
    }

    public function edit(Driver $driver)
    {
        return view('drivers.edit', compact('driver')); //Redirect ke halaman drivers/edit.blade.php dengan membawa data driver sesuai ID yang dipilih
    }

    public function update(Request $request, Driver $driver)
    {
        $request->validate([
            'nama_driver' => 'required',
        ]);

        $driver->update($request->all()); //Fungsi untuk mengupdate data inputan kita

        return redirect()->route('drivers.index')
            ->with('success', 'Driver data updated successfully'); //Redirect ke halaman drivers/index.blade.php dengan pesan success
    }

    public function destroy(Driver $driver)
    {
        $driver->delete(); //Fungsi untuk menghapus data sesuai dengan ID yang dipilih

        return redirect()->route('drivers.index')
            ->with('success', 'driver deleted successfully'); //Redirect ke halaman books/index.blade.php dengan pesan success
    }
}
