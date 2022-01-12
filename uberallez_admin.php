<?php
  session_start();
  if (!isset($_SESSION['username'])) {
    header("Location: login_page.php");
  }

  include_once("config.php");

  $result = mysqli_query($conn, "SELECT * FROM uberallez");
  $uberallez = mysqli_fetch_array($result);
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
      
      #title-bagan {
        margin-top: 150px;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 2em;
        color: #474747;
        text-align: center;
      }
      
      #foto-uberallez {
        display: block;
        margin: 15px auto;
        width: 95%;
        box-shadow: 0 3px 20px rgba(0, 0, 0, .4);
      }
      
      #bagan-baru {margin-left: 20px;}

      label {
        display: block;
        font-weight: 600;
        font-size: 1.5em;
        margin: 15px 0 3px 0;
      }

      #bagan::-webkit-file-upload-button {
        visibility: hidden;
        position: absolute;
      }

      #bagan::before {
        content: url('img/upload.png') ' Upload';
        color: whitesmoke;
        display: inline-block;
        background-color: #1f438d;
        border: 1px solid #999;
        border-radius: 5px 20px 5px 20px;
        padding: 10px 20px;
        margin-right: 5px;
        outline: none;
        white-space: nowrap;
        -webkit-user-select: none;
        cursor: pointer;
        font-weight: 400;
        font-size: 10pt;
      }

      #btn-update {
        border: none;
        display: block;
        margin: 30px auto;
        padding: 8px;
        width: 40%;
        border-radius: 50px;
        background-color: #2E2A72;
        color: #fff;
        font-size: 1.6em;
        letter-spacing: 2px;
        font-weight: 800;
        text-transform: uppercase;
        box-shadow: 0 7px 0px #16133b;
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
      <img id="title-dosen" src="img/dosen_header.png" width="100%">
      <a href="homepage_admin.php"><img id="back-btn" src="img/back.png"></a>
      <p>Uberallez</p>
    </header>
    <p id="title-bagan">info Uberallez</p>
    <!-- <img id="bagan-himatif" src="img/bgnhimatif.png"> -->
    <?= '<img id="foto-uberallez" src="data:image/png;base64, '.base64_encode($uberallez['foto_uberallez']).' ">'; ?>
    <form action="update_uberallez.php" method="post" enctype="multipart/form-data">
      <div id="bagan-baru">
        <input type="hidden" value="<?php echo $uberallez['id'];?>" name="id">
        <label for="bagan">Info baru</label>
        <input type="file" name="bagan" id="bagan" required>
        <button id="btn-update" type="submit" name="update">update</button>
      </div>
    </form>
  </div>
</body>
</html>