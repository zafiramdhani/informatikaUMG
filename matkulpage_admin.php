<?php
  session_start();

  if (!isset($_SESSION['username'])) {
      header("Location: login_page.php");
  }

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

      #title-list {
        text-transform: uppercase;
        font-weight: 700;
        font-size: 2em;
        color: #474747;
        text-align: center;
        margin-top: 160px;
      }

      #list-container {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(4, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        padding: 10px 30px 30px 30px;
        text-align: center;
      }

      #sem1 { grid-area: 1 / 1 / 2 / 2; }
      #sem2 { grid-area: 1 / 2 / 2 / 3; }
      #sem3 { grid-area: 2 / 1 / 3 / 2; }
      #sem4 { grid-area: 2 / 2 / 3 / 3; }
      #sem5 { grid-area: 3 / 1 / 4 / 2; }
      #sem6 { grid-area: 3 / 2 / 4 / 3; }
      #sem7 { grid-area: 4 / 1 / 5 / 2; }
      #sem8 { grid-area: 4 / 2 / 5 / 3; }
    }
  </style>
</head>
<body>
  <div id="main">
    <header>
      <img id="title-dosen" src="img/dosen_header.png" width="100%">
      <a href="homepage_admin.php"><img id="back-btn" src="img/back.png"></a>
      <p>Mata Kuliah</p>
    </header>
    <p id="title-list">semester</p>
    <div id="list-container">
      <div id="sem1"><a href="sem_admin/s1.php"><img src="img/sem1.png" width="90%"></a></div>
      <div id="sem2"><a href="sem_admin/s2.php"><img src="img/sem 2.png" width="90%"></a></div>
      <div id="sem3"><a href="sem_admin/s3.php"><img src="img/sem 3.png" width="90%"></a></div>
      <div id="sem4"><a href="sem_admin/s4.php"><img src="img/sem 4.png" width="90%"></a></div>
      <div id="sem5"><a href="sem_admin/s5.php"><img src="img/sem 5.png" width="90%"></a></div>
      <div id="sem6"><a href="sem_admin/s6.php"><img src="img/sem 6.png" width="90%"></a></div>
      <div id="sem7"><a href="sem_admin/s7.php"><img src="img/sem 7.png" width="90%"></a></div>
      <div id="sem8"><a href="sem_admin/s8.php"><img src="img/sem 8.png" width="90%"></a></div>
    </div>
  </div>
</body>
</html>