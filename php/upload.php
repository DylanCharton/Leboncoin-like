<!DOCTYPE html>

<html>

<head>

  <title>Upload</title>

</head>

<body>

<form method="post" enctype="multipart/form-data">
  Selectionner une image a Télécharger :
  <input type="file" name="upload" id="upload" accept=".png,.gif,.jpg" required>
  <input type="submit" name="submit" id="submit" value="Upload">
</form>

<!--SAVE IMAGE INTO DATABASE-->

<?php

if (isset($_FILES['upload'])) {
  try{
    require_once "class/Database.php";
    $bdd = new Database();
    $stmt = $bdd->connect()->prepare("INSERT INTO photos (name_photo, data_photo) VALUES (? , ?) ");
    $stmt->execute([$_FILES['upload']['name'], file_get_contents($_FILES['upload']['tmp_name'])]);
    echo "OK";

  }catch (Exception $ex) {

    echo $ex->getMessage();

  }
}

?>

<?php

  if (isset($_POST['submit']) && isset($_FILES['upload'])) {

    // echo "<pre>";
    // print_r($_FILES['upload']);
    // echo "</pre>";

    $img_name = $_FILES['upload']['name'];
    $img_size = $_FILES['upload']['size'];
    $tmp_name = $_FILES['upload']['tmp_name'];
    $error = $_FILES['upload']['error'];

    if ($error === 0) {

      if ($img_size > 100000000) {

        $em = "Désoler, votre image est trop lourdes";
        header("Location: ../upload.php?error=$em");

      }else {

        $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
        $img_ex_lc = strtolower($img_ex);
        $allowed_exs = array("jpg", "jpeg", "png");

        if (in_array($img_ex_lc, $allowed_exs)) {

          $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
          $img_upload_path = 'uploads/'.$new_img_name;
          move_uploaded_file($tmp_name, $img_upload_path);

          
        }else {

          $em = "You can't upload files of this type";
          header("Location: ../index.php?error=$em");

        }

      }

    }else {

      $em = "unknown error occurred";
      header("Location: ../index.php?error=$em");

    }

  }else {

    // header("Location: ../index.php");

  }

?>

</body>

</html>