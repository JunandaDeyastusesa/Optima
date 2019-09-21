@extends('template')

@section('main')
  <div id="kelas">
    <h2>Detail Kelas</h2>

    <table class="lead table table-striped">
    <tbody>
      <tr>
        <th>ID Kelas</th>
        <td>{{ $kelas->id }}</td>
      </tr>
      <tr>
        <th>Nama Kelas</th>
        <td>{{ $kelas->nama_kelas }}</td>
      </tr>

      <tr> 
        <th>Anggota Siswa</th>)
        <td>
        @foreach( $kelas->siswa as $list)

        <p> {{ !empty($list->nama_siswa) ?
                $list->nama_siswa : '_' }}</p>
                @endforeach
        </td>
        </tr>

        </tbody>
    </table>
    
    <center>
    <a href="{{url('tambah')}}" class=" btn btn-outline-light btn-xl"><- Go Back</a>
    </center>
        <br><br><br><br>
  </div>
@stop