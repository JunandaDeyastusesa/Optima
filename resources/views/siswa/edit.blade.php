@extends('template')

@section('main')
<div id="siswa" style="padding-left: 30px; padding-right: 90px">
	<h2>Edit Siswa</h2>

	<form action="{{url('siswa/'. $siswa->id .'/update')}}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="nisn" class="control-label">NISN</label>
			<input name="nisn" type="text" class="form-control" value="{{$siswa->nisn}}" readonly>
		</div>

		<div class="form-group">
			<label for="nama_siswa" class="control-label">Nama</label>
			<input name="nama_siswa" type="text" class="form-control" value="{{$siswa->nama_siswa}}">
		</div>

		<div class="form-group">
			<label for="tanggal_lahir" class="control-label">NISN</label>
			<input name="tanggal_lahir" type="date" class="form-control" value="{{$siswa->tanggal_lahir}}">
		</div>

		<div class="form-group">
			<label for="id_kelas" class="control-label">Kelas</label>
				@if(!empty($kelas))
				<select class="form-control" required type="text" name="id_kelas">
					@foreach ($kelas as $kelas)

						<option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>

					@endforeach
				</select>

				@else
					<p>Tidak Ada Kelas</p>
				@endif
		</div>

		<div class="form-chech">
				<label for="gambar">Gambar</label>
				<input type="file" name="gambar" class="form-control">
			</div>

		<div class="form-group">
			<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>

			@if($siswa->jenis_kelamin=="P")
			<select class="form-control" required type="text" name="jenis_kelamin">
				<option value="P">Perempuan</option>
				<option value="L">Laki Laki</option>
			</select>

			@elseif ($siswa->jenis_kelamin=="L")
			<select class="form-control" required type="text" name="jenis_kelamin">
				<option value="L">Laki Laki</option>
				<option value="P">Perempuan</option>
			</select>



			@endif

		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	    <br><br><br><br>
</div>
@stop