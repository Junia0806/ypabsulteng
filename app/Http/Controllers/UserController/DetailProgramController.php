<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailProgramController extends Controller
{
    public function index($id)
    {
        $detail     = DB::table('sub_programs')->where('id_program', $id)->get();
        $program    = DB::table('programs')->where('id_program', $id)->first();
        $info       = DB::table('infos')->first();

        $id_sub     = $detail->first()->id;
        $photo      = DB::table('pictures')->where('id_sub', $id_sub)->first();
        
        return view
        ('detail_program', 
            [
                'detailsProgram'  => [
                    'thumbnail'         => $program->thumbnail,
                    'nama_program'      => $program->nama_program,
                    'deskripsi_program' => $program->deskripsi_program
                ],

                'subProgram' => $detail,
                'photo'      => $photo->nama_gambar,

                'alamat'     => $info->alamat,
                'notelp'     => $info->no_telp,
                'email'      => $info->email,
            ]
        );
    }
}
