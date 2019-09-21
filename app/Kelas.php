<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
    	
    	'nama_kelas'
    	];

    public function siswa()
	{
		return $this->hasMany('App\Siswa', 'id');
	}
	 public function wali()
	{
		return $this->hasMany('App\Wali', 'id');
	}
}
