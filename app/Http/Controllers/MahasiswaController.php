<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function tampil(){
        // mengambil data dari table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->get();
        // mengirim data mahasiswa ke view
        return view('admin.mahasiswa',['mahasiswa' => $mahasiswa]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('admin.tambahmahasiswa');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('mahasiswa')->insert([
        'nim' => $request->nim,
        'namamahasiswa' => $request->namamahasiswa,
        'jurusan' => $request->jurusan,
        'email' => $request->email
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
        $mahasiswa = DB::table('mahasiswa')->where('nim',$id)->get();
        // passing data mahasiswa yang didapat ke view edit.blade.php
        return view('admin.editmhs',['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request)
    {
        // insert data ke table pegawai
        DB::table('mahasiswa')->where('nim',$request->id)->update([
        'namamahasiswa' => $request->namamahasiswa,
        'jurusan' => $request->jurusan,
        'email' => $request->email
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('mahasiswa')->where('nim',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/mahasiswa');
    }
}
