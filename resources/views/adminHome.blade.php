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
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    You are Admin
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
