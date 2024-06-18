<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        $dewan = DB::table('dewans')->get();
        $info  = DB::table('infos')->first();
        return view
        ('profil2', 
            [
                'dewans'    => $dewan,
                'alamat'    => $info->alamat,
                'notelp'    => $info->no_telp,
                'email'     => $info->email,
            ]
        );
    }
}
