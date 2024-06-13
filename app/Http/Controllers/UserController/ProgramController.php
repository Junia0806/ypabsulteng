<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return view
        ('program', 
            [   
                'programs'  => [
                    [
                        'thumbnail'     => 'blog-1.jpg',
                        'nama_program'  => 'Bidang Pendidkan Keagamaan Formal dan Non Formal',
                        'id'            => '1'
                    ],
                    [
                        'thumbnail'     => 'blog-2.jpg',
                        'nama_program'  => 'Bidang Pengembangan dan Pemberdayaan Sosial Budaya Masyarakat',
                        'id'            => '2'
                    ],
                    [
                        'thumbnail'     => 'blog-3.jpg',
                        'nama_program'  => 'Bidang Penginjilan',
                        'id'            => '3'
                    ],
                    [
                        'thumbnail'     => 'blog-4.jpg',
                        'nama_program'  => 'Bidang penyaluran bantuan bagi masyarakat miskin dan terdampak bencana',
                        'id'            => '4'
                    ],
                ],

                'alamat'    => 'Jl. Tanjung Harapan Lorong Barcelona, RT/RW 001/001, Tatura, Palu, Sulawesi Tengah, 94236',
                'notelp'    => '081243784440',
                'email'     => 'ypab.sulteng@gmail.com',
            ]
        );
    }
}
