<?php
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

      #title-info {
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
    }
  </style>
</head>
<body>
  <div id="main">
    <header>
      <img id="title-uberallez" src="img/dosen_header.png" width="100%">
      <a href="homepage_client.php"><img id="back-btn" src="img/back.png"></a>
      <p>Uberallez</p>
    </header>
    <p id="title-info">info uberallez</p>
    <?= '<img id="foto-uberallez" src="data:image/png;base64, '.base64_encode($uberallez['foto_uberallez']).' ">'; ?>
  </div>
</body>
</html>