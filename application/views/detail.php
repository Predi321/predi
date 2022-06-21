<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="favicon.ico" />

    <title>Detail Hotel Kita</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url('assets/'); ?>dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>font-awesome/css/font-awesome.min.css" />
    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/'); ?>dist/css/carousel.css" rel="stylesheet" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">Hotel-Kita</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Kamar<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Fasilitas</a>
                    </li>
                </ul>
                <form class="form-inline mt-2 mt-md-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" />
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        Search
                    </button>
                </form>
            </div>
        </nav>
    </header>

    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="<?= base_url('assets/'); ?>img/Hotel.png" alt="First slide" />
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Nama hotel</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="container bg-light">
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-md-8">
                    <div class="card mb-4 mt-2 box-shadow">
                        <div class="card-body">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="<?= base_url('assets/') ?>img/kolam renang hotel.jpg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url('assets/'); ?>img/Hotel.png" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url('assets/'); ?>img/parkir hotel luas.jpeg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url('assets/'); ?>img/gym room hotel.jpg" class="d-block w-100" alt="">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="<?= base_url('assets/'); ?>img/kamar hotel1.jpg" class="d-block w-100" alt="">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </button>
                            </div>
                            <p>
                                Hotel ini memiliki fasilitas yang sangat bagus
                            </p>
                            <strong> Fasilitas </strong>
                            <hr />
                            <li class="fa fa-coffee fa-3x" title="Coffe Maker"></li>
                            <li class="fa fa-tv fa-3x" title="TV 32 Inch"></li>
                            <li class="fa fa-shower fa-3x" title="Shower"></li>
                            <li class="fa fa-wifi fa-3x" title="Free Wifi"></li>
                            <br />
                            <br />
                            <strong> Rating & Sisa Kamar </strong>
                            <hr />
                            <li class="fa fa-star fa-2x" style="color: orange"></li>
                            <li class="fa fa-star fa-2x" style="color: orange"></li>
                            <li class="fa fa-star fa-2x" style="color: orange"></li>
                            <li class="fa fa-star fa-2x" style="color: orange"></li>
                            <li class="fa fa-star fa-2x"></li>
                            <br />
                            <br />
                            <strong> Comment </strong>
                            <hr />
                            <div class="media border p-3">
                                <img src="<?= base_url('assets/'); ?>img/Hotel.png" alt="Maman Suparman" class="mr-3 mt-3 rounded-circle" style="width: 60px" />
                                <div class="media-body">
                                    <h5>
                                        Maman Suparman
                                        <small> <i>Posted on February 19, 2016 </i></small>
                                    </h5>
                                    <p>
                                        This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a
                                        little bit longer.
                                    </p>
                                </div>
                            </div>
                            <div class="media border p-3">
                                <img src="<?= base_url('assets/'); ?>img/Hotel.png" alt="Maman Suparman" class="mr-3 mt-3 rounded-circle" style="width: 60px" />
                                <div class="media-body">
                                    <h5>
                                        Maman Suparman
                                        <small> <i>Posted on February 19, 2016 </i></small>
                                    </h5>
                                    <p>
                                        This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a
                                        little bit longer.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Kolom Kiri -->
                <div class="col-md-4">
                    <div class="card mt-2 mb-4 box-shadow">
                        <div class="card-body" style="text-align: center;">
                            <h3>HARGA MULAI DARI</h3>
                            <h1>Rp. 400.000,-</h1>
                            <hr>
                            <button class="btn btn-outline-primary btn-lg btn-block">
                                PESAN SEKARANG
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>