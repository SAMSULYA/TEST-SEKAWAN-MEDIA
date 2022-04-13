@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit Data Kendaraan
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="{{ route('vehicles.update',$vehicle->id) }}" id="myForm">
                        @csrf
                        @method('PUT')
                            <div class="form-group">
                                <label for="title">Nama Kendaran</label>
                                <input type="text" name="nama_kendaraan" value="{{ $vehicle->nama_kendaraan }}" class="form-control" id="title" aria-describedby="title">
                            </div>

                            <div class="form-group">
                                <label for="title">Jadwal Service</label>
                                <input type="text" name="jadwal_service" value="{{ $vehicle->jadwal_service }}" class="form-control" id="title" aria-describedby="title" >
                            </div>

                            <div class="form-group">
                                <label for="title">Konsumsi BBM</label>
                                <input type="text" name="konsumsi_bbm" value="{{ $vehicle->konsumsi_bbm }}" class="form-control" id="title" aria-describedby="title" >
                            </div>


                            <div class="form-group">
                                <label for="title">Satuan BBM</label>
                                <input type="text" name="satuan_bbm" value="{{ $vehicle->satuan_bbm }}" class="form-control" id="title" aria-describedby="title" >
                            </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
