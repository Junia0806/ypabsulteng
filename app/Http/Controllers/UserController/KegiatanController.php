<?php

namespace App\Http\Controllers\UserController;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function index($id)
    {
        $data       = DB::table('infos')->first();
        $detail     = DB::table('sub_programs')->where('id_program', $id)->get();

        $id_sub     = $detail->first()->id;
        $photo      = DB::table('pictures')->where('id_sub', $id_sub)->get();

        return view
        ('detail_kegiatan', 
            [
                'alamat'    => $data->alamat,
                'notelp'    => $data->no_telp,
                'email'     => $data->email,
                'detail'    => $detail,
                'photo'     => $photo,
                'firstImage'=> $photo->first()->nama_gambar
            ]
        );
    }
}
