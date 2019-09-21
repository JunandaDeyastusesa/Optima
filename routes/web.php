<?php
/*Route::get('/', 'kontak@index');
Route::get('/', function() {
	return view('index');
});*
Route::get('ok', function() {
	return view('temp.template');
});
Route::get('feature', function() {
	return view('temp.template');
});

Route::get('about', function() {
	return view('pages.about');
});
Route::get('homepage', function() {
	return view('pages.homepage');
});

Route::get('siswa', function () {
	$siswa = ['Andi','Budi','Cindy','Dendi'];
    return view('siswa.index', ['siswa' => $siswa]);
});*/

Auth::routes();

Route::get('home', function() {
	return view('temp.template');
});

//pagescontroller
Route::get('homepage', 'pagescontroller@homepage');
Route::get('about', 'pagescontroller@about');
/*Route::get('siswa', 'pagescontroller@siswa');*/
Route::get('form', 'pagescontroller@form');

//siswacontroller
Route::get('siswa', 'siswacontroller@siswa');
Route::get('siswa/cetak_pdf', 'siswacontroller@cetak_pdf');
Route::get('buat', 'siswacontroller@create');
Route::get('show/{siswa}', 'siswacontroller@show');
Route::get('siswa/{siswa}/delete', 'siswacontroller@delete');

//kelascontroller
Route::get('kelas', 'kelascontroller@kelas');
Route::get('tambah', 'kelascontroller@create');
Route::get('kelas/detail/{kelas}', 'kelascontroller@show');
Route::get('kelas/edit/{kelas}', 'kelascontroller@edit');
Route::get('kelas/delete/{kelas}', 'kelascontroller@delete');

//guru
Route::get('guru', 'gurucontroller@guru');
Route::get('guru/create', 'gurucontroller@create');
Route::get('guru/detail/{guru}', 'gurucontroller@show');
Route::get('guru/edit/{guru}', 'gurucontroller@edit');
Route::get('guru/delete/{guru}', 'gurucontroller@delete');
//guru get
Route::post('guru/update/{guru}', 'gurucontroller@update');
Route::post('guru', 'gurucontroller@store');

//walikelas
Route::get('wali', 'walikelascontroller@wali');
Route::get('wali/create', 'walikelascontroller@create');
Route::get('wali/edit/{wali}', 'walikelascontroller@edit');
Route::get('wali/delete/{wali}', 'walikelascontroller@delete');
//walipost
Route::post('wali', 'walikelascontroller@store');
Route::post('wali/update/{wali}', 'walikelascontroller@update');




//----------------------------------------------------------GAIB---------------------------------------------------------
Route::get('{siswa}', 'siswacontroller@edit');
//----------------------------------------------------------GAIB---------------------------------------------------------


//siswacontroller get
Route::post('siswa/{siswa}/update', 'siswacontroller@update');
Route::post('siswa', 'siswacontroller@store');

//kelascontroller post
Route::post('kelas', 'kelascontroller@store');




/*
Route::get('/home_user', 'siswacontroller@index');
Route::get('/login', 'siswacontroller@login');
Route::post('/loginPost', 'User@loginPost');
Route::get('/register', 'siswacontroller@register');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');
Route::get('template','pagescontroller@template');*/


//login logout
Route::get('/', 'HomeController@index')->name('homepage');
Route::get('homepage', 'HomeController@index')->name('homepage');



