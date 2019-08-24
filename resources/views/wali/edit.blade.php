@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('wali.update', $wali->id) }}" method="POST">
                        <input type="hidden" value="PATCH" name="_method">
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="">Nama Wali</label>
                        <input class="form-control" type="text" name="nama" value="{{ $wali->nama }}">
                    </div>

                    <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <select class="form-control" name="id_mahasiswa">
                                @foreach ($mhs as $data)
                                <option value="{{ $data->id }}" {{$wali->id_mahasiswa == $data->id ? 'selected="selected"' : ''}}> {{ $data->nama }} </option>
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
