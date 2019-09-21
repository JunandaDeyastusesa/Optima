@extends('template')
@section('main')
	<div id="guru" class="masthead text-center "> 
	<h2>Tambah Guru</h2>
	<center>

	<form action="{{ url('guru') }}" method="post" class="lead">
	@csrf

		<div class="form-group">
			<label for="mapel" class="control-label text-secondary">Mata Pelajaran    : </label>  
				<input name="mapel" type="text" class="form-control col-md-4 col-form-label text-md-center">
		</div>

		<div class="form-group">
			<label for="nip" class="control-label text-secondary">NIP    : </label>  
				<input name="nip" type="text" class="form-control col-md-4 col-form-label text-md-center">
		</div>

		<div class="form-group">
			<label for="guru" class="control-label text-secondary">Nama Guru : </label>  
				<input name="guru" type="text" class="form-control col-md-4 col-form-label text-md-center">
		</div>

		<div class="form-group">
			<label for="tanggal_lahir" class="control-label text-secondary">Tanggal Lahir  : </label>
				<input name="tanggal_lahir" type="date"class="form-control col-md-4 col-form-label text-md-center">
		</div>

		<div class="form-group">
			<label for="jenis_kelamin" class="control-label text-secondary">Jenis Kelamin :</label>
				<select class="form-control col-md-4 col-form-label text-md-center" type="text" name="jenis_kelamin">
				    <option value=""> </option>
				    <option value="L">Laki-Laki</option>
				    <option value="P">Perempuan</option>
				</select>
		</div>

		<br>
		<button type="submit" class="btn btn-primary">Submit</button>
		<a href="{{url('guru')}}"class="btn btn-warning">Cancel</a>
		</form>
	</center>
	    <br><br><br><br>
</div>
	@stop