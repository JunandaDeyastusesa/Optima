@extends('template')
@section('main')
<div id="guru" class="masthead text-center mb-0"> 
<h2>Edit Guru</h2>
<center>

<form action="{{ url('guru/update/' . $guru->id) }}" method="post" class="lead" enctype="multipart/form-data">
@csrf

		<div class="form-group">
			<label for="nip" class="control-label ">NIP :</label>
				<input name="nip" type="text" class="form-control col-sm-4 col-form-label text-md-center"value="{{$guru->nip}}" readonly>
		</div>

		<div class="form-group">
			<label for="mapel" class="control-label ">Mata Pelajaran :</label>
				<input name="mapel" type="text" class="form-control col-sm-4 col-form-label text-md-center"value="{{$guru->mapel}}">
		</div>

		<div class="form-group">
			<label for="guru" class="control-label ">Nama :</label>
				<input name="guru" type="text" class="form-control col-md-4 col-form-label text-md-center" value="{{$guru->guru}}">
		</div>

		<div class="form-chech">
				<label for="gambar" class="control-label ">Gambar :</label>
				<input type="file" name="gambar" class="form-control col-md-4 col-form-label text-md-center">
			</div>

		<div class="form-group">
				<label for="tanggal_lahir" class="control-label ">Tanggal Lahir :</label>
			<input name="tanggal_lahir" type="date"class="form-control col-md-4 col-form-label text-md-center" value="{{$guru->tanggal_lahir}}">
		<div class="form-group">

		<label for="jenis_kelamin" class="control-label ">Jenis Kelamin :</label>
		<br>

		@if ($guru->jenis_kelamin=="P")
		<select class="form-control col-md-4 col-form-label text-md-center" type="text" name="jenis_kelamin" >
		    <option value="P">Perempuan</option>
		    <option value="L">Laki-Laki</option>
		</select>
		@elseif ($guru->jenis_kelamin=="L")

		<select class="form-control col-md-4 col-form-label text-md-center" type="text" name="jenis_kelamin">
		    <option value="L">Laki-Laki</option>
		    <option value="P">Perempuan</option>
		</select>
		</label>


@endif
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{ url('guru') }}" class="btn btn-warning">Cancel</a>
</form>

</center>
    <br><br><br><br>
</div>
@stop