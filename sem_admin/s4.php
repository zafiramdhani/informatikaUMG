<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header("Location: login_page.php");
  }

  include_once("/xampp/htdocs/KULIAH/MOBILEPROGRAMMING3/config.php");

  // TAMBAH MATKUL
  if (isset($_POST['tambah'])) {
    $tambahmatkul = $_POST['tambah-matkul'];
    mysqli_query($conn2, "INSERT INTO sem4 VALUES ('', '$tambahmatkul')");
    header("Location: s4.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
  <style>
    header {z-index: 2;}
    #menu {
      position: relative;
      padding-top: 10px;
    }
    
    #edit {margin-left: 27%;}
    #hapus {margin-left: 27%;}

    #list-container {
      margin-top: 160px;
    }

    #form-tambah {
      width: 95%;
      box-shadow: 0 2px 7px #444;
      background-color: whitesmoke;
      padding: 10px;
      border-radius: 10px;
      color: #444;
      font-size: 1.5em;
      text-align: center;
      margin-bottom: 20px;
    }

    #tambah-matkul {
      background-color: whitesmoke;
      border: 2px solid #999;
      width: 100%;
      border-radius: 5px 20px 5px 20px;
      padding: 10px;
      font-weight: 500;
    }

    #btn-tambah {
      border: none;
      display: block;
      margin: 10px auto;
      padding: 8px;
      width: 50%;
      border-radius: 50px;
      background-color: #2E2A72;
      color: #fff;
      font-size: 1.2em;
      letter-spacing: 2px;
      font-weight: 800;
      text-transform: uppercase;
      box-shadow: 0px 7px 0px #16133b;
    }
    #btn-tambah:focus {
      background-color: #545381;
      box-shadow: none;
      transform: translate(0px, 10px);
    }

  </style>
</head>

<body>
  <div id="main">
    <header>
      <img id="title-dosen" src="/KULIAH/MOBILEPROGRAMMING3/img/dosen_header.png" width="100%">
      <a href="/KULIAH/MOBILEPROGRAMMING3/matkulpage_admin.php"><img id="back-btn" src="/KULIAH/MOBILEPROGRAMMING3/img/back.png"></a>
      <p>Semester 4</p>
    </header>

    <div id="list-container">
      <div id="form-tambah">
        <form action="" method="post">
          <input type="text" name="tambah-matkul" id="tambah-matkul" required>
          <button id="btn-tambah" type="submit" name="tambah">Tambah</button>
        </form>
      </div>
      <?php
        $read = "SELECT * FROM sem4";
        $query = mysqli_query($conn2, $read);
        while($matkul = mysqli_fetch_array($query)){
      ?>
        <div id="list-matkul">
          <?= $matkul['nama_matkul'] ?>
          <div id="menu">
            <?= "<a href='/KULIAH/MOBILEPROGRAMMING3/edit_matkul4.php?id_matkul=$matkul[id_matkul]'><img id='edit' src='/KULIAH/MOBILEPROGRAMMING3/img/edit.png' width='30px'></a>" ?>
            <?= "<a href='/KULIAH/MOBILEPROGRAMMING3/delete_matkul4.php?id_matkul=$matkul[id_matkul]'><img id='hapus' src='/KULIAH/MOBILEPROGRAMMING3/img/delete.png' width='30px'></a>" ?>
          </div>
        </div>
      <?php  
        }
      ?>
    </div>
  </div>
</body>
</html>