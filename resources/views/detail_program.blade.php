@extends('layout.default')
@section('content')
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action1">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    {{-- <h3>Bidang Pendidkan Keagamaan Formal dan Non Formal</h3> --}}
                </div>
            </div>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row g-5">

                <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="StyleTemplate/assets/img/blog/blog-1.jpg" alt="" class="img-fluid" style="display: flex; justify-content: center; width:100%; height:30%;">
                        </div>

                        <h2 class="title">Bidang Pendidkan Keagamaan Formal dan Non Formal</h2>

                        <div class="content">
                            <p>
                                Bidang Pendidikan Keagamaan Formal dan Non Formal merupakan program dari Yayasan Peduli Anak
                                Bangsa Indonesia yang bertujuan untuk meningkatkan taraf hidup pendidikan anak-anak bangsa.
                                Program ini mencakup berbagai kegiatan seperti sekolah minggu dan bantuan untuk Sekolah
                                Menengah Theologi Kristen Sulawesi Tengah, dengan fokus pada penyediaan akses dan pelayanan
                                pendidikan yang berkualitas serta memperkuat nilai-nilai keagamaan.
                            </p>
                        </div><!-- End post content -->

                    </article><!-- End blog post -->
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

                    <div class="sidebar ps-lg-4">

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Program Kegiatan</h3>

                            <div class="mt-3">

                                <div class="post-item mt-3">
                                    <img src="StyleTemplate/assets/img/blog/blog-recent-1.jpg" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="{{ route('detail_kegiatan') }}" >Sekolah Menengah Theologi Kristen Sulawesi Tengah
                                            </a></h4>
                                    </div>
                                </div><!-- End recent post item-->

                                <div class="post-item mt-3">
                                    <img src="StyleTemplate/assets/img/blog/blog-recent-1.jpg" alt=""
                                        class="flex-shrink-0">
                                    <div>
                                        <h4><a href="blog-post.html">Pembinaan anak-anak sekolah minggu
                                            </a></h4>
                                    </div>
                                </div><!-- End recent post item-->

                            </div>

                        </div><!-- End sidebar recent posts-->
                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->
@endsection
