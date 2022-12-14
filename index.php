<?php

require "function.php";

$errs = [];
$olds = [];

if (isset($_POST['kirim'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);


    if (empty($nama) == TRUE) {
        $errs['nama'] = "Masukan Nama Anda";
        $olds['email'] = $_POST['email'];
        $olds['pesan'] = $_POST['pesan'];

        // echo "<script>location.replace('index.php#contact')</script>";
    }

    if (empty($email) == TRUE) {
        $errs['email'] = "Masukan Email Anda";

        $olds['nama'] = $_POST['nama'];
        $olds['pesan'] = $_POST['pesan'];

        // echo "<script>location.replace('index.php#contact')</script>";
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == FALSE) {
        $errs['email'] = "Email tidak valid";
        $olds['nama'] = $_POST['nama'];
        $olds['pesan'] = $_POST['pesan'];

        // echo "<script>location.replace('index.php#contact')</script>";
    }

    if (empty($pesan) == TRUE) {
        $errs['pesan'] = "Masukkan pesan anda";
        $olds['nama'] = $_POST['nama'];
        $olds['email'] = $_POST['email'];

        // echo "<script>location.replace('index.php#contact')</script>";
    }

    if (empty($errs) == FALSE) {
        echo "<script>window.location.replace('#contact')</script>";
    }

    if (empty($errs) == TRUE) {

        $subject = "Pesan Portfolio | From " . $email;
        $subjectFeed = "Pesan Anda Telah Dikirim";

        $emails = "zakamaragames@gmail.com";
        $namas = "Yasz Avellia!";

        $messageFeed = "Terimakasih!. Pesan anda telah berhasil terkirim :3";
        $message = $pesan;

        //send

        $send = send_email($email, $namas, $emails, $nama, $subject, $message);

        //feedback

        $feedback = feedback($emails, $namas, $email, $subjectFeed, $messageFeed);
        if ($send == TRUE and $feedback == TRUE) {
            $swal = 1;
            echo '<script>
                    setInterval(function () {
                        window.location.href="index.php"
                    }, 1800);
                </script>';
        } else {
            var_dump($send);
            die;
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Muhammad Ilyasa - Portfolio</title>

    <!-- bootstrap  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />

    <!-- open sans font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <!-- sweet alert  -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <!-- light box  -->
    <link rel="stylesheet" href="assets/vendor/simplelightbox/simple-lightbox.min.css">

    <!-- swipper js  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <!-- owl carousel  -->
    <link rel="stylesheet" href="assets/vendor/owlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/owlCarousel/dist/assets/owl.theme.default.min.css">

    <!-- css  -->
    <link rel="stylesheet" href="assets/css/costum.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/font.css">
</head>

<body>

    <button class="top-icon" id="top-icon">
        <i class="bi bi-arrow-up-short fs-top "></i>
    </button>


    <!-- navbar -->

    <!-- navbar top  -->

    <nav class="navbar navbar-expand-sm py-2 position-absolute end-0 start-0 mx-4 rounded-pill d-none d-md-block d-lg-block bg-white">
        <div class="container">
            <a class="navbar-brand fw-700" href="">Yasz Avellia!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-400">
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="#profil">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- mobile navbar  -->

    <nav class="navbar navbar-expand-lg bg-white py-2 fixed-top top-0 end-0 start-0 d-block d-md-none d-lg-none">
        <div class="container">
            <a class="navbar-brand fw-bold" href="">Yasz Avellia!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="#profil">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- responsive scroll navbar -->

    <nav class="navbar navbar-expand-sm navbar-dark d-none d-md-block d-lg-block" id="navbar">
        <div class="container ">
            <a class="navbar-brand text-white  fw-700" href="#">Yasz Avellia!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-400">
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold mx-2" href="#profil">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold mx-2" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold mx-2" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white fw-semibold mx-2" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- end navbar -->



    <section id="profil" class="jumbotron text-center py-5">
        <div class="pt-5">
            <img src="assets/aj.jpg" class="rounded-circle img-thumbnail profile-img" width="200px" alt="" />
            <h1 class="display-4 text-white fw-700 mt-2">Yasz Avellia</h1>
            <p class="lead fw-300">Pelajar Malas | Mau Jadi Anime</p>
        </div>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#11a0ff" fill-opacity="1" d="M0,192L40,202.7C80,213,160,235,240,250.7C320,267,400,277,480,261.3C560,245,640,203,720,181.3C800,160,880,160,960,186.7C1040,213,1120,267,1200,256C1280,245,1360,171,1400,133.3L1440,96L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"></path>
    </svg>

    <!-- End jumbotron  -->

    <!-- About  -->

    <section id="about">
        <div class="container text-center">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="fw-700 mb-5 lead-b">About</h1>
                </div>
            </div>
            <div class="row justify-content-center gy-4 owl-carousel fw-400">
                <div class="">
                    <p class="text-center">Lorem , dolor sit amet consectetur adipisicing elit. Dolore sunt ducimus fugit dolores odio rem perferendis voluptatibus sint esse aw.</p>
                </div>
                <div class="">
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fuga atque quia consectetur quo cumque, amet est sint facere.</p>
                </div>
                <div class="">
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fuga atque quia consectetur quo cumque, amet est sint facere.</p>
                </div>
                <div class="">
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fuga atque quia consectetur quo cumque, amet est sint facere.</p>
                </div>
                <div class="">
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fuga atque quia consectetur quo cumque, amet est sint facere.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#11a0ff" fill-opacity="1" d="M0,160L48,133.3C96,107,192,53,288,69.3C384,85,480,171,576,181.3C672,192,768,128,864,101.3C960,75,1056,85,1152,96C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>

    <!-- End About  -->

    <!-- project  -->

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center fw-700 mb-5 text-white">My Projects</h1>
                </div>
            </div>
            <div class="swiper">
                <div class="row gy-4 justify-content-center gallery ">
                    <div class="col-10 col-md-6 col-lg-4 d-flex align-items-stretch ">
                        <div class="card shadow ">
                            <a href="assets/projects/ai.jpg">
                                <img src="assets/projects/ai.jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h5 class="">Web Restaurant PHP</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium</p>
                                <button class="btn btn-info">Visit in Github</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 col-lg-4 d-flex align-items-stretch ">
                        <div class="card shadow ">
                            <a href="assets/projects/tu.jpg">
                                <img src="assets/projects/tu.jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h5>Web Restaurant PHP</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium</p>
                                <button class="btn btn-info">Visit in Github</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-10 col-md-6 col-lg-4 d-flex align-items-stretch ">
                        <div class="card shadow ">
                            <a href="assets/projects/tri.jpg">
                                <img src="assets/projects/tri.jpg" class="card-img-top" alt="..." />
                            </a>
                            <div class="card-body">
                                <h5>Web Restaurant PHP</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium</p>
                                <button class="btn btn-info">Visit in Github</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,160L48,133.3C96,107,192,53,288,69.3C384,85,480,171,576,181.3C672,192,768,128,864,101.3C960,75,1056,85,1152,96C1248,107,1344,117,1392,122.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
        </svg>
    </section>

    <!-- End Project -->

    <!-- contact  -->

    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h1 class="fw-700 lead-b">Contact Me</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-10 col-md-8 col-lg-6">
                    <form action="" method="post">
                        <div class="mb-3 fr">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input name="nama" type="text" value="<?= $olds['nama'] ?? ''; ?>" class=" form-control <?= isset($errs['nama']) ? 'is-invalid' : '' ?>" id="exampleFormControlInput1" autocomplete="off" />
                            <div class="invalid-feedback"><?= $errs['nama'] ?? ''; ?></div>
                        </div>
                        <div class="mb-3 fr">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input name="email" type="email" value="<?= $olds['email'] ?? ''; ?>" class="form-control <?= isset($errs['email']) ? 'is-invalid' : '' ?>" id="exampleFormControlInput1" autocomplete="off" placeholder="name@example.com" />
                            <div class="invalid-feedback"><?= $errs['email'] ?? ''; ?></div>
                        </div>
                        <div class="mb-4 fr">
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                            <textarea name="pesan" value="" class="form-control <?= isset($errs['pesan']) ? 'is-invalid' : '' ?>" id="exampleFormControlTextarea1" rows="3"><?= $olds['pesan'] ?? ''; ?></textarea>
                            <div class="invalid-feedback"><?= $errs['pesan'] ?? ''; ?></div>
                        </div>
                        <button name="kirim" class="btn btn-primary mt-5" type="submit">Kirim <i class="bi bi-send "></i></button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#11a0ff" fill-opacity="1" d="M0,160L120,186.7C240,213,480,267,720,266.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
    </section>

    <!-- End Contact  -->

    <!-- footer  -->
    <footer id="footer" class="text-center">
        <p class="fw-400">Copyright &copy; 2022 My portofolio, Created By <a href="" class="text-decoration-none text-black fw-600">Yasz</a></p>
    </footer>

    <!-- End Footer  -->

    <?php

    if (isset($swal)) {
        echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Pesan Berhasil Di kirim!',
        showConfirmButton: false,
        timer: 1800
      })
        </script>";
    }

    ?>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <script src="assets/vendor/simplelightbox/simple-lightbox.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

    <script src="assets/vendor/owlCarousel/docs/assets/vendors/jquery.min.js"></script>
    <script src="assets/vendor/owlCarousel/dist/owl.carousel.min.js"></script>

    <script>
        // section navbar 
        $(".nav-link").on("click", function(e) {
            e.preventDefault()

            var linkHref = $(this).attr("href");
            $("html, body").animate({
                    scrollTop: $(linkHref).offset().top - 94,
                },
                0
            );
            return false;
        })


        $(".top-icon").on("click", function(e) {
            e.preventDefault()

            $("html, body").animate({
                    scrollTop: 0,
                },
                0
            )
            return false;
        })

        // lightbox 

        var lightbox = new SimpleLightbox('.gallery a');

        // navbar responsive 

        window.onscroll = function() {
            scrollFunction()
            scrollTopIcon()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 180) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-69px";
                document.getElementById("navbar").style.boxShadow = "0";
            }
        }

        function scrollTopIcon() {
            if (document.body.scrollTop > 180 || document.documentElement.scrollTop > 180) {
                document.getElementById("top-icon").style.bottom = "40px";
            } else {
                document.getElementById("top-icon").style.bottom = "-40px";
            }
        }

        // const swiper = new Swiper('.swiper', {
        //     // Optional parameters
        //     direction: 'horizontal',
        //     loop: true,

        //     // If we need pagination
        //     pagination: {
        //         el: '.swiper-pagination',
        //     },

        //     // Navigation arrows
        //     navigation: {
        //         nextEl: '.swiper-button-next',
        //         prevEl: '.swiper-button-prev',
        //     },

        //     // And if we need scrollbar
        //     scrollbar: {
        //         el: '.swiper-scrollbar',
        //     },
        // });

        // $(document).ready(function() {
        //     $(".owl-carousel").owlCarousel();
        // });

        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                577: {
                    items: 2,
                    nav: false
                },
                768: {
                    items: 3,
                    nav: false,
                    loop: false,
                }
            }
        })
    </script>


</body>

</html>