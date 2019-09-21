@extends('template')

@section('main')
<div id="kelas" style="padding-left: 30px; padding-right: 90px">
	<h2>Edit Kelas</h2>

	<form action="{{url('kelas')}}" method="post">
		@csrf
		<div class="form-group">
			<label for="nama_kelas" class="control-label">Nama Kelas</label>
			<input name="nama_kelas" type="text" class="form-control" value="{{$kelas->nama_kelas}}">
		</div>

		</div>
		<button type="submit" class="btn btn-primary padding-right: 90px;">Submit</button>
	</form>
</div>
@stop