<!doctype html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var form = document.getElementById("contact-form");
            var successMessage = document.getElementById("success-message");

            form.addEventListener("submit", function(event) {
                event.preventDefault();
                // Kirim formulir atau proses data di sini (gunakan AJAX, PHP, atau bahasa pemrograman lainnya)
                // Jika pesan terkirim, tampilkan notifikasi sukses
                successMessage.style.display = "block";
                form.reset();
            });
        });
    </script>
    <title><?= $title; ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class=" container">
            <a class="navbar-brand" href="#">MobilMantap.com</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="/">Home</a>
                    <a class="nav-item nav-link" href="about">About</a>
                    <a class="nav-item nav-link" href="contact">Contact</a>
                    <a class="nav-item nav-link" href="/komik">Daftar mobil</a>
                </div>
                <?php if (logged_in()) : ?>
                    <a class="nav-item nav-link" href="/logout">Logout</a>
                <?php else : ?>
                    <a class="nav-item nav-link" href="/login">Login</a>
                <?php endif; ?>

            </div>
        </div>
    </nav>
    <div class="container">
        <h1>Contact Us</h1>
        <div class="col justify-content-end fs-6 text-start md-4">
            <form class="whatsapp-form">
                <div class="datainput">
                    <input class="validate" id="wa_name" name="name" required="" type="text" value='' />
                    <span class="highlight"></span><span class="bar"></span>
                    <label>Nama Lengkap</label>
                </div>
                <div class="datainput">
                    <input class="validate" id="wa_email" name="email" required="" type="email" value='' />
                    <span class="highlight"></span><span class="bar"></span>
                    <label>Email</label>
                </div>
                <div class="datainput">
                    <input class="validate" id="wa_number" name="count" required="" type="number" value='' />
                    <span class="highlight"></span><span class="bar"></span>
                    <label>Nomor Telepon</label>
                </div>
                <div class="datainput">
                    <textarea id='wa_textarea' placeholder='' maxlength='5000' row='1' required=""></textarea>
                    <span class="highlight"></span><span class="bar"></span>
                    <label>Pesan Anda</label>
                </div>
                <a class="send_form" href="javascript:void" type="submit" title="Send to Whatsapp">Send to
                    Whatsapp</a>
                <div id="text-info"></div>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-light text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <!-- Left -->
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <!-- Left -->

            <!-- Right -->
            <div>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-google"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-linkedin"></i>
                </a>
                <a href="" class="me-4 text-reset">
                    <i class="fab fa-github"></i>
                </a>
            </div>
            <!-- Right -->
        </section>
        <!-- Section: Social media -->

        <!-- Section: Links  -->
        <section class="">
            <div class="container text-center text-md-start mt-5">
                <!-- Grid row -->
                <div class="row mt-3">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <!-- Content -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            <i class="fas fa-gem me-3"></i>MobilMantap.com
                        </h6>
                        <p>
                            didedikasikan untuk memudahkan pengguna dalam mencari dan membeli mobil yang sesuai dengan
                            kebutuhan dan preferensi mereka. Kami menyediakan pengalaman belanja mobil yang mudah,
                            cepat, dan transparan.
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">
                            Products
                        </h6>
                        <p>
                            <a href="#!" class="text-reset">Toyota</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Suzuki</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Honda</a>
                        </p>
                        <p>
                            <a href="#!" class="text-reset">Daihatsu</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <!-- Links -->
                        <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                        <p><i class="fas fa-home me-3"></i>Universitas Pelita Bangsa</p>
                        <p>
                            <i class="fas fa-envelope me-3"></i>
                            info@example.com
                        </p>
                        <p><i class="fas fa-phone me-3"></i> +628755555555</p>
                        <p><i class="fas fa-print me-3"></i> +628574444444</p>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row -->
            </div>
        </section>
        <!-- Section: Links  -->

        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            © 2023 Copyright:
            <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MobilMantap.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <!-- Footer -->

</body>

</html>c:\Users\Asus\Downloads\img\fajri.jpeg c:\Users\Asus\Downloads\img\imam.jpeg c:\Users\Asus\Downloads\img\leman.jpg c:\Users\Asus\Downloads\img\raihan.jpeg c:\Users\Asus\Downloads\img\rio.jpeg