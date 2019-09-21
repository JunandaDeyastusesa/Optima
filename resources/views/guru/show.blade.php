@extends('template')

@section('main')
  <div id="guru">

      <tr>
      <center>
      <div class="profile-main">
        <img src="{{asset('images/'.$guru->gambar)}}" class="img-circle" alt="gambar" style="width: 20%; height: 20%; border-radius: 30%;">
        <h3 class="name">{{$guru->guru}}</h3>
        <span class="online-status status-available">Available</span>
      </div>
      </center>
      </tr>

    <h2>Detail Guru</h2>

    <table class="lead table table-striped">
    <tbody>
      <tr>
        <th>NIP</th>
        <td>{{ $guru->nip }}</td>
      </tr>
      <tr>
        <th>Nama</th>
        <td>{{ $guru->guru }}</td>
      </tr>
      <tr>
        <th>Tanggal Lahir</th>
        <td>{{ $guru->tanggal_lahir }}</td>
      </tr>
      <tr>
        <th>Jenis Kelamin</th>
        <td>{{ $guru->jenis_kelamin }}</td>
      </tr>
      </tbody>
      <tr>
    </table>
    <center>
    <a  href="{{ url('guru') }}"class=" btn btn-warning"><- Go Back</a>
    </center>
        <br><br><br><br>
  </div>
@stop