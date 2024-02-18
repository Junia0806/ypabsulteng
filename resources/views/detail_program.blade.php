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
                            <img src={{ asset('StyleTemplate/assets/img/blog/' . $detailsProgram['thumbnail']) }}
                                alt="" class="img-fluid"
                                style="display: flex; justify-content: center; width:100%; height:30%;">
                        </div>

                        <h2 class="title">{{ $detailsProgram['nama_program'] }}</h2>

                        <div class="content">
                            <p>
                                {{ $detailsProgram['deskripsi_program'] }}
                            </p>
                        </div><!-- End post content -->

                    </article><!-- End blog post -->
                </div>

                <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

                    <div class="sidebar ps-lg-4">

                        <div class="sidebar-item recent-posts">
                            <h3 class="sidebar-title">Program Kegiatan</h3>

                            <div class="mt-3">

                                @foreach ($subProgram as $subPro)
                                    <div class="post-item mt-3">
                                        <img src="{{ asset('StyleTemplate/assets/img/blog/' . $subPro['photo']) }}" alt=""
                                            class="flex-shrink-0">
                                        <div>
                                            <h4><a href="{{ route('detail_kegiatan') }}">{{ $subPro['title'] }}
                                                </a></h4>
                                        </div>
                                    </div><!-- End recent post item-->
                                @endforeach

                            </div>

                        </div><!-- End sidebar recent posts-->
                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->
@endsection