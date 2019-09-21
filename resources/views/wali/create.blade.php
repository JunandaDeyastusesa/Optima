@extends('template')
@section('main')
<div id="wali" class="masthead text-center"> 
<h2>Tambah Siswa</h2>
<center>
<div class="divider-custom divider-light">
    <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
    <div class="divider-custom-line"></div>
</div>
<form action="{{ url('wali') }}" method="post" class="lead" enctype="multipart/form-data">
@csrf
<div class="form-group">

<label for="id_kelas" class="control-label">Nama Kelas :</label>


<select class="form-control col-md-4 col-form-label text-center" type="text"  name="id_kelas">
            @foreach ($kelas as $kelas)
            <option value="{{$kelas->id}}">>{{$kelas->nama_kelas}}</option>
            @endforeach
</select>


</div>

<div class="form-group">

<label for="nip" class="control-label">Nama Guru:</label>

<select class="form-control col-md-4 col-form-label text-center" type="text"  name="nip">
            @foreach ($guru as $guru)
            <option value="{{$guru->nip}}">>{{$guru->guru}}</option>
            @endforeach
</select>



</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
<a href="{{url('wali')}}" class="btn btn-warning">Cancel</a>
</form>

</center>
    <br><br><br><br>
</div>
@stop