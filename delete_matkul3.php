<?php
  session_start();
  include_once("config.php");

  $id = $_GET['id_matkul'];
  $result = mysqli_query($conn2, "DELETE FROM sem3 WHERE id_matkul=$id");
  header("Location: sem_admin/s3.php");

?>