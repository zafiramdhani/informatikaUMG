<?php
  include_once("config.php");

  $id = $_GET['id'];
  $result = mysqli_query($conn, "DELETE FROM dosen WHERE id=$id");
  header("Location: dosenpage_admin.php");
?>