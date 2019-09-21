@extends('template')
@section('main')

		<div id="siswa" style="padding-left: 20px">
			<tr>
			<center>
			<div class="profile-main">
				<img src="{{asset('images/'.$siswa->gambar)}}" class="img-circle" alt="gambar" style="width: 20%; height: 20%; border-radius: 30%;">
				<h3 class="name">{{$siswa->nama_siswa}}</h3>
				<span class="online-status status-available">Available</span>
			</div>
			</center>
			</tr>
		<h2>Detail Siswa</h2>

		<table class="table table-striped" style="padding-right: 20px">
			<tr>
				<th>NISN</th>
				<td>{{ $siswa->nisn }}</td>
			</tr>
			<tr>
				<th>Nama</th>
				<td>{{ $siswa->nama_siswa }}</td>
			</tr>
			<tr>
				<th>Tanggal Lahir</th>
				<td>{{ $siswa->tanggal_lahir }}</td>
			</tr>
			<tr>
				<th>Kelas</th>
				<td>{{! empty($siswa->kelas->nama_kelas) ? $siswa->kelas->nama_kelas : '-' }}</td>
			</tr>
			<tr>
				<th>Jenis Kelamin</th>
				<td>{{ $siswa->jenis_kelamin }}</td>
			</tr>
		</table>
	
	<a href="http://localhost/tutorial/public/siswa" class="btn btn-warning">Kembali</a>
    <br><br><br><br>
	</div>
	@stop