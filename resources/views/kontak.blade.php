@extends('layout.default')
@section('content')
    <!-- ======= Contact Section ======= -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <div class="breadcrumbs d-flex align-items-center"
            style="background-image: url('StyleTemplate/assets/img/contact-header.jpg');">
            <div class="container position-relative d-flex flex-column align-items-center">

                <h2>Contact</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact</li>
                </ol>

            </div>
        </div><!-- End Breadcrumbs -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container position-relative" data-aos="fade-up">

                <div class="row gy-4 d-flex justify-content-end">

                    <div class="col-lg-5" data-aos="fade-up" data-aos-delay="100">

                        <div class="info-item d-flex">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h4>Lokasi:</h4>
                                <p>Jl.Tg.Harapan I Lrg.Barselona No.3 Kota Madya Palu Sulawesi Tengah Indonesia</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h4>Email:</h4>
                                <p>yayasanpedulianakbangsasulteng@gmail.com</p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex">
                            <i class="bi bi-phone flex-shrink-0"></i>
                            <div>
                                <h4>Nomor Telepon:</h4>
                                <p>081243784440</p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="250">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3956.046359455565!2d112.70523707406211!3d-7.460123673529677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7e1c65c6ce9d9%3A0x6b75b4a4094aa48c!2sKampus%204%20Politeknik%20Negeri%20Jember!5e0!3m2!1sen!2sid!4v1707486546697!5m2!1sen!2sid"
                            width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>"

                    </div><!-- End Contact Form -->

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
