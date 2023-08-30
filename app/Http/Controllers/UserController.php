<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class UserController extends Controller
{
    public function index(){
        $nama_obat = Admin::all();
        return view('user.index', ['nama_obat' => $nama_obat]);
    }

    public function about(){
        return view('user.about');
    }

    public function login(){
        return view('login');
    }
}
