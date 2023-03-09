<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\barang;

class tokoController extends Controller
{
    //
    public function index()
    {
        $barang=barang::all();
        return view('index', ['barang' =>$barang]);
    }
}
