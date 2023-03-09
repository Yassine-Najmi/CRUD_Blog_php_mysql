<?php
include "connect.php";
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
    <div class="container-fluid p-0 mx-0">
      <div class="row justify-content-center align-items-center">
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
      <div class="row justify-content-center align-items-center g-2 mt-5">

        <div class="col-12">
          <a name="" id="" class="btn btn-success mb-5" href="createForm.php" role="button">+ Add article</a>
        </div>

        <?php

        $sql = "SELECT * FROM articles";
        $result = mysqli_query($con, $sql);

        if ($result) {
          while ($card = mysqli_fetch_assoc($result)) {
            $id = $card["id"];
            $titre = $card["titre"];
            $image = $card["image"];
            $content = substr($card["content"], 0, 200) . "...";
            $date = $card["date"];
            // $categorie_id = $card["categorie_id"];
            echo '<div class="col-4">
            <div class="card" style="width: 22rem;">
              <img src=' . "uploads/" . $image . ' class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">' . $titre . '</h5>
                <p class="card-text">' . $content . '</p>
                <a href="singleArticle.php?moreid=' . $id . '" class="btn btn-primary">more</a>
                <a href="editForm.php?updateid= ' . $id . '" class="btn btn-success">Update</a>
                <a href="delete.php?deleteid=' . $id . '" class="btn btn-danger">Delete</a>
              </div>
            </div>
          </div>';
          }
        }

        ?>

        <!-- <div class="col-4">
          <div class="card" style="width: 22rem;">
            <img src=< echo $image ?> class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">'.$titre.'</h5>
              <p class="card-text">'.$content.'</p>
              <a href="singleArticle.php" class="btn btn-primary">more</a>
              <a href="editForm.php" class="btn btn-success">edit</a>
              <a href="#" class="btn btn-danger">delete</a>
            </div>
          </div>
        </div> -->
        <!-- <div class="col-4">
          <div class="card" style="width: 22rem;">
            <img src="e.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="singleArticle.php" class="btn btn-primary">more</a>
              <a href="editForm.php" class="btn btn-success">edit</a>
              <a href="#" class="btn btn-danger">delete</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 22rem;">
            <img src="e.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="singleArticle.php" class="btn btn-primary">more</a>
              <a href="editForm.php" class="btn btn-success">edit</a>
              <a href="#" class="btn btn-danger">delete</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 22rem;">
            <img src="e.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="singleArticle.php" class="btn btn-primary">more</a>
              <a href="editForm.php" class="btn btn-success">edit</a>
              <a href="#" class="btn btn-danger">delete</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 22rem;">
            <img src="e.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="singleArticle.php" class="btn btn-primary">more</a>
              <a href="editForm.php" class="btn btn-success">edit</a>
              <a href="#" class="btn btn-danger">delete</a>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="card" style="width: 22rem;">
            <img src="e.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="singleArticle.php" class="btn btn-primary">more</a>
              <a href="editForm.php" class="btn btn-success">edit</a>
              <a href="#" class="btn btn-danger">delete</a>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>