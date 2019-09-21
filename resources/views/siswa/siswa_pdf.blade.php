@extends('temppdf')

@section('main')
<div id="siswa" style="padding-left: 60px">
	<h2>Siswa</h2>

	@if(!empty($siswa_list))
		<table class="table">
			<thead>
				<tr>
					<th>NISN</th>
					<th>Nama</th>
					<th>Tgl Lahir</th>
					<th>JK</th>
					<th>Kelas</th>
				</tr>
			</thead>
			<tbody>

				<?php  $i=0 ?>
           			 @foreach($siswa_list as $siswa)

				<tr>
					<td>{{ $siswa->nisn }}</td>
					<td>{{ $siswa->nama_siswa }}</a></td>
					<td>{{ $siswa->tanggal_lahir }}</td>
					<td>{{ $siswa->jenis_kelamin }}</td>
					<td>{{! empty($siswa->kelas->nama_kelas) ? $siswa->kelas->nama_kelas : '-' }}</td>
				</tr>

				@endforeach
			</tbody>
		</table>
		@else
			<p>Tidak Ada Data Siswa</p>
		@endif
		
		<br>
		<br>
		<br>
		<br>
	</div>

@stop

@section ('footer')
		
@stop