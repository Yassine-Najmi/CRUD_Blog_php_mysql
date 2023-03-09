<?php
include "connect.php";
$id = $_GET["moreid"];

$sql = "SELECT * FROM articles WHERE id = $id";
$result = mysqli_query($con, $sql);
$card = mysqli_fetch_assoc($result);
$titre = $card["titre"];
$image = $card["image"];
$content = $card["content"];
$date = $card["date"];

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
  <nav>
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center g-2">
        <div class="col-12">
          <nav>

            <div class="container-fluid">
              <div class="row justify-content-center align-items-center g-2 mb-5">
                <div class="col-12">
                  <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <div class="container-fluid">
                      <a class="navbar-brand" href="#">Navbar</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                          <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Categories
                            </a>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">événement</a></li>
                              <li><a class="dropdown-item" href="#">Sport</a></li>
                              <li><a class="dropdown-item" href="#">Société</a></li>
                            </ul>
                          </li>
                        </ul>
                        <form class="d-flex" role="search">
                          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                      </div>
                    </div>
                  </nav>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </nav>

  <section>
    <div class="container">
      <div class="row justify-content-center align-items-center g-2 mx-1">
        <div class="col-12 mb-4 d-flex justify-content-center">
          <h2><?php echo $titre ?></h2>
        </div>
        <div class="col-12 mb-5 d-flex justify-content-center">
          <img class="img-fluid" src="<?php echo
                                      'uploads/' . $image ?>">
        </div>
        <div class="col-8 d-flex justify-content-center">
          <p><?php echo $content ?></p>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>