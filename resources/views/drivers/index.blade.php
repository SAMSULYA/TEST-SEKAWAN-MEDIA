@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
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
