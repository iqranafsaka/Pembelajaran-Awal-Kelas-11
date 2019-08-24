@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <form action="{{ route('hobi.update', $hobi->id) }}" method="POST">
                        <input type="hidden" value="PATCH" name="_method">
                    {{ csrf_field() }}
    
                    <div class="form-group">
                        <label for="">Hobi Anda</label>
                        <input class="form-control" type="text" name="hobi" value="{{ $hobi->hobi }}">
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