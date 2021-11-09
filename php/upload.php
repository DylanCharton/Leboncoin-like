<?php

require_once("../class/Database.php");
$bdd = new Database();

?>

<?php 

  if(isset($_POST['upload'])) {
    // $toto = $_FILES['files']['name'];

  // Count total files
  $countfiles = count($_FILES['files']['name']);
  
  // Prepared statement
  $query = "INSERT INTO photos (name_photo,image) VALUES(?,?)";
  $stmt = $bdd->connect()->prepare($query);

  for($i = 0; $i < $countfiles; $i++) {
   
    // File name
    $filename = $_FILES['files']['name'][$i];
   
    // Location
    $target_file = '../uploads/'.$filename;
   
    // file extension
    $file_extension = pathinfo(
        $target_file, PATHINFO_EXTENSION);
          
    $file_extension = strtolower($file_extension);
   
    // Valid image extension
    $valid_extension = array("png","jpeg","jpg");
   
    if(in_array($file_extension, $valid_extension)) {

        // Upload file
        if(move_uploaded_file(
            $_FILES['files']['tmp_name'][$i],
            $target_file)
        ) {

            // Execute query
            $stmt->execute(
                array($filename,$target_file));
        }
    }
}
  
echo "File upload successfully";

var_dump($countfiles);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data" class="d-flex flex-column mt-5" id="create-ad-form">

  <input type="file" name="files[]" id="image-uploader" multiple accept=".png, .jpeg, .jpg">

  <input type="submit" value="Envoyez" name="upload">

</form>
</body>
</html>









