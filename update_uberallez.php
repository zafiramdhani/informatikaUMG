<?php
  session_start();
  include_once("config.php");
  if (!isset($_SESSION['username'])) {
    header("Location: login_page.php");
  }

  if (isset($_POST['update'])) {
    if (isset($_FILES['bagan']['tmp_name'])) {
      $id = $_POST['id'];
      $file_name = $_FILES['bagan']['name'];
      $file_size = $_FILES['bagan']['size'];
      $file_type = $_FILES['bagan']['type'];
      $image = addslashes(file_get_contents($_FILES['bagan']['tmp_name']));
      mysqli_query($conn, "UPDATE uberallez SET foto_uberallez='$image', nama_file='$file_name', tipe_file='$file_type', ukuran_file='$file_size' WHERE id='$id' ");
      header("Location: uberallez_admin.php");
    }
  }

?>