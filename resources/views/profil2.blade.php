@extends('layout.default')
@section('content')
    <main id="main">
        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action" class="call-to-action1">
            <div class="container" data-aos="fade-up">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h3>Struktur Pengurus</h3>
                    </div>
                </div>
            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Pengurus Yayasan</h2>

                </div>

                <div class="row gy-4">
                    @foreach ($dewans as $dwn)
                        <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="team-member">
                            <div class="member-img">
                                <img src=" {{ asset('StyleTemplate/assets/img/team/' . $dwn['photo']) }} " class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="bi bi-twitter"></i></a>
                                    <a href=""><i class="bi bi-facebook"></i></a>
                                    <a href=""><i class="bi bi-instagram"></i></a>
                                    <a href=""><i class="bi bi-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4> {{ $dwn['nama_dewan'] }}</h4>
                                <span>{{ $dwn['jabatan'] }}</span>
                            </div>
                        </div>
                    </div><!-- End Team Member -->
                    @endforeach

                </div>

            </div>
        </section><!-- End Team Section -->

    </main><!-- End #main -->
@endsection
