@extends('layout.default')
@section('content')
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action1">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3>Bidang Program</h3>
                    <p>Di setiap bidang program, terdapat beragam kegiatan yang tidak hanya bermanfaat, tetapi juga memberi
                        warna pada pengalaman berbagi kita.</p>
                </div>
            </div>
        </div>
    </section><!-- End Call To Action Section -->
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-posts" class="recent-posts">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Bidang Program Kami</h2>

            </div>

            <div class="row gy-5">

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-box">
                        <div class="post-img"><img src="StyleTemplate/assets/img/blog/blog-1.jpg" class="img-fluid"
                                alt=""></div>
                        <a href="{{ route('detail_program') }}" class="readmore stretched-link">
                            <h3 class="post-title">Bidang Pendidkan Keagamaan Formal dan Non Formal
                            </h3>
                        </a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-box">
                        <div class="post-img"><img src="StyleTemplate/assets/img/blog/blog-2.jpg" class="img-fluid"
                                alt=""></div>
                        <h3 class="post-title" style="cursor: pointer;">Bidang Pengembangan dan Pemberdayaan Sosial Budaya
                            Masyarakat</h3>

                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="post-box">
                        <div class="post-img"><img src="StyleTemplate/assets/img/blog/blog-3.jpg" class="img-fluid"
                                alt=""></div>
                        <h3 class="post-title" style="cursor: pointer;">Bidang Penginjilan </h3>

                    </div>
                </div>

                <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="post-box">
                        <div class="post-img"><img src="StyleTemplate/assets/img/blog/blog-4.jpg" class="img-fluid"
                                alt=""></div>
                        <a href="{{ route('detail_program') }}" class="readmore stretched-link">
                            <h3 class="post-title">Bidang penyaluran bantuan bagi masyarakat miskin dan terdampak bencana
                            </h3>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End Recent Blog Posts Section -->
@endsection
