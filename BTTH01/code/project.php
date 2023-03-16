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
                        <a class="nav-link active" aria-current="page" href="./project.php">PROJECT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">ELEMENTS</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Nội dung cần tìm" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"> <img src="images/login.png" width="20" height="20" alt=""> </button>

                </form>
            </div>
        </div>
        <div class="header-buttons">
            <a href="login.php" class="btn-login"><img src="images/user.png" width="27" height="27">
        </div>
        <div class="header-buttons"></div>  </a>  <a href="#" class="btn-cart"><img src="images/shopping.png" width="30" height="30"></a>
        </div>
    </nav>

    <section>
      <h2>Danh sách album</h2>
      <div class="album">
        <div>
          <img src="https://images.unsplash.com/photo-1612191424342-57a551d56275?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80" alt="Album 1">
          <h3>Album 1</h3>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1519681393784-d120267933ba?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1050&amp;q=80" alt="Album 2">
          <h3>Album 2</h3>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1495127218755-aa587fd363b4?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80" alt="Album 3">
          <h3>Album 3</h3>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1546534483-4c4e7db04f24?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80" alt="Album 4">
          <h3>Album 4</h3>
        </div>
      </div>
    </section>
    <footer>
      <p>Bản quyền © 2023 Dự án âm nhạc</p>
    </footer>
  </body>
</html>
