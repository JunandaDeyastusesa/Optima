@extends('template')

@section('main')
<div id="kelas" class="masthead text-center  mb-0"> 
	<h2>Tambah Kelas</h2>
<center>
	<div>
		<div class="divider-custom-line"></div>
	</div>
		<form action="{{ url('kelas') }}" method="post" class="lead">
		@csrf


			<div class="form-group">

		<label for="nama_kelas" class="control-label">Nama Kelas :</label> 
		<input name="nama_kelas" type="text" class="form-control col-md-4 col-form-label text-md-center">

	</div>
	<br>
			<button type="submit" class="btn btn-primary ">Submit</button>
			<a href="{{ url('kelas') }}" class="btn btn-warning">Cancel</a>
		</form>
	</center>
</div>
@stop