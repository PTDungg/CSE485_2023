<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow p-3 bg-white rounded">
        <div class="container-fluid">
            <div class="my-logo">
                <a class="navbar-brand" href="#">
                    <img src="images/logo2.png" alt="" class="img-fluid">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">SHOP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">PROJECT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">ELEMENTS</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"> <img src="images/login.png" width="20" height="20"> </button>

                </form>
            </div>
        </div>
        <div class="header-buttons">
            <a href="login.php" class="btn-login"><img src="images/user.png" width="27" height="27">
        </div>
          <div class="header-buttons"></div>  </a>  <a href="#" class="btn-cart"><img src="images/shopping.png" width="30" height="30"></a>
        </div>
    </nav>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slideshow/slide01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slideshow/slide03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="section section-fluid learts-pt-30  introducton-box">
        <div class="container">
            <div class="row learts-mb-n30">
                <div class="col-xxl-6 col-xl-8 col-12 learts-mb-30">

                    <div class="learts-blockquote">
                        <div class="inner">

                            <h2 class="title">Learts is an online shop for handicrafts and arts’ works based in the US.</h2>
                            <div class="desc">
                                <p>Crafting beautiful stuff with our own hands and the help from useful tools is a wonderful process, where you can enjoy yourself while pulling out some ideas and busy perfecting your work. We provide high-end unique vases, wall arts, home accessories, and furniture pieces.</p>
                            </div>
                            <a href="index.php" class="link">ABOUT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 learts-mb-30   item ">
        <div class="sale-banner3-1">
            <div class="image"><img src="images/banner/banner1.png" alt=""></div>
            <div class="content">
                <span class="special-title">Spring sale</span>
                <h3 class="title">Sale up to 10% all</h3>
                <a href="#" class="link">SHOP NOW</a>
            </div>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 learts-mb-30  item">
        <div class="category-banner3">
            <a href="index.php" class="inner">
                <div class="image"><img src="images/banner/banner2.png" alt=""></div>
                <div class="content">
                    <h3 class="title">Home Decor<span class="number">16 items</span></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 learts-mb-30   item ">
        <div class="category-banner3">
            <a href="index.php" class="inner">
                <div class="image"><img src="images/banner/banner3.png" alt=""></div>
                <div class="content">
                    <h3 class="title">Gift Ideas<span class="number">16 items</span></h3>
                </div>
            </a>
        </div>
    </div>
    <div class="col-xxl-3 col-xl-4 col-md-6 col-12 order-xxl-6 learts-mb-30 item">
        <div class="instagram-banner1">
            <div class="inner">
                <div class="image"><img src="images/banner/banner4.png" alt=""></div>
                <div class="content">
                    <div class="icon">
                        <i class="fab fa-instagram"></i>
                    </div>
                    <span class="sub-title">Follow us on instagram</span>
                    <h3 class="title"><a href="index.php">@learts_store</a></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-xl-8 col-12 learts-mb-30 item">
        <div class="category-banner3">
            <a href="index.php" class="inner">
                <div class="image"><img src="images/banner/banner5.png" alt=""></div>
                <div class="content">
                    <h3 class="title">Toys<span class="number">6 items</span></h3>
                </div>
            </a>
        </div>
    </div>
</header>
<main class="container-fluid mt-3">
    <h3 class="text-center text-uppercase mb-3 text-primary">TOP LIKE </h3>
    <div class="row">
        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <img src="images/songs/cayvagio.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">AlBUM 1 </a>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <img src="images/songs/csmt.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">ALBUM 2</a>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <img src="images/songs//longme.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">ALBUM 3</a>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card mb-2" style="width: 100%;">
                <img src="images/songs/phoipha.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center">
                        <a href="" class="text-decoration-none">ALBUM 4</a>
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-sm-3">

            <div class="card mb-2" style="width: 100%;">
                <img src="images/songs/noitinhyeubatdau.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center my-title">
                        <a href="" class="text-decoration-none">ALBUM 5</a>
                    </h5>
                </div>
            </div>
        </div>
    </div>
</main>
<footer class="bg-white d-flex justify-content-center align-items-center border-top border-secondary  border-2" style="height:80px">
    <h4 class="text-center text-uppercase fw-bold">TLU's music garden</h4>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
