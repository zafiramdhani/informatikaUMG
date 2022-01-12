<?php
  session_start();
  include_once("config.php");

  if (!isset($_SESSION['username'])) {
    header("Location: login_page.php");
  }

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  mysqli_query($conn2, "UPDATE sem7 SET nama_matkul='$nama' WHERE id_matkul='$id'");
  header("Location: sem_admin/s7.php");
?>