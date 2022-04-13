@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Tambah Data Kendaraan
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
                    <form method="post" action="{{ route('vehicles.store') }}" id="myForm">
                        @csrf
                            <div class="form-group">
                                <label for="title">Nama Kendaraan</label>
                                <input type="text" name="nama_kendaraan" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Nama Kendaraan">
                            </div>
                            <div class="form-group">
                                <label for="title">Jadwal Service</label>
                                <input type="date" name="jadwal_service" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Jadwal Kendaraan">
                            </div>
                            <div class="form-group">
                                <label for="title">Konsumsi BBM</label>
                                <input type="number" name="konsumsi_bbm" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Konsumsi BBM">
                            </div>
                            <div class="form-group">
                                <label for="title">Satuan BBM</label>
                                <input type="text" name="satuan_bbm" class="form-control" id="title" aria-describedby="title" placeholder="Masukkan Satuan BBM">
                            </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
