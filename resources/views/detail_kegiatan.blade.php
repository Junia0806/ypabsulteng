@extends('layout.default')
@foreach ($detail as $dt)
@section('content')
    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action1">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h3>{{ $dt->nama_sub }}</h3>
                </div>
            </div>
        </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">
            <div class="row g-5">
                <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="200">
                    <article class="blog-details">
                        
                            <div class="row">
                                <div class="col-lg-12" style="text-align: justify">
                                    <p>{{ $dt->deskripsi_sub }}</p>
                                </div>
                            </div>
                            <div class="utama">
                                <div class="container_myslide">
                                    @php $index = 1; @endphp
                                    @foreach ($photo as $pt)
                                        <div class="mySlides">
                                            <img src="{{ asset($pt->nama_gambar) }}" class="img_myslide">
                                        </div>
                                        @php $index++; @endphp
                                    @endforeach

                                    <a class="prev" onclick="plusSlides(-1)">❮</a>
                                    <a class="next" onclick="plusSlides(1)">❯</a>

                                    <div class="caption-container">
                                        <p id="caption"></p>
                                    </div>

                                    <div class="row">
                                        @foreach ($photo as $pt)
                                            <div class="column">
                                                <img class="demo cursor" src="{{ asset($pt->nama_gambar) }}"
                                                    style="" onclick="currentSlide({{ $loop->index + 1 }})"
                                                    alt="Dokumentasi Kegiatan {{ $loop->index + 1 }} / {{ count($photo) }} ">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </article><!-- End blog post -->
                </div>
            </div>
        </div>
    </section><!-- End Blog Details Section -->
@endsection

<script>
    document.addEventListener('DOMContentLoaded', (event) => {
        let slideIndex = 1;
        showSlides(slideIndex);

        window.plusSlides = function(n) {
            showSlides(slideIndex += n);
        }

        window.currentSlide = function(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");

            // Wrap around the slides
            if (n > slides.length) {
                slideIndex = 1;
            } else if (n < 1) {
                slideIndex = slides.length;
            }

            // Hide all slides and remove "active" class from all dots
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }

            // Display the current slide and add "active" class to the corresponding dot
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            captionText.innerHTML = dots[slideIndex - 1].alt;
        }
    });
</script>
