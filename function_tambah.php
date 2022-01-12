<?php
  session_start();
  include("config.php");

  if (isset($_POST['tambah'])) {
    if (!isset($_FILES['foto']['tmp_name'])) {
      echo 'Pilih file';
    } else {
      $file_name = $_FILES['foto']['name'];
      $file_size = $_FILES['foto']['size'];
      $file_type = $_FILES['foto']['type'];

      if ($file_size < 2048000 and ($file_type == 'image/jpeg' or $file_type == 'image/png')) {
        $image = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        $namadsn = $_POST['nama'];
        $nomorwa = $_POST['nomor'];
        mysqli_query($conn, "INSERT INTO dosen VALUES('', '$namadsn', '$image', '$file_name', '$file_type', '$file_size', '$nomorwa')");
        header("Location: dosenpage_admin.php");
      } else {
        echo 'File tidak sesuai';
      }
    }
  }

  // $namadsn = $_POST['nama'];
  // $nomorwa = $_POST['nomor'];
  // mysqli_query($conn, "INSERT INTO dosen VALUES('', '$namadsn', '', '$nomorwa')");

  // header("Location: dosenpage_admin.php");

?>