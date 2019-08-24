@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('mahasiswa.update', $mhs->id) }}" method="POST">
                        <input type="hidden" value="PATCH" name="_method">
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input class="form-control" type="text" name="nama" value="{{ $mhs->nama }}">
                    </div>

                    <div class="form-group">
                        <label for="">Nomor Induk Mahasiswa</label>
                        <input class="form-control" type="text" name="nim" value="{{ $mhs->nim }}">
                    </div>

                    <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <select class="form-control" name="id_dosen">
                            @foreach ($dosen as $data)
                                <option value="{{ $data->id }}" {{$mhs->id_dosen == $data->id ? 'selected="selected"' : ''}}> {{ $data->nama }} </option>
                            @endforeach
                        </select>
                    </div>
                        
                    <div class="form-group">
                            <label for="">Hobi</label>
                            <select name="hobi[]" class="form-control multiple" multiple>
                            @foreach ($hobi as $data)
                                <option value="{{ $data->id }}" {{ (in_array($data->id, $selected)) ? 'selected="selected"' : ''}}>{{ $data->hobi }}</option>
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
