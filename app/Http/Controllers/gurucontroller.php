<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Guru;

class gurucontroller extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function guru() 
    {
    $halaman = 'guru';
    $guru_list = Guru::all();
    return view('guru.index', compact('halaman', 'guru_list'));
    }

    public function create()
    {
    $halaman = 'guru';
    return view('guru.create', compact('halaman'));
    }
    
    public function store(Request $request)
    {
        Guru::create($request->all());
        if ($request->hasFile('gambar')) {
            $guru = Guru::create($request->all());
                if($request->hasFile('gambar')) {
                    $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
                    $guru->gambar = $request->file('gambar')->getClientOriginalName();
                    $guru->save();

                    }else{
                        Guru::create($request->all());
                        $guru->save();
            }
        $guru->save();
    	return redirect('guru');
    }
}

    public function show($id)
    {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('guru.show', compact('halaman', 'guru'));
    }

    public function edit($id)
    {
        $halaman = 'guru';
        $guru = Guru::findOrFail($id);
        return view('guru.edit', compact('halaman', 'guru'));
    }

    public function update($id, Request $request)
    {
        $halaman ='guru';
        $guru = Guru::findOrFail($id);
        $guru->mapel = $request->mapel;        
        $guru->nip = $request->nip;
        $guru->guru = $request->guru;
        $guru->tanggal_lahir = $request->tanggal_lahir;
        $guru->jenis_kelamin = $request->jenis_kelamin;
        

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $guru->gambar = $request->file('gambar')->getClientOriginalName();
        
        }
        $guru->save();
        return redirect('guru');
    }

    public function delete($id)
    {
        $guru = Guru::findOrFail($id);
        $guru->delete();
        return redirect('guru');
    }
}
