<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        $data = DB::table('infos')->first();

        return view
        ('kontak', 
            [
                'alamat'    => $data->alamat,
                'notelp'    => $data->no_telp,
                'email'     => $data->email,
            ]
        );
    }
}
