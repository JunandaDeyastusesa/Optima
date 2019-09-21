@extends('template')

@section('main')
<section class="masthead text-center" id="wali">
    
        <h2>Daftar Wali Kelas</h2>
  
        @if (!empty($wali_list))
        
          <table class="table lead text-center ">
          <thead>
            <tr>
              <th>Nama Guru</th>
              <th>Nama Kelas</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>

            @foreach($wali_list as $wali)
              
              <tr>

                <td>{{ !empty($wali->guru->guru) ?
                          $wali->guru->guru : '-'}}</td>     

                <td>{{ !empty($wali->kelas->nama_kelas) ?
                          $wali->kelas->nama_kelas : '-'}}</td>
                <td>

                <a class="btn btn-warning " href="{{ url('wali/edit/' . $wali->id) }}">Edit</a>
                <a href="{{ url('wali/delete/' . $wali->id) }}" onclick="return confirm('Are you sure you want to delete this?')">
                <button type="button" class="btn btn-danger btn-sm">
                Delete
                </button>
                </a></td>

              </tr>
            
            @endforeach
          </tbody>
          <tr>
          </table>
        @else   
            <p>Tidak ada data Wali Kelas</p>
        @endif
        
        <br>
        <a href="{{ url('wali/create') }}" class="btn btn-primary btn-xl"> + Tambah Wali Kelas</a>
        <br><br><br><br>
</section>
  
@stop 

