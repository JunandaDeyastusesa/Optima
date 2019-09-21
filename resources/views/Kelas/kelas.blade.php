@extends('template')

@section('main')
<div id="kelas" style="padding-left: 60px">
	<h2>Kelas</h2>

	@if(!empty($kelas_list))
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nama Kelas</th>
				</tr>
			</thead>
			<tbody>
				@foreach($kelas_list as $kelas)
				<tr>
					<td>{{ $kelas->id_kelas }}</td>
					<td>{{ $kelas->nama_kelas }}</td>

				</tr>
				@endforeach
			</tbody>
		</table>
		@else
			<p>Tidak Ada Data Siswa</p>
		@endif
		<a href="{{ url('buat') }}">Tambah Siswa</a>
		
		<br>
		<br>
		<br>
		<br>
	</div>

@stop

@section ('footer')
		
@stop