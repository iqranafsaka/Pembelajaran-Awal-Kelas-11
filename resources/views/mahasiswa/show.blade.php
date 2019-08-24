@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('mahasiswa.show', $mhs->id) }}" method="POST">
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="">Nama Mahasiswa</label>
                        <input class="form-control" type="text" name="nama" value="{{ $mhs->nama }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Nomor Induk Mahasiswa</label>
                        <input class="form-control" type="text" name="nim" value="{{ $mhs->nim }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input class="form-control" type="text" name="id_dosen" value="{{ $mhs->dosen->nama}}" readonly>
                    </div>

                    <div class="form-group">
                            <label for="">Nama Dosen</label>
                            <textarea class="form-control" style="resize:none;" name="hobi[]" id="" cols="5" rows="5" multipe readonly>
                                @foreach ($mhs->hobi as $hobi)
                                    {{ $hobi->hobi }}
                                @endforeach
                            </textarea>
                        </div>

                    <div class="form-group">
                            <a href="{{ route('mahasiswa.index') }}" class="btn btn-outline-info">Kembali</a>
                    </div>
    
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
