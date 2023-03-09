<?php
include "connect.php";

$id = $_GET["updateid"];

$sql = "SELECT * FROM articles WHERE id = $id";
$result = mysqli_query($con, $sql);
$card = mysqli_fetch_assoc($result);
$titre = $card["titre"];
$image = $card["image"];
$content = $card["content"];
$date = $card["date"];
// $categorie_id = $card["categorie_id"];

if (isset($_POST["submit"])) {
  $titre = $_POST["titre"];
  // $image = $_FILES["image"]["name"];
  $content = $_POST["content"];
  $date = $_POST["date"];
  $categorie_id = $_POST["categorie_id"];
  echo "<pre>";
  print_r($_FILES['image']);
  echo "</pre>";

  $img_name = $_FILES["image"]["name"];
  $img_size = $_FILES["image"]["size"];
  $tmp_name = $_FILES["image"]["tmp_name"];
  $error = $_FILES["image"]["error"];

  if ($error === 0) {
    if ($img_size > 925000) {
      $em = "Sorry, your file is too large.";
      header("location: index.php?error=$em");
    } else {
      $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
      $img_ex_lc = strtolower($img_ex);

      $allowed_exs = array("jpg", "jpeg", "png");

      if (in_array($img_ex_lc, $allowed_exs)) {
        $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
        $img_upload_path = "uploads/" . $new_img_name;
        move_uploaded_file($tmp_name, $img_upload_path);

        // Insert into Database
        $sql = "UPDATE articles SET id = $id, titre='$titre', image='$new_img_name', content='$content', date='$date', category_id = $categorie_id WHERE id = $id";
        // $sql = "INSERT INTO articles(image) VALUES('$new_img_name') WHERE category_id = $categorie_id";
        mysqli_query($con, $sql);
        header("location: index.php");
      } else {
        $em = "You can't upload files of this type";
        header("location: index.php?error=$em");
      }
    }
  } else {
    $em = "unknown error occurred";
    header("location: index.php?error=$em");
  }
} else {
  mysqli_error($con);
  // header("location: index.php");
}
// $sql = "UPDATE articles SET id = $id, titre='$titre', image='$image', content='$content', date='$date', category_id = $categorie_id WHERE id = $id";
?>

<!doctype html>
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
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add article</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>


  <section>
    <div class="container">
      <div class="row justify-content-center align-items-center g-2 mb-5 mx-5">
        <form method="POST">

          <div class="col-12">
            <h2>Modifer l'article</h2>
          </div>
          <div class="col-12">
            <div class="mb-3">
              <label for="formFile" class="form-label">Image principle</label>
              <input class="form-control" type="file" id="formFile" name="image" value=>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Title</label>
              <input type="text" name="titre" class="form-control" value=<?php echo $titre ?>>
            </div>
            <div class="mb-3">
              <label for="exampleFormControlTextarea1" class="form-label">Contenu</label>
              <textarea name="content" class="form-control" value=<?php echo $content ?> rows="10"></textarea>
            </div>
            <div class="mb-3">
              <p class="p-date">Date</p>
              <input type="date" name="date" value=<?php echo $date ?>>
            </div>
            <div class="mb-5">
              <p class="cat">Categorie</p>
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
                ?>
              </select>
            </div>
            <input class="btn btn-primary" type="submit" value="Enregistrer" name="submit">
            <!-- <button type="submit" class="btn btn-primary" name="submit"></button>  -->
        </form>
        <!-- <div class="col">Column</div> -->
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>