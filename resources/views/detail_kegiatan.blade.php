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

                <div class="col-lg-12 text-center" data-aos="fade-up" data-aos-delay="200">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="StyleTemplate/assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>

                        <h2 class="title">Sekolah Menengah Theologi Kristen Sulawesi Tengah</h2>

                        <div class="content">
                            <p>
                                Sekolah Menengah Theologi Kristen Sulawesi Tengah merupakan salah satu program unggulan dari
                                Yayasan Peduli Anak Bangsa yang berfokus pada pendidikan agama Kristen di wilayah Sulawesi
                                Tengah. Program ini bertujuan untuk memberikan pendidikan yang holistik, mengintegrasikan
                                nilai-nilai keagamaan dengan pengetahuan akademis serta pengembangan karakter yang
                                berlandaskan pada ajaran agama Kristen. Melalui kurikulum yang disesuaikan, sekolah ini
                                memberikan pendidikan yang mendalam tentang teologi Kristen, memberdayakan siswa untuk
                                menjadi pemimpin yang berintegritas dan melayani masyarakat dengan penuh dedikasi. Dengan
                                dukungan yayasan, Sekolah Menengah Theologi Kristen Sulawesi Tengah berkomitmen untuk
                                melahirkan generasi pemimpin Kristen yang berkontribusi positif bagi masyarakat dan bangsa,
                                serta meneruskan misi pelayanan dan pengajaran agama Kristen di Sulawesi Tengah dan
                                sekitarnya.
                            </p>
                        </div><!-- End post content -->
                        <h2 class="title" style="text-align:center">Dokumentasi Kegiatan</h2>
                        <br>
                        <div class="utama">
                            <div class="container_myslide">
                                <div class="mySlides">
                                    <div class="numbertext">1 / 5</div>
                                    <img src="StyleTemplate/assets/img/blog/blog-1.jpg" style="width:100%;" class="img_myslide">
                                </div>
    
                                <div class="mySlides">
                                    <div class="numbertext">2 / 5</div>
                                    <img src="StyleTemplate/assets/img/blog/blog-2.jpg" style="width:100%" class="img_myslide">
                                </div>
    
                                <div class="mySlides">
                                    <div class="numbertext">3 / 5</div>
                                    <img src="StyleTemplate/assets/img/blog/blog-3.jpg" style="width:100%" class="img_myslide">
                                </div>
    
                                <div class="mySlides">
                                    <div class="numbertext">4 / 5</div>
                                    <img src="StyleTemplate/assets/img/blog/blog-4.jpg" style="width:100%" class="img_myslide">
                                </div>
    
                                <div class="mySlides">
                                    <div class="numbertext">5 / 5</div>
                                    <img src="StyleTemplate/assets/img/blog/blog-5.jpg" style="width:100%" class="img_myslide">
                                </div>
    
                                <a class="prev" onclick="plusSlides(-1)">❮</a>
                                <a class="next" onclick="plusSlides(1)">❯</a> 
    
                                <div class="caption-container">
                                    <p id="caption"></p>
                                </div>
    
                                <div class="row">
                                    <div class="column">
                                        <img class="demo cursor" src="StyleTemplate/assets/img/blog/blog-1.jpg"
                                            style="width:100%" onclick="currentSlide(1)" alt="Dokumentasi 1">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="StyleTemplate/assets/img/blog/blog-2.jpg"
                                            style="width:100%" onclick="currentSlide(2)" alt="Dokumentasi 2">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="StyleTemplate/assets/img/blog/blog-3.jpg"
                                            style="width:100%" onclick="currentSlide(3)" alt="Dokumentasi 3">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="StyleTemplate/assets/img/blog/blog-4.jpg"
                                            style="width:100%" onclick="currentSlide(4)" alt="Dokumentasi 4">
                                    </div>
                                    <div class="column">
                                        <img class="demo cursor" src="StyleTemplate/assets/img/blog/blog-5.jpg"
                                            style="width:100%" onclick="currentSlide(5)" alt="Dokumentasi 5">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article><!-- End blog post -->
                  
                </div>
            </div>
        </div>
    </section><!-- End Blog Details Section -->
@endsection


<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("demo");
        let captionText = document.getElementById("caption");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        captionText.innerHTML = dots[slideIndex - 1].alt;
    }
</script>
