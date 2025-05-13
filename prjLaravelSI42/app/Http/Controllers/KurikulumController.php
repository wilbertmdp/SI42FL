<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumController extends Controller
{
    //
    public function index(){
        $kampus="universitas multi data palembang";
        return view('prodi.index')-> with('kampus', $kampus);
    }
}
