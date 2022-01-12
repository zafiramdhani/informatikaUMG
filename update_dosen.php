<?php
  session_start();
  include_once("config.php");
  if (!isset($_SESSION['username'])) {
    header("Location: login_page.php");
  }

  // Ketika tombol update ditekan
  if (isset($_POST['update'])) {
    // Tanpa update foto
    if (!isset($_FILES['foto']['tmp_name'])) {
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $nomor = $_POST['nomor'];
      mysqli_query($conn, "UPDATE dosen SET nama_dosen='$nama', nomor_wa='$nomor' WHERE id='$id' ");
      header("Location: dosenpage_admin.php");
      // Dengan update foto
    } else {
      $id = $_POST['id'];
      $nama = $_POST['nama'];
      $nomor = $_POST['nomor'];
      $file_name = $_FILES['foto']['name'];
      $file_size = $_FILES['foto']['size'];
      $file_type = $_FILES['foto']['type'];
      if ($file_size < 2048000 and ($file_type == 'image/jpeg' or $file_type == 'image/png')) {
        $image = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
        mysqli_query($conn, "UPDATE dosen SET nama_dosen='$nama', nomor_wa='$nomor', foto_dosen='$image', nama_foto='$file_name', tipe_foto='$file_type', ukuran_foto='$file_size' WHERE id='$id' ");
        header("Location: dosenpage_admin.php");
      } else {
        echo 'File tidak sesuai';
        header("Location: update_dosen.php");
      }
    }
    header("Location: dosenpage_admin.php");
  }

?>