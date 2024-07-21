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

        // Inisialisasi array untuk menyimpan gambar pertama dari masing-masing id_sub
        $photos = [];

        // Iterasi melalui setiap sub_program untuk mengambil gambar pertama
        foreach ($detail as $dt) {
            $photo = DB::table('pictures')->where('id_sub', $dt->id)->first();
            if ($photo) {
                $photos[$dt->id] = $photo->nama_gambar;
            } else {
                $photos[$dt->id] = null;
            }
        }

        // dd($photos);

        return view
        ('detail_program', 
            [
                'detailsProgram'  => [
                    'thumbnail'         => $program->thumbnail,
                    'nama_program'      => $program->nama_program,
                    'deskripsi_program' => $program->deskripsi_program
                ],

                'subProgram' => $detail,
                'photo'      => $photos,

                'alamat'     => $info->alamat,
                'notelp'     => $info->no_telp,
                'email'      => $info->email,
            ]
        );
    }
}
