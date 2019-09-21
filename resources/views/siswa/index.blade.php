@extends('template')

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
					<th>Action</th>
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
					
					<td><a class="btn btn-success btn-sm" href="{{ url('show/'. $siswa->id) }}">Detail</a></td>
					<td><a class="btn btn-warning btn-sm" href="{{ url($siswa->id) }}">Edit</a></td>
					<td><a class="btn btn-danger btn-sm" href="{{ url('siswa/'. $siswa->id. '/delete') }}">Delete</a></td>
					<?php $i++ ?>
				</tr>

				@endforeach
			</tbody>
		</table>
		<h4 class="text-center"><?php echo "Jumlah Total Siswa: $i"; ?></h4>
		@else
			<p>Tidak Ada Data Siswa</p>
		@endif
		<a href="{{ url('buat') }}" class="btn btn-primary">Tambah Siswa</a>
		<a href="{{ url('siswa/cetak_pdf') }}" class="btn btn-info">CETAK PDF</a>
		
		<br>
		<br>
		<br>
		<br>
	</div>

@stop

@section ('footer')
		
@stop