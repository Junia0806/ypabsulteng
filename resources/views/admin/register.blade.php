<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href={{ asset('AdminUI/assets/img/admin/logo.png') }}>
    <link rel="icon" type="image/png" href={{ asset('AdminUI/assets/img/admin/logo.png') }}>
    <title>
        YPAB - Admin Register
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href={{ asset('AdminUI/assets/css/nucleo-icons.css') }} rel="stylesheet" />
    <link href={{ asset('AdminUI/assets/css/nucleo-svg.css') }} rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href={{ asset('AdminUI/assets/css/nucleo-svg.css') }} rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href={{ asset('AdminUI/assets/css/soft-ui-dashboard.css?v=1.0.7') }} rel="stylesheet" />
</head>

<body class="">
    <div class="container position-sticky z-index-sticky top-0">
        <div class="row">
            <div class="col-12">
            </div>
        </div>
    </div>
    <main class="main-content  mt-0">
        <section>
            <div class="page-header min-vh-75">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
                            <div class="card card-plain mt-8">
                                <div class="card-header pb-0 text-left bg-transparent">
                                    <h3 class="font-weight-bolder text-info text-gradient">Register Admin</h3>
                                    <p class="mb-0">Yayasan Peduli Anak Bangsa Sulawesi Tengah</p>
                                </div>
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register.post') }}">
                                        @csrf
                                        <label>Nama</label>
                                        <div class="mb-3">
                                            <input type="text" class="form-control" placeholder="Masukkan Nama"
                                                name="name" required>
                                        </div>
                                        <label>Email</label>
                                        <div class="mb-3">
                                            <input type="email" class="form-control" placeholder="Masukkan Email"
                                                name="email" required>
                                        </div>
                                        <label>Password</label>
                                        <div class="mb-3 position-relative">
                                            <input type="password" name="password" id="password" class="form-control"
                                                placeholder="Masukkan Password" aria-label="Password" required
                                                aria-describedby="password-addon">
                                            <i class="fas fa-eye position-absolute end-0 top-0 mt-3 me-2"
                                                id="togglePassword" style="cursor: pointer;"></i>
                                        </div>
                                        <label>Konfirmasi Password</label>
                                        <div class="mb-3 position-relative">
                                            <input type="password" name="password_confirmation"
                                                id="password_confirmation" class="form-control"
                                                placeholder="Masukkan Password Yang Sama"
                                                aria-label="password_confirmation" required
                                                aria-describedby="password-addon">
                                            <i class="fas fa-eye position-absolute end-0 top-0 mt-3 me-2"
                                                id="togglePasswordKonfirmasi" style="cursor: pointer;"></i>
                                        </div>
                                        <div id="error-message" style="color: red; font-size: 14px; display: none;"></div>
                                        <div class="text-center">
                                            <button type="submit"
                                                class="btn bg-gradient-info w-100 mt-4 mb-0">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6"
                                    style="background-image:url('{{ asset('AdminUI/assets/img/admin/cover2.jpeg') }}')">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        //Pesan kesalahan saat register akun
        document.querySelector('form').addEventListener('submit', function(event) {
            const password = document.querySelector('#password').value;
            const passwordConfirmation = document.querySelector('#password_confirmation').value;
            const errorMessage = document.querySelector('#error-message');

            if (password !== passwordConfirmation) {
                event.preventDefault(); // Menghentikan form dari pengiriman
                errorMessage.innerText = 'Password dan Konfirmasi Password tidak sama.';
                errorMessage.style.display = 'block';
            } else {
                errorMessage.style.display = 'none'; // Sembunyikan pesan error jika tidak ada masalah
            }
        });
        //Lihat password
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });

        //Lihat password (konfirmasi)
        const togglePasswordKonfirmasi = document.querySelector('#togglePasswordKonfirmasi');
        const passwordKonfirmasi = document.querySelector('#password_confirmation');
        togglePasswordKonfirmasi.addEventListener('click', function(e) {
            const type = passwordKonfirmasi.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordKonfirmasi.setAttribute('type', type);
            this.classList.toggle('fa-eye');
            this.classList.toggle('fa-eye-slash');
        });
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>
