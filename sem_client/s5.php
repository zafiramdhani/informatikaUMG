<?php
include_once("/xampp/htdocs/KULIAH/MOBILEPROGRAMMING3/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="main">
    <header>
      <img id="title-dosen" src="/KULIAH/MOBILEPROGRAMMING3/img/dosen_header.png" width="100%">
      <a href="/KULIAH/MOBILEPROGRAMMING3/matkulpage_client.php"><img id="back-btn" src="/KULIAH/MOBILEPROGRAMMING3/img/back.png"></a>
      <p>Semester 5</p>
    </header>
    <div id="list-container">
      <?php
        $read = "SELECT * FROM sem5";
        $query = mysqli_query($conn2, $read);
        while($matkul = mysqli_fetch_array($query)){
      ?>
        <div id="list-matkul"><a href=""><?php echo $matkul['nama_matkul'] ?></a></div>
      <?php  
        }
      ?>
    </div>
  </div>
</body>
</html>