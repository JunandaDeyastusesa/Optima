@extends('template')

@section('main')
<section class="masthead text-center" id="kelas">
    
        <h2>Daftar Kelas</h2>
          
        @if (!empty($kelas_list))
        
          <table class="table lead ">
          <thead>
            <tr>
              <th>ID Kelas</th>
              <th>Nama Kelas</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

          <?php  $i=0 ?>
            @foreach($kelas_list as $kelas)
              
              <tr>
                <td>{{ $kelas->id }}</td>
                <td>{{ $kelas->nama_kelas }}</td>
                <td>
                <a class="btn btn-success btn-sm" href="{{ url('kelas/detail/' . $kelas->id) }}">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ url('kelas/edit/' . $kelas->id) }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ url('kelas/delete/' . $kelas->id) }}" onclick="confirm('Are you sure you want to delete this?')">Delete</a></td>
                <?php $i++ ?>
              </tr>
            
            @endforeach
          </tbody>
          <tr>
          </table>
          <h4 class="text-center"><?php echo "Jumlah Total Kelas: $i"; ?></h4>
        @else   
            <p>Tidak ada data kelas</p>
        @endif
        
        <br>
        <a href="{{ url('tambah') }}" class="btn btn-warning btn-xl"> + Tambah Kelas</a>
    <br><br><br><br>
</section>
  
@stop 


