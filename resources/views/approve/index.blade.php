@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{ route('approved.index')}}">Persetujuan</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Data Driver
                    {{-- <div class="text-right">
                        <a class="btn btn-success" href="{{ route('drivers.create') }}">Tambah Driver</a>
                    </div> --}}
                </div>

                <div class="card-body">
                    <div class="alert alert-warning" role="alert">
                        <b>PERHATIAN !!</b>
                        <br>
                        <p>Nilai 0 dikolom Disetujui berarti Belum diapprove (Disetujui)</p>
                        <p>Nilai 1 dikolom Disetujui berarti Sudah diapprove (Disetujui)</p>
                    </div>
                    <table class="table">
                        <tr>
                            <th>Jadwal Pemesanan</th>
                            <th>Nama Approved</th>
                            <th>Disetujui</th>
                            <th>Aksi</th>
                        </tr>
                        @foreach ($approve as $app)
                            <tr>
                                <td>{{ $app->jadwal_pemesanan }}</td>
                                <td>{{ $app->name }}</td>
                                <td>{{ $app->Disetujui }}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{ route('approved.edit',$app->id) }}">Setujui</a>
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
