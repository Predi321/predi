<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">HotelKita</a>
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
                <div class="text-muted mr-2"> Maman Suparman</div>
                <form action="login" method="post">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                        <li class="fa fa-lock"></li>
                        Login
                    </button>
                </form>
            </div>
        </nav>
    </header>

    <main role="main">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="first-slide" src="<?= base_url('assets/'); ?>img/Hotel.png" alt="First slide" />
                    <div class="container">
                        <div class="carousel-caption ">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="second-slide" src="<?= base_url('assets/'); ?>img/gym room hotel.jpg" alt="Second slide" />
                    <div class="container">
                        <div class="carousel-caption">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="third-slide" src="<?= base_url('assets/'); ?>img/parkir hotel luas.jpeg" alt="Third slide" />
                    <div class="container">
                        <div class="carousel-caption text-right">
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
            <!-- Search Tangal -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4 mt-4 box-shadow">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-10">
                                    <label>Tanggal Check In</label>
                                    <input type="date" class="form form-control" />
                                </div>
                                <div class="col-md-2">
                                    <label><br></label>
                                    <button class="btn btn-outline-primary btn-block" />
                                    <li class="fa fa-search"></li>
                                    Cek
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--  End Search Tanggal -->