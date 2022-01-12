<?php
  session_start();
  include_once("config.php");

  if (!isset($_SESSION['username'])) {
    header("Location: login_page.php");
  }
  
  $id = $_GET['id_matkul'];
  $result = mysqli_query($conn2, "SELECT * FROM sem7 WHERE id_matkul = $id");
  $matkul = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    html {font-size: 10px;}

    @media only screen and (max-width: 600px) {
      body {
        background-color: #aaa9d5;
      }

      header {
        overflow: hidden;
        position: fixed;
        top: 0;
      }

      header p {
        font-size: 2.5em;
        font-weight: 700;
        display: block;
        position: absolute;
        top: 50px;
        left: 70px;
        color: whitesmoke;
      }

      #back-btn {
        display: block;
        position: absolute;
        top: 43px;
        left: 10px;
        width: 50px;
      }

      form {padding: 30px; margin-top: 130px;}

      label {
        display: block;
        font-weight: 600;
        font-size: 1.5em;
        margin: 15px 0 3px 0;
      }

      hr {margin-top: 20px;}

      #nama {
        background-color: whitesmoke;
        border: 1px solid #999;
        width: 100%;
        border-radius: 5px 20px 5px 20px;
        padding: 10px;
        font-weight: 500;
      }

      #btn-update {
        border: none;
        display: block;
        margin: 40px auto;
        padding: 8px;
        width: 50%;
        border-radius: 50px;
        background-color: #2E2A72;
        color: #fff;
        font-size: 2em;
        letter-spacing: 2px;
        font-weight: 800;
        text-transform: uppercase;
        box-shadow: 0px 7px 0px #16133b;
      }
      #btn-update:focus {
        background-color: #545381;
        box-shadow: none;
        transform: translate(0px, 10px);
      }

    }
  </style>
</head>
<body>
  <div id="main">
    <header>
      <img id="title-edit" src="img/dosen_header.png" width="100%">
      <a id="back" href="sem_admin/s7.php"><img id="back-btn" src="img/back.png"></a>
      <p>Edit Matkul</p>
    </header>
    <form method="post" action="update_matkul7.php">
      <input type="hidden" value="<?php echo $matkul['id_matkul'];?>" name="id">
      <label for="nama">Mata Kuliah</label>
      <input type="text" name="nama" id="nama" value="<?php echo $matkul['nama_matkul'];?>">
      <button id="btn-update" type="submit" name="update">update</button>
    </form>
  </div>
</body>
</html>