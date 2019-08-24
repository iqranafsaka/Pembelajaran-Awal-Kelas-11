@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form action="{{ route('wali.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama Wali</label>
                    <input class="form-control" type="text" name="nama">
                </div>
                
                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <select class="form-control" name="id_mahasiswa">
                        @foreach ($mhs as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-outline-info">Simpan Data</button>
                </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
