<?php



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Muhammad Ilyasa - Portfolio</title>

    <!-- bootstrap  -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
</head>
<style>
    .navbar {
        /* background: rgb(6, 2, 78); */
        /* background: linear-gradient(90deg, rgba(6, 2, 78, 1) 0%, rgba(9, 9, 121, 1) 43%, rgba(24, 4, 105, 1) 100%); */
        top: 15px;
        box-shadow: 0px 0px 40px 5px rgba(237, 237, 237, 0.3);
    }

    .jumbotron {
        background-color: #11a0ff;
    }

    #projects {
        background-color: #11a0ff;
    }

    .top-icon {
        background: none;
        border: solid 1px black;
        bottom: 20px;
        right: 50px;
        transition: 0.9s;
        z-index: 3;
    }

    .top-icon:hover {
        background-color: #11a0ff;
        transition: 0.9s;
    }

    #footer {
        background: #11a0ff;
        padding-bottom: 10px;
    }

    .navbar-brand {
        color: #2e91d3;
    }

    .lead {
        color: #eaeaea;
        letter-spacing: 0.5px;
    }

    .lead-b {
        color: #252525;
    }

    .btn-info {
        background: #008ce9;
        color: white;
        outline: none;
        border: none;
    }

    .btn-info:hover {
        background: #11a0ff;
        color: white;
    }
</style>

<body>
    <div class="top-icon position-fixed rounded-circle">
        <a href="#profil" class="text-black px-2"><i class="bi bi-arrow-up-short fs-3"></i></a>
    </div>

    <!-- navbar -->

    <nav class="navbar navbar-expand-sm py-2 position-absolute end-0 start-0 mx-4 rounded-pill d-none d-md-block d-lg-block bg-white">
        <div class="container">
            <a class="navbar-brand fw-bold" href="">Yasz Avellia!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="">Home</a>
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

    <nav class="navbar navbar-expand-lg bg-white py-2 position-absolute top-0 end-0 start-0 d-block d-md-none d-lg-none">
        <div class="container">
            <a class="navbar-brand fw-bold" href="">Yasz Avellia!</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link mx-0 mx-lg-2" href="">Home</a>
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

    <!-- end navbar -->

    <section id="profil" class="jumbotron text-center py-5">
        <div class="pt-5">
            <img src="assets/aj.jpg" class="rounded-circle img-thumbnail" width="200px" alt="" />
            <h1 class="display-4 text-white fw-semibold mt-2">Yasz Avellia</h1>
            <p class="lead">Pelajar Malas | Mau Jadi Anime</p>
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
                    <h1 class="fw-bold mb-5 lead-b">About</h1>
                </div>
            </div>
            <div class="row justify-content-center mb-lg-4 mb-md-auto">
                <div class="col-md-4 mb-lg-0 mb-md-5 mb-5">
                    <p class="text-center">Lorem , dolor sit amet consectetur adipisicing elit. Dolore sunt ducimus fugit dolores odio rem perferendis voluptatibus sint esse placeat.</p>
                </div>
                <div class="col-md-4 mb-lg-0 mb-md-5 mb-5">
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fuga atque quia consectetur quo cumque, amet est sint facere.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-lg-0 mb-md-5 mb-5">
                    <p class="text-center">Lorem , dolor sit amet consectetur adipisicing elit. Dolore sunt ducimus fugit dolores odio rem perferendis voluptatibus sint esse placeat.</p>
                </div>
                <div class="col-md-4 mb-lg-0 mb-md-5 mb-5">
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fuga atque quia consectetur quo cumque, amet est sint facere.</p>
                </div>
                <div class="col-md-4 mb-lg-0 mb-md-5 mb-5">
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
                    <h1 class="text-center fw-bold mb-5 text-white">My Projects</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-md-4">
                            <div class="card shadow mb-5 mb-lg-0">
                                <img src="assets/projects/ai.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5>Web Restaurant PHP</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium</p>
                                    <button class="btn btn-info">Visit in Github</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow mb-5 mb-lg-0">
                                <img src="assets/projects/ai.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5>Web Restaurant PHP</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium</p>
                                    <button class="btn btn-info">Visit in Github</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow mb-5 mb-lg-0">
                                <img src="assets/projects/ai.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5>Web Restaurant PHP</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium</p>
                                    <button class="btn btn-info">Visit in Github</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow mb-5 mb-lg-0">
                                <img src="assets/projects/ai.jpg" class="card-img-top" alt="..." />
                                <div class="card-body">
                                    <h5>Web Restaurant PHP</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium</p>
                                    <button class="btn btn-info">Visit in Github</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow mb-5 mb-lg-0">
                                <img src="assets/projects/ai.jpg" class="card-img-top" alt="..." />
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
                    <h1 class="fw-bold lead-b">Contact Me</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nama</label>
                            <input name="nama" type="text" class="form-control" id="exampleFormControlInput1" autocomplete="off" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input name="email" type="email" class="form-control" id="exampleFormControlInput1" autocomplete="off" placeholder="name@example.com" />
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Pesan</label>
                            <textarea name="pesan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <div class="mb-">
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#11a0ff" fill-opacity="1" d="M0,160L120,186.7C240,213,480,267,720,266.7C960,267,1200,213,1320,186.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path>
        </svg>
    </section>

    <!-- End Contact  -->

    <footer id="footer" class="text-center">
        <p>Copyright &copy; 2022 My portofolio, Created By <a href="" class="text-decoration-none text-black fw-bold">Yasz</a></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>