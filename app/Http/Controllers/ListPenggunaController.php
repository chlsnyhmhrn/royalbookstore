<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListPenggunaController extends Controller
{
    public function index(){
        return view('listPengguna');
    }
}
