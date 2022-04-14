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
                    <li class="list-group-item">
                        <a href="{{ route('order')}}">Pemesanan Kendaraan</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Data Driver
                    <div class="text-right">
                        <a class="btn btn-success" href="{{ route('drivers.create') }}">Tambah Driver</a>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Nama Driver</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($drivers as $driver)
                            <tr>
                                <td>{{ $driver->id }}</td>
                                <td>{{ $driver->nama_driver }}</td>
                                <td>
                                    <form action="{{ route('drivers.destroy',$driver->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{ route('drivers.edit',$driver->id) }}">Edit</a>
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
