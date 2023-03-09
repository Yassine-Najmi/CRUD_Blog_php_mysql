<?php
include "connect.php";


// if (isset($_POST["submit"])) {
//   $titre = $_POST["titre"];
//   // $image = $_FILES["image"]["name"];
//   $content = $_POST["content"];
//   $date = $_POST["date"];
//   $categorie_id = $_POST["categorie_id"];

//   $sql = "INSERT INTO articles (titre, content, date, category_id) VALUES('$titre', '$content', '$date', '$categorie_id')";
//   $result = mysqli_query($con, $sql);

//   if ($result) {
//     echo "Data inserted successfully";
//     // header("location:index.php");:
//   } else {
//     echo "Error: " . $sql . "<br>" . die(mysqli_error($con));
//   }
// }


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
        $sql = "INSERT INTO articles (titre,image, content, date, category_id) VALUES('$titre','$new_img_name', '$content', '$date', '$categorie_id')";
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

?>




<!-- 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

$titre_article = $_POST["titre_article"];
$contenu_article = $_POST["contenu_article"];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO articles (titre, image, content, date, category_id)
  VALUES ('" . $titre_article . "','hhh.png', '" . $contenu_article . "', '2023-05-01', 1)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch (PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null; -->