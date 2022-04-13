@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('admin.home')}}">Admin</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('drivers.index')}}">Driver</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{ route('vehicles.index')}}">Kendaraan</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Data Kendaraan
                    <div class="text-right">
                        <a class="btn btn-success" href="{{ route('vehicles.create') }}">Tambah Kendaraan</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Nama Kendaraan</th>
                            <th>Jadwal Service</th>
                            <th>Konsumsi BBM</th>
                            <th>Satuan BBM</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($vehicles as $vehicle)
                            <tr>
                                <td>{{ $vehicle->id }}</td>
                                <td>{{ $vehicle->nama_kendaraan }}</td>
                                <td>{{ $vehicle->jadwal_service }}</td>
                                <td>{{ $vehicle->konsumsi_bbm }}</td>
                                <td>{{ $vehicle->satuan_bbm }}</td>
                                <td>
                                    <form action="{{ route('vehicles.destroy',$vehicle->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('vehicles.edit',$vehicle->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
