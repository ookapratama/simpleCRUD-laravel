<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    public function index() {
        
        $data = Karyawan::latest()->paginate(5);
        $title = "Data";
        $i=1;
        return view('pegawai', compact('data','title'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    // Create
    public function create() {
        $title = "Tambah";
        return view('tambah', compact('title'));
    }

    public function store(Request $request) {

        $request->validate([
            'nama' => 'required',
            'jkl' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        Karyawan::create($request->all());
        return redirect()->route('karyawan.index')
                        ->with('succes', 'Pegawai has Succesfull to add');
    }

    // Update
    public function edit(Karyawan $karyawan) {
        $title = "Ubah Data";
        return view('edit', compact('karyawan','title'));
    }

    public function update(Request $req, Karyawan $karyawan) {

        $req->validate([
            'nama' => 'required',
            'jkl' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required'
        ]);

        $karyawan->update([
            'nama' => $req->nama,
            'jkl' => $req->jkl,
            'alamat' => $req->alamat,
            'no_telp' => $req->no_telp,

        ]);
        return redirect()->route('karyawan.index')
                        ->with('succes', 'Pegawai has Succesfull to update');
    }

}
