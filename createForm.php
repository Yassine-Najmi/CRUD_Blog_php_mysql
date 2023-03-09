<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add article</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

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


  <section>
    <div class="container">
      <div class="row justify-content-center align-items-center g-2 mb-5 mx-5">
        <?php if (isset($_GET["error"])) : ?>
          <p><?php echo $_GET["error"];
            endif ?></p>

          <form action="insert.php" method="POST" enctype="multipart/form-data">

            <div class="col-12">
              <h2>Créer un article</h2>
            </div>
            <div class="col-12">
              <div class="mb-3">
                <label for="formFile" class="form-label">Image principle</label>
                <br>
                <input type="file" name="image">
                <!-- <input class="form-control" type="file" id="formFile" name="image"> -->
              </div>
              <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" name="titre" class="form-control" id="exampleFormControlInput1">
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Contenu</label>
                <textarea name="content" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
              </div>
              <div class="mb-3">
                <p class="p-date">Date</p>
                <input type="date" name="date">
              </div>
              <div class="mb-5">
                <p class="cat">Categorie</p>
                <!-- <input list="categorie" name="categorie_id" id="cat"> -->

                <select name="categorie_id" id="cat" class="form-control">
                  <!-- <option value="ma">Maroc</option> -->
                  <?php
                  include "connect.php";

                  $sql = "SELECT * FROM categories";

                  $result = mysqli_query($con, $sql);



                  if ($result) {
                    while ($cat = mysqli_fetch_assoc($result)) {
                      $id = $cat["id"];
                      $nom = $cat["nom"];
                      echo "<option value=\"$id\">$nom</option>";
                    }
                  }
                  // endif;
                  ?>
                </select>
              </div>
              <!-- <input type="time" name="time"> -->
              <input class="btn btn-primary" type="submit" value="Enregistrer" name="submit">
            </div>
            <!-- <div class="col">Column</div> -->
          </form>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>