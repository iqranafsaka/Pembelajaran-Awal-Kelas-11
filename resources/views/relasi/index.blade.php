@extends('layouts.app');
@section('content')
<div class="col-sm-8 col-sm-offset-2">
    @foreach ($mahasiswa as $data)
    <h3><small>[{{$data->nama}}]</small></h3>
        <h5>
            Hobi : 
            @foreach ($data->hobi as $key)
                <small>, {{$key->hobi}} </small>
            @endforeach
        </h5>

        <h4>
            <li>Nama Wali : <strong>{{ $data->wali->nama }}</strong></li>
            <li>Dosen Pembimbing : <strong>{{ $data->dosen->nama }}</strong></li>
        </h4>
        <hr>
    @endforeach
</div>
@endsection

