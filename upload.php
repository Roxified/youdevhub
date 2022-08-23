<?php session_start();
// session_unset();
// session_destroy();

print_r($_SESSION);
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES['file_upload']['name']);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
// if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'gif' && $imageFileType != 'jpeg') {
//   echo "file is not an image";
// } else {
//   echo 'file is an image with ' . $imageFileType . " extension";
// }


  //check if file exist
  // if ($_FILES['file_upload']['size'] > 500000) {
  //   echo "file size exceeded";
  // } else {
  //   echo "Normal file range";
  // }


  //check to see if its actually an image
  // if (isset($_POST['upload'])) {
  //   $check = getimagesize($_FILES['file_upload']['tmp_name']);
  //   if ($check !== false) {
  //     echo "File is an image - " . $check["mime"] . ".";
  //     $uploadOk = 1;
  //   } else {
  //     echo "File is not an image.";
  //     $uploadOk = 0;
  //   }
  // }
