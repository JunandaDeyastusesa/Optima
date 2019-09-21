@extends('template')

@section('main')
<div id="wali" style="padding-left: 30px; padding-right: 90px">
	<h2>Edit Wali Kelas</h2>
	<form action="{{ url('wali/update/' . $wali->id) }}" method="post" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label for="id" class="control-label">ID Wali Kelas :</label>
			<input name="id" type="text" class="form-control" value="{{$wali->id}}" readonly="">
		</div>
		<div class="form-group">
			<label for="id_kelas" class="control-label text-secondary"> Nama Kelas :</label>
			<select required class="form-control" type="text" name="id_kelas">
				@foreach ($kelas as $kelas)
				<option value="{{$kelas->id}}">>{{$kelas->nama_kelas}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<label for="nip" class="control-label text-secondary"> Nama Guru :</label>
			<select required class="form-control" type="text" name="nip">
				@foreach ($guru as $guru)
				<option value="{{$guru->nip}}">>{{$guru->guru}}</option>
				@endforeach
			</select>
		</div>



	</div>
		<button type="submit" class="btn btn-primary padding-right: 90px;">Submit</button>
	</form>
	    <br><br><br><br>
</div>
@stop