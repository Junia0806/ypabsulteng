<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramUserController extends Controller
{
    public function index()
    {
        $program = DB::table('programs')->get();
        $info  = DB::table('infos')->first();
        return view
        ('program', 
            [   
                'programs'  => $program,
                'alamat'    => $info->alamat,
                'notelp'    => $info->no_telp,
                'email'     => $info->email,
            ]
        );
    }
}
