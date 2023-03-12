
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
                        <a class="nav-link active" aria-current="page" href="./shop.php">SHOP</a>
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
</header>
<main class="container-fluid mt-3">
    <h3 class="text-center text-uppercase mb-3 text-primary"> LIST MUSIC </h3>
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
