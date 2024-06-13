<?php

namespace App\Http\Controllers\UserController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DetailProgramController extends Controller
{
    public function index(Request $request)
    {
        // Sementara menggunakan lempar request, Nanti diganti pencarian berdasarkan id
        $thumbnail      = $request->input('thumbnail');
        $nama_program   = $request->input('nama_program');
        $id             = $request->input('id');

        $deskripsi      = null;

        switch ($id) {
            case '1':
                $deskripsi = 'Bidang Pendidikan Keagamaan Formal dan Non Formal merupakan program dari Yayasan Peduli Anak Bangsa Indonesia yang bertujuan untuk meningkatkan taraf hidup pendidikan anak-anak bangsa. Program ini mencakup berbagai kegiatan seperti sekolah minggu dan bantuan untuk Sekolah Menengah Theologi Kristen Sulawesi Tengah, dengan fokus 
                pada penyediaan akses dan pelayanan pendidikan yang berkualitas serta memperkuat nilai-nilai keagamaan.';
                break;
            
            case '2':
                $deskripsi = 'Bidang Pengembangan dan Pemberdayaan Sosial Budaya Masyarakat merupakan area penting dalam memajukan kesejahteraan sosial. Fokus utamanya adalah meningkatkan kesadaran, pengetahuan, dan keterlibatan masyarakat dalam kegiatan budaya. 
                Ini melibatkan program-program yang memperkuat identitas lokal, mendukung kesetaraan gender, mengatasi ketimpangan, dan meningkatkan partisipasi dalam kegiatan sosial. Pendekatan ini sering melibatkan penyuluhan, pelatihan, dan kolaborasi dengan komunitas serta lembaga budaya. Tujuannya adalah menciptakan lingkungan yang inklusif, beragam, dan berdaya bagi semua anggota masyarakat untuk berkembang dan berpartisipasi secara aktif dalam kehidupan sosial dan budaya mereka.';
                break;

            case '3':
                $deskripsi = 'Bidang Penginjilan merupakan wilayah yang berkaitan dengan penyebaran ajaran atau kepercayaan suatu agama atau kepercayaan kepada masyarakat luas. Ini melibatkan aktivitas seperti penyampaian pesan-pesan agama, pembangunan komunitas keagamaan, dan pemasyarakatan nilai-nilai moral. Penginjilan sering dilakukan melalui berbagai media, termasuk diskusi kelompok, ceramah, penerbitan buku dan media cetak, serta penggunaan media sosial. 
                Tujuan utamanya adalah untuk memperluas pemahaman agama atau kepercayaan tertentu dan mendorong individu untuk mengadopsi ajaran atau keyakinan tersebut sebagai bagian dari kehidupan mereka.';
                break;

            case '4':
                $deskripsi = 'Dalam bidang penyaluran bantuan bagi masyarakat miskin dan terdampak bencana, prioritas utama adalah menyediakan bantuan yang tepat waktu dan efektif. Program-program ini bertujuan untuk mengurangi penderitaan dan memulihkan kehidupan setelah bencana melalui penyediaan makanan, perlindungan, perawatan kesehatan, dan bantuan relokasi jika diperlukan. 
                Upaya-upaya ini melibatkan koordinasi antara pemerintah, LSM, dan sukarelawan untuk memastikan bantuan mencapai yang membutuhkan. Selain itu, pendekatan jangka panjang juga diperlukan untuk membantu masyarakat membangun kembali keberlanjutan ekonomi dan infrastruktur mereka, serta meningkatkan ketahanan terhadap bencana di masa mendatang.';
                break;

            default:
                $deskripsi = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque aut omnis commodi voluptate veritatis rem iure assumenda eos officiis quasi iste earum nisi facere dolores excepturi, et itaque. Voluptatum, quaerat.';
                break;
        }

        return view
        ('detail_program', 
            [
                'detailsProgram'  => [
                    'thumbnail'         => $thumbnail,
                    'nama_program'      => $nama_program,
                    'deskripsi_program' => $deskripsi
                ],

                'subProgram' => [
                    [
                        'photo' => 'blog-recent-1.jpg',
                        'title' => 'Sekolah Menengah Theologi Kristen Sulawesi Tengah'
                    ],
                    [
                        'photo' => 'blog-recent-1.jpg',
                        'title' => 'Pembinaan anak-anak sekolah minggu'
                    ],
                    [
                        'photo' => 'blog-recent-1.jpg',
                        'title' => 'Kegiatan Lainnya'
                    ],
                ],

                'alamat'    => 'Jl. Tanjung Harapan Lorong Barcelona, RT/RW 001/001, Tatura, Palu, Sulawesi Tengah, 94236',
                'notelp'    => '081243784440',
                'email'     => 'ypab.sulteng@gmail.com',
            ]
        );
    }
}
