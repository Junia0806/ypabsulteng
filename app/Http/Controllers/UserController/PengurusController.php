<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengurusController extends Controller
{
    public function index()
    {
        return view
        ('profil2', 
            [
                'dewans'  => [
                    [
                        'photo'         => 'team-1.jpg',
                        'nama_dewan'    => 'Rakaryan Wiryawisesa',
                        'jabatan'       => 'UI & UX Designer'
                    ],
                    [
                        'photo'         => 'team-2.jpg',
                        'nama_dewan'    => 'Junia Vitasari',
                        'jabatan'       => 'Front-End Developer'
                    ],
                    [
                        'photo'         => 'team-3.jpg',
                        'nama_dewan'    => 'Mochammad Enrique',
                        'jabatan'       => 'Back-End Developer'
                    ],
                ],

                'alamat'    => 'Jl. Tanjung Harapan Lorong Barcelona, RT/RW 001/001, Tatura, Palu, Sulawesi Tengah, 94236',
                'notelp'    => '081243784440',
                'email'     => 'ypab.sulteng@gmail.com',
            ]
        );
    }
}
