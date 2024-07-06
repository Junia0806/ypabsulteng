<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonasiController extends Controller
{
    public function index()
    {
        $data = DB::table('infos')->first();


        return view
        ('donasi', 
            [
                'no_rek'    => $data->no_rek,
                'nama_rek'  => $data->nama_rek,
                'alamat'    => $data->alamat,
                'notelp'    => $data->no_telp,
                'email'     => $data->email,
            ]
        );
    }
}
