@extends('layout.default')
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-4">
                    <h2 data-aos="fade-up">Yayasan Peduli Anak Bangsa Indonesia</h2>
                    <blockquote data-aos="fade-up" data-aos-delay="100">
                        {{-- <p>
                            Berbuat yang terbaik bagi sesama manusia dengan pelayanan kristen yang holistik berdasarkan
                            Pancasila
                        </p> --}}
                    </blockquote>
                    <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
                        <a href="{{ route('program-yayasan') }}" class="btn-get-started">Program Kami</a>
                        <a href="https://youtu.be/Cdup4DGAQoc?si=ooRooib2T7Du5Dc6"
                            class="glightbox btn-watch-video d-flex align-items-center"><i
                                class="bi bi-play-circle"></i><span>Video Profil</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <main id="main">

        <!-- ======= Why Choose Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h2>Bersama Kami</h2>
                </div>
                <div class="row g-0" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-xl-5 img-bg" style="background-image: url('StyleTemplate/assets/img/beranda/1.jpg')"></div>
                    <div class="col-xl-7 slides position-relative">
                        <div class="slides-1 swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Uluran Tangan</h3>
                                        <h4 class="mb-3">Disetiap uluran tangan Anda membawa harapan dan kebaikan bagi sesama.</h4>
                                        <p>Dalam setiap uluran tangan, tersemat kekuatan tak terhingga untuk mengubah dunia. Dengan setiap uluran tangan, kita membangun ikatan kemanusiaan yang kuat, membawa sinar terang di tengah kegelapan, dan mewujudkan impian bersama untuk dunia yang lebih baik.</p>
                                    </div>
                                </div>
                                <!-- End slide item -->
                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Jejak Kebaikan</h3>
                                        <h4 class="mb-3">Mengukir jejak kebaikan yang tak terhapuskan dalam perjalanan hidup sesama manusia.</h4>
                                        <p>Dalam setiap langkah, kita menorehkan jejak kebaikan yang melampaui batas waktu. Tiap tindakan, sekecil apapun, membentuk cerita yang tak terhapuskan dalam perjalanan hidup sesama manusia. Bersama-sama, kita mengguratkan catatan kebaikan yang akan dikenang selamanya.</p>
                                    </div>
                                </div>
                                <!-- End slide item -->
                                <div class="swiper-slide">
                                    <div class="item">
                                        <h3 class="mb-3">Panggilan Suci</h3>
                                        <h4 class="mb-3">Sebuah panggilan suci yang membawa Anda untuk meningkatkan kualitas kehidupan sesama manusia.</h4>
                                        <p>Itu adalah undangan untuk meningkatkan kualitas kehidupan mereka, menghadirkan cahaya di tengah kegelapan, dan menyelamatkan jiwa-jiwa dengan kasih dan penuh perhatian.</p>
                                    </div>
                                </div>
                                <!-- End slide item -->
                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Choose Us Section -->

        <!-- ======= Our Services Section ======= -->
        <section id="services-list" class="services-list">
            <div class="container" data-aos="fade-up">
                <div class="section-header"></div>
            </div>
        </section>
        <!-- End Our Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>Mari berbagi kasih dan kebaikan kepada sesama</h3>
                        <p>Menjadi agen perubahan yang membawa cahaya di tengah kegelapan, dengan setiap langkah kecil yang kita ambil, kita bisa membuat perbedaan besar dalam kehidupan orang lain.</p>
                        <a class="cta-btn" href="{{ route('program-yayasan') }}">Program Kami</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Call To Action Section -->

      <!-- ======= Partnership Section ======= -->
<section id="partnership" class="partnership">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <h2>Kemitraan Kami</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="row">
                    <div class="col-md-3 col-6 text-center mb-4">
                        <img src="StyleTemplate/assets/img/kemitraan/logo.png" class="img-fluid" style="max-height: 100px;" alt="Partner Logo 1">
                        <p class="mt-2">GKKS</p>
                    </div>
                    <div class="col-md-3 col-6 text-center mb-4">
                        <img src="StyleTemplate/assets/img/kemitraan/logo2.png" class="img-fluid" style="max-height: 100px;" alt="Partner Logo 2">
                        <p class="mt-2">YBP</p>
                    </div>
                    <div class="col-md-3 col-6 text-center mb-4">
                        <img src="StyleTemplate/assets/img/kemitraan/logo3.png" class="img-fluid" style="max-height: 100px;" alt="Partner Logo 3">
                        <p class="mt-2">Kementrian Sosial</p>
                    </div>
                    <div class="col-md-3 col-6 text-center mb-4">
                        <img src="StyleTemplate/assets/img/kemitraan/logo4.png" class="img-fluid" style="max-height: 100px;" alt="Partner Logo 4">
                        <p class="mt-2">Kemasyarakatan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Partnership Section -->


    </main>
    <!-- End #main -->
@endsection
