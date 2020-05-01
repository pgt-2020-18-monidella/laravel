<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function tampil(){
        // mengambil data dari table dosen
        $dosen = DB::table('dosen')->get();
        // mengirim data dosen ke view
        return view('admin.dosen',['dosen' => $dosen]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('admin.tambahdosen');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('dosen')->insert([
        'kd_dosen' => $request->kd_dosen,
        'namadosen' => $request->namadosen,
        'mk' => $request->mk,
        'alamat' => $request->alamat,
        'email' => $request->email
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/dosen');
    }

    public function edit($id)
    {
        // mengambil data dosen berdasarkan id yang dipilih
        $dosen = DB::table('dosen')->where('kd_dosen',$id)->get();
        // passing data dosen yang didapat ke view edit.blade.php
        return view('admin.edit',['dosen' => $dosen]);
    }

    public function update(Request $request)
    {
        // update data pegawai
        DB::table('dosen')->where('kd_dosen',$request->id)->update([
        'namadosen' => $request->namadosen,
        'mk' => $request->mk,
        'alamat' => $request->alamat,
        'email' => $request->email
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/dosen');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('dosen')->where('kd_dosen',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/dosen');
    }
}
