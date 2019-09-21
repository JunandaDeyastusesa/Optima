<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kelas;

class kelascontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function kelas() 
    {
	    $halaman = 'kelas';
	    $kelas_list = Kelas::all();
	    return view('kelas.index', compact('halaman', 'kelas_list'));
    }

    public function show($id) {
        $halaman = 'kelas';
        $kelas = Kelas::findOrFail($id);
        return view('kelas.show', compact('halaman', 'kelas'));
    }

    public function edit($id)
    {
        $halaman = 'kelas';
        $kelas = Kelas::findOrFail($id);
        return view('kelas.edit', compact('halaman', 'kelas'));
    }
    public function create()
    {
        $halaman = 'kelas';
        return view('kelas.create', compact('halaman'));

    }
    public function store(Request $request) {
        Kelas::create($request->all());
        return redirect('kelas');
    }

    public function update($id, Request $request)
    {
        $halaman ='kelas';
        $kelas = Kelas::findOrFail($id);
        $kelas->nama_kelas = $request->nama_kelas;
        $kelas->save();
        return redirect('kelas');
    }

    public function delete($id)
    {
        $kelas = Kelas::findOrFail($id);
        $kelas->delete();
        return redirect('kelas');
    }
 
}

