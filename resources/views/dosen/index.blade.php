@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Menu
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('dosen.index') }}">Dosen</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('hobi.index') }}">Hobi</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('mahasiswa.index') }}">Mahasiswa</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('wali.index') }}">Wali</a>
                        </div>
                    </div>
                    <center><h4>Data Dosen</h4></center>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- --}}

                    <div class="table-responsive">
                    <center><a href="{{ route('dosen.create') }}" class="btn btn-info">Tambah Data</a></center>
                    <br>
                    <table class="table">
                        <tr>
                            <th>No</th>
                            <th>Nama Dosen</th>
                            <th>Nomor Induk Dosen Pembimbing</th>
                            <th>Nama Mahasiswa</th>
                            <th colspan="3">Aksi</th>
                        </tr>
                        @php $no = 1 @endphp
                        @foreach ($dosen as $data)
                            <tr>
                            <td>{{$no++}}</td>
                            <td>{{$data->nama}}</td>
                            <td>{{$data->nipd}}</td>
                            <td>
                                @foreach ($data->mahasiswa as $mhs)
                                    <li>{{ $mhs->nama }}</li>
                                @endforeach
                            </td>
                            
                            <td>
                                <a href="{{ route('dosen.show', $data->id) }}" class = "btn btn-warning">Show</a>
                            </td>

                            <td>
                                <a href="{{ route('dosen.edit', $data->id) }}" class = "btn btn-success">Edit</a>
                            </td>

                            <td>
                                <form action="{{ route('dosen.destroy', $data->id) }}" method = "POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>

                {{-- --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
