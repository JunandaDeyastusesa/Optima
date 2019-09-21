<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wali;
use App\Guru;
use App\Kelas;

class walikelascontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function wali() 
    {
    $halaman = 'wali';
    $wali_list = Wali::all();
    return view('wali.index', compact('halaman', 'wali_list'));
    }

    public function create()
    {
    $halaman = 'wali';
    $guru = Guru::all();
    $kelas = Kelas::all();
    return view('wali.create', compact('halaman','guru','kelas'));

    }
    public function store(Request $request)
    {
        Wali::create($request->all());
        return redirect('wali');
    }

    public function edit($id, Request $request) {
        $halaman = 'wali';
        $wali = Wali::findOrFail($id);
        $kelas = Kelas::all();        
        $guru = Guru::all();

        return view('wali.edit', compact('halaman', 'wali', 'kelas', 'guru'));
    }

    public function delete($id)
    {
        $wali = Wali::findOrFail($id);
        $wali->delete();
        return redirect('wali');
    }

    public function update($id, Request $request) {
        $halaman = 'wali';
        $wali = Wali::findOrFail($id);
        $wali->id = $request->id;
        $wali->nip = $request->nip;
        $wali->save();
        return redirect('wali');
    }

}
