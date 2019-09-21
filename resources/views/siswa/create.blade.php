@extends('template')

@section('main')
<div id="siswa" style="padding-left: 60px">
		<h2>Tambah Siswa</h2>

		
		<form action="{{ url('siswa') }}" method="post" enctype="multipart/form-data">
			{{csrf_field()}}
			<div class="form-group">
				<label for="nisn" class="control-label">NISN</label>
				<input name="nisn" type="text" class="form-control">
			</div>

			<div class="form-group">
				<label for="nama_siswa" class="control-label">Nama Siswa</label>
				<input name="nama_siswa" type="text" class="form-control">
			</div>

			<div class="form-check">
				<label for="exampleFormControlTextArea">Gambar</label>
				<input type="file" name="gambar" class="form-control">
			</div>

			<div class="form-group">
				<label for="tanggal_lahir" class="control-label">Tanggal Lahir</label>
				<input name="tanggal_lahir" type="date" class="form-control">
			</div>

			<div class="form-group">
				<label for="id_kelas" class="control-label text-secondary">Nama Kelas :</label>
		        <select class="form-control" name="id_kelas">
		            @foreach ($kelas as $kelas)
		            <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
		            @endforeach
		        </select>
			</div>

			<div class="form-group">
				<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
				
					<div class="form-check">
						<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked>
						<label class="form-check-label" for="jenis_kelamin">Perempuan</label>
					</div>

					<div class="form-check">
						<input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked>
						<label class="form-check-label" for="jenis_kelamin">Laki Laki</label>
					</div>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
			<a href="{{ url('siswa') }}" class="btn btn-warning">Kembali</a>
			    <br><br><br><br>
	</div>
	@stop

@section ('footer')
		
@stop