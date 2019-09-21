@extends('template')

@section('main')
<div id="guru" style="padding-left: 60px">
    <h2>GURU</h2>

    @if(!empty($guru_list))
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>NIP</th>
                    <th>Nama</th>
                    <th>Tgl Lahir</th>
                    <th>JK</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guru_list as $guru)
                <tr>
                    <td>{{ $guru->nip }}</td>
                    <td>{{ $guru->nama_siswa }}</td>
                    <td>{{ $guru->tanggal_lahir }}</td>
                    <td>{{ $guru->jenis_kelamin }}</td>
                    <td><a class="btn btn-success btn-sm" href="{{ url('guru/'. $guru->id) }}">Detail</a></td>
                    <td><a class="btn btn-warning btn-sm" href="{{ url('guru/'. $guru->id) }}">Edit</a></td>
                    <td><a class="btn btn-danger btn-sm" href="{{ url('guru/'. $guru->id. '/delete') }}">Delete</a></td>
                </tr>

                @endforeach
            </tbody>
        </table>
        @else
            <p>Tidak Ada Data Siswa</p>
        @endif
        <a href="{{ url('guru') }}" class="btn btn-primary">Tambah Siswa</a>
        
        <br>
        <br>
        <br>
        <br>
    </div>

@stop

@section ('footer')
        
@stop