<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    protected $table = 'guru';
    protected $fillable = [
    	'id_guru',
    	'mapel',
    	'nip',
    	'guru',
    	'gambar',
    	'tanggal_lahir',
    	'jenis_kelamin',
    	'created_at',
    	'update_at'
    ];

    public function wali () {
    	return $this->hasOne('App/Wali', 'nip');
    }
}
