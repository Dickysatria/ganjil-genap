<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KlasifikasiModel;

class KlasifikasiController extends Controller
{
    public function index()
    {
        return view ('welcome');
    }

    public function store(Request $request)
    {
        $arr = $request->all();
        KlasifikasiModel::setAngka($arr['a'], $arr['b']);
        KlasifikasiModel::cekAngka();
        return view('hasil', ["data" => KlasifikasiModel::getHasil()]);
    }
}
