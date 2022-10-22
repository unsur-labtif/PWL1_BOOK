<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $data = ["Layung", "Endah", "Permata"];
        return view('dosen', ['nama' => $data]);
    }
}