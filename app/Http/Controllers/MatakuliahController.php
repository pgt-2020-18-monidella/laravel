<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MatakuliahController extends Controller
{
    public function tampil(){
        // mengambil data dari table matakuliah
        $matakuliah = DB::table('matakuliah')->get();
        // mengirim data matakuliah ke view
        return view('admin.matakuliah',['matakuliah' => $matakuliah]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('admin.tambahmatakuliah');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('matakuliah')->insert([
        'kd_mk' => $request->kd_mk,
        'mk' => $request->mk,
        'semester' => $request->semester,
        'sks' => $request->sks
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/matakuliah');
    }

    public function edit($id)
    {
        // mengambil data matakuliah berdasarkan id yang dipilih
        $matakuliah = DB::table('matakuliah')->where('kd_mk',$id)->get();
        // passing data matakuliah yang didapat ke view edit.blade.php
        return view('admin.editmatkul',['matakuliah' => $matakuliah]);
    }

    public function update(Request $request)
    {
        // insert data ke table pegawai
        DB::table('matakuliah')->where('kd_mk',$request->id)->update([
        'mk' => $request->mk,
        'semester' => $request->semester,
        'sks' => $request->sks
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/matakuliah');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('matakuliah')->where('kd_mk',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/matakuliah');
    }
}
