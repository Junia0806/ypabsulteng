@extends('layout.default')
@section('content')
    <main id="main">
        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action2">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>Donasi Terbaik</h3>
                        <p>Jadilah pilar kebaikan dengan donasi terbaik Anda karena setiap uluran tangan Anda akan membawa kemajuan dan
                            kesejahteraan bersama.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="row gy-4" data-aos="fade-up">
                    <div class="col-lg-4">
                        <img src="StyleTemplate/assets/img/donasi/1d.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8">
                        <div class="content ps-lg-5">
                            <h3>Hidup Lebih Bermakna Saat Kita Saling Mengasihi Antar Sesama</h3>
                            <p>
                                Mari salurkan donasi Anda untuk mewujudkan impian mereka. Dengan berbagi dan memberi, kita
                                merasakan makna hidup yang jauh lebih dalam. Salurkan donasi terbaik Anda sekarang.
                            </p>
                            <ul>
                                <li><i class="bi bi-check-circle-fill"></i>Donasi dapat disalurkan melalui nomor rekening
                                    1510018476405 a/n YAYASAN PEDULI ANAK BANGSA SULTENG</li>
                                <li><i class="bi bi-check-circle-fill"></i> Simpanlah bukti transaksi donasi yang telah Anda
                                    lakukan</li>
                                <li><i class="bi bi-check-circle-fill"></i> Jangan lupa untuk memberikan konfirmasi kepada
                                    pihak yayasan dengan mengklik tombol berikut.</li>
                            </ul>
                            <a href="https://wa.me/{{ $notelp }}" target="_blank" rel="noopener noreferrer">
                                <button type="button" class="btn btn-primary"
                                    style="--bs-btn-padding-y: .50rem; --bs-btn-padding-x: 1rem; --bs-btn-font-size: 1rem; --bs-btn-border-radius:100px;">
                                    Klik Disini
                                </button>
                            </a>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->
    </main><!-- End #main -->
@endsection
