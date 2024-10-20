@extends('layout.default')
@section('content')
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action1">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3>{{ $detailsProgram['nama_program'] }}</h3>
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
                        {{-- <h2 class="title">{{ $detailsProgram['nama_program'] }}</h2> --}}

                        <div>
                            <img src={{ asset($detailsProgram['thumbnail']) }} alt="" class="img-thumbnail1">
                        </div>


                        <div class="content">
                            <p class="detailprogram">
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
                                @if ($subProgram->isEmpty())
                                    <p class="text-muted">Belum ada kegiatan untuk program ini</p>
                                @else
                                    @foreach ($subProgram as $subPro)
                                        <div class="post-item mt-3">
                                            <div>
                                                <img src="{{ asset($photo[$subPro->id]) }}" class="img-thumbnail"
                                                    alt="">
                                            </div>
                                            <div>
                                                <h4><a
                                                        href="{{ route('detail_kegiatan', $subPro->id) }}">{{ $subPro->nama_sub }}</a>
                                                </h4>
                                            </div>
                                        </div><!-- End recent post item-->
                                    @endforeach
                                @endif
                            </div>

                        </div><!-- End sidebar recent posts-->
                    </div><!-- End Blog Sidebar -->

                </div>
            </div>

        </div>
    </section><!-- End Blog Details Section -->
@endsection
