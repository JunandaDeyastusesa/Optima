<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wali extends Model
{

    
    protected $table = 'walikelas';
  
    protected $fillable = [
      'nip',
      'id_kelas'
      
    ];
    
    public function guru(){
        return $this->belongsTo('App\Guru', 'nip');
    }

    public function kelas(){
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
}
