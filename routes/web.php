<?php

Auth::routes();

Route::get('home', function() {
	return view('temp.template');
});

//guru
Route::get('/', 'gurucontroller@guru');






//----------------------------------------------------------GAIB---------------------------------------------------------
Route::get('{siswa}', 'siswacontroller@edit');
//----------------------------------------------------------GAIB---------------------------------------------------------



