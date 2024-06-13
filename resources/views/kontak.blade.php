@extends('layout.default')
@section('content')
    <!-- ======= Contact Section ======= -->

    <main id="main">

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>Hubungi Kami</h3>
                        <p>Jangan ragu untuk turut serta memberikan perlindungan dan kesempatan bagi anak-anak Indonesia
                            bersama Yayasan Peduli Anak Bangsa Indonesia. </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container position-relative" data-aos="fade-up">

                <div class="row gy-4 d-flex justify-content-end">

                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Lokasi:</h4>
                                <p>{{ $alamat }}
                                </p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>{{ $email }}</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Nomor Telepon:</h4>
                                <p>{{ $notelp}}</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2495.611062111833!2d119.88295243331352!3d-0.9103629943290376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2d8bee06e2af9f73%3A0xaa08d99cf48e8209!2sJl.%20Tj.%20Harapan%2C%20Tatura%20Utara%2C%20Kec.%20Palu%20Sel.%2C%20Kota%20Palu%2C%20Sulawesi%20Tengah%2094111!5e0!3m2!1sen!2sid!4v1707970307899!5m2!1sen!2sid"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
