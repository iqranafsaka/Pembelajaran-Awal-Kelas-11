@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('dosen.show', $dosen->id) }}" method="POST">
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="">Nama Dosen</label>
                        <input class="form-control" type="text" name="nama" value="{{ $dosen->nama }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="">Nomor Induk Dosen Pembimbing</label>
                        <input class="form-control" type="text" name="nipd" value="{{ $dosen->nipd }}" readonly>
                    </div>
                    <div class="form-group">
                            <a href="{{ route('dosen.index') }}" class="btn btn-outline-info">Kembali</a>
                    </div>
    
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
