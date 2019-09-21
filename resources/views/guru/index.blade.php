@extends('template')

@section('main')
<section class="masthead text-center" id="guru">
    
        <h2>Daftar Guru</h2>
        <div class="divider-custom divider-light">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon">
          <i class="fas fa-star"></i>
        </div>
        <div class="divider-custom-line"></div>
      </div>    
        @if (!empty($guru_list))
        
          <table class="table lead text-center">
          <thead>
            <tr>
              <th>NIP</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>Tgl Lahir</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

          <?php  $i=0 ?>
            @foreach($guru_list as $guru)
              
              <tr>
              
                <td>{{ $guru->nip }}</td>
                <td>{{ $guru->guru }}</td>
                <td>{{ $guru->jenis_kelamin }}</td>
                <td>{{ $guru->tanggal_lahir }}</td>
                <td><a class="btn btn-success btn-sm" href="{{ url('/guru/detail/' . $guru->id) }}">Detail</a>
                <a class="btn btn-warning btn-sm" href="{{ url('guru/edit/' . $guru->id) }}">Edit</a>
                <a class="btn btn-danger btn-sm" href="{{ url('guru/delete/' . $guru->id) }}" onclick="confirm('Are you sure you want to delete this?')">Delete</a></td>
                <?php $i++ ?>
              </tr>
            
            @endforeach
          </tbody>
          <tr>
          </table>
          <h4 class="text-center"><?php echo "Jumlah Total guru: $i"; ?></h4>
        @else   
            <p>Tidak ada data guru</p>
        @endif
        
        <br>
        <a href="{{ url('guru/create') }}" class="btn btn-primary btn-xl"> + Tambah Guru</a>
    <br><br><br><br>
</section>
  
@stop 

