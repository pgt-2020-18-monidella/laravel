<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function tampil(){
    
        // mengirim data users ke view
        return view('admin.users');
    }

    
}
