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
                @foreach ($programs as $pr)
                    <div class="col-xl-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="post-box">
                            <div class="post-img">
                                <img src="{{ asset('StyleTemplate/assets/img/blog/' . $pr['thumbnail']) }}" class="img-fluid" alt="">
                            </div>
                            <a href="{{ route('detail_program', ['thumbnail' => $pr['thumbnail'], 'nama_program' => $pr['nama_program'], 'id' => $pr['id']]) }}" class="readmore stretched-link">
                                <h3 class="post-title">{{ $pr['nama_program'] }} </h3>
                            </a>
                        </div>
                    </div>
                @endforeach
    </section><!-- End Recent Blog Posts Section -->
@endsection
