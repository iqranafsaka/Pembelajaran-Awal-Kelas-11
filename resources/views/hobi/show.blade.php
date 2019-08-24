@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('hobi.show', $hobi->id) }}" method="POST">
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="">Hobi Anda</label>
                        <input class="form-control" type="text" name="hobi" value="{{ $hobi->hobi }}" readonly>
                    </div>
                    <div class="form-group">
                            <a href="{{ route('hobi.index') }}" class="btn btn-outline-info">Kembali</a>
                    </div>
    
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
