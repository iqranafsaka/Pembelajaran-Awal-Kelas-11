@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('wali.show', $wali->id) }}" method="POST">
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="">Nama Wali</label>
                        <input class="form-control" type="text" name="nama" value="{{ $wali->nama }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="">ID Mahasiswa</label>
                        <input class="form-control" type="text" name="nama" value="{{ $wali->mahasiswa->nama }}" readonly>
                    </div>

                    <div class="form-group">
                        <a href="{{ route('wali.index') }}" class="btn btn-outline-info">Kembali</a>
                    </div>
    
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
