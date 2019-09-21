<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;
use \App\Kelas;
use PDF;

class siswacontroller extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function siswa() {
    	$halaman = 'siswa';
    	$siswa_list = Siswa::all();
    	return view('siswa.index', compact('halaman', 'siswa_list'));
    }


    public function index() {
        $siswa = Siswa::all();
        return view('siswa',['siswa'=>$siswa]);
    }

    public function cetak_pdf() {
        $siswa_list = Siswa::all();
        $halaman = 'Laporan Siswa';
        $pdf = PDF::loadview('siswa.siswa_pdf',compact('halaman', 'siswa_list'));
        return $pdf->download('laporan-siswa-pdf');
    }


    public function create() {
    	$halaman = 'siswa';
        $kelas = Kelas::all();
    	return view('siswa.create', compact('halaman','kelas'));
    }

    public function store(Request $request) {

        if ($request->hasFile('gambar')) {
            $siswa = Siswa::create($request->all());
                if($request->hasFile('gambar')) {
                    $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
                    $siswa->gambar = $request->file('gambar')->getClientOriginalName();
                    $siswa->save();

                    }else{
                        Siswa::create($request->all());
                        $siswa->save();
            }
        $siswa->save();
    	return redirect('siswa');
    }
}

    public function show($id) {
    	$halaman = 'siswa';
    	$siswa = Siswa::findOrFail($id);
    	return view('siswa.show', compact('halaman', 'siswa'));
    }

    public function edit($id) {
    	$halaman = 'siswa';
    	$siswa = Siswa::findOrFail($id);
        $kelas = Kelas::all();
    	return view('siswa.edit', compact('halaman','kelas', 'siswa'));
    }

    public function update($id, Request $request){

        //dd($request->all());
        $halaman = 'siswa';
        $siswa = Siswa::findOrFail($id);
        $siswa->nisn = $request->nisn;
        $siswa->id_kelas = $request->id_kelas;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->tanggal_lahir = $request->tanggal_lahir;
        $siswa->jenis_kelamin = $request->jenis_kelamin;

        if ($request->hasFile('gambar')) {
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $siswa->gambar = $request->file('gambar')->getClientOriginalName();
        
        }
        $siswa->save();
        return redirect('siswa');
    }

    public function delete($id) {
        $siswa = Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('siswa');
    }
}