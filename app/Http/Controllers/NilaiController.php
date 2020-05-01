<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller
{
    public function tampil(){
        // mengambil data dari table nilai
        $nilai = DB::table('nilai')->get();
        // mengirim data nilai ke view
        return view('admin.nilai',['nilai' => $nilai]);
    }

    public function tambah()
    {
        // memanggil view tambah
        return view('admin.tambahnilai');
    }

    public function store(Request $request)
    {
        // insert data ke table pegawai
        DB::table('nilai')->insert([
        'nim' => $request->nim,
        'namamahasiswa' => $request->namamahasiswa,
        'mk' => $request->mk,
        'tugas' => $request->tugas,
        'kuis' => $request->kuis,
        'uts' => $request->uts,
        'uas' => $request->uas
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/nilai');
    }

    public function edit($id)
    {
        // mengambil data nilai berdasarkan id yang dipilih
        $nilai = DB::table('nilai')->where('id',$id)->get();
        // passing data nilai yang didapat ke view edit.blade.php
        return view('admin.editnilai',['nilai' => $nilai]);
    }

    public function update(Request $request)
    {
        // insert data ke table pegawai
        DB::table('nilai')->where('id',$request->id)->update([
            'nim' => $request->nim,
            'namamahasiswa' => $request->namamahasiswa,
            'mk' => $request->mk,
            'tugas' => $request->tugas,
            'kuis' => $request->kuis,
            'uts' => $request->uts,
            'uas' => $request->uas
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/nilai');
    }

    public function hapus($id)
    {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('nilai')->where('id',$id)->delete();
        // alihkan halaman ke halaman pegawai
        return redirect('/nilai');
    }

    public function search(Request $request){
        $search = $request->get('search');
        $posts = DB::table('nilai')->where('namamahasiswa', 'LIKE', '%'.$search.'%')->get();
        return view('admin.nilai', ['posts'=>$posts]);
    }
}
