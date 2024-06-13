<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        return view
        ('beranda', 
            [
                'alamat'    => 'Jl. Tanjung Harapan Lorong Barcelona, RT/RW 001/001, Tatura, Palu, Sulawesi Tengah, 94236',
                'notelp'    => '081243784440',
                'email'     => 'ypab.sulteng@gmail.com',
            ]
        );
    }
}
