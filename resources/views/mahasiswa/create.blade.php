@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <form action="{{ route('mahasiswa.store') }}" method="POST">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="">Nama Mahasiswa</label>
                    <input class="form-control" type="text" name="nama">
                </div>

                <div class="form-group">
                    <label for="">Nomor Induk Mahasiswa</label>
                    <input class="form-control" type="text" name="nim">
                </div>
                
                <div class="form-group">
                    <label for="">Nama Dosen</label>
                    <select class="form-control" name="id_dosen">
                        @foreach ($dosen as $data)
                        <option value="{{ $data->id }}">{{ $data->nama }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Hobi</label>
                    <select name="hobi[]" class="form-control multiple" multiple>
                        @foreach ($hobi as $data)
                            <option value="{{ $data->id }}">{{ $data->hobi }}</option>
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
