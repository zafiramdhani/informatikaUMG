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
      
      #header {
        background-image: url("img/bg-header.png");
        background-size: cover;
        /* background-color: #263780; */
        color: whitesmoke;
        padding: 30% 35px 55px 35px;
        border-radius: 0 0 25px 25px;
        box-shadow: 0 3px 15px #444;
      }

      #header h1 {
        font-size: 3.5em;
        font-weight: 700;
        letter-spacing: 1px;
      }
      #header h4 {
        position: relative;
        top: -10px;
        font-size: 2.3em;
        font-weight: 600;
        letter-spacing: 2px;
      }
      #header h5 {
        letter-spacing: 1px;
        color: #aaa9d5;
        font-size: 1.3em;
        font-weight: 400;
      }

      #btn-info {
        position: absolute;
        right: 30px;
        top: 60px;
      }

      #teks-info {
        text-transform: uppercase;
        font-weight: 700;
        font-size: 2em;
        color: #474747;
        margin-top: 30px;
        text-align: center;
      }

      #info {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 4px;
        padding: 20px;
        text-align: center;
      }
      #dosen { grid-area: 1 / 1 / 2 / 2; }
      #matakuliah { grid-area: 1 / 2 / 2 / 3; }
      #uberallez { grid-area: 2 / 1 / 3 / 2; }
      #himatif { grid-area: 2 / 2 / 3 / 3; }
    }
  </style>
</head>
<body>
  <div id="main">
    <header id="header">
      <?php echo "<h1>Welcome, " .$_SESSION['username']. "!" . "</h1>"; ?>
      <h4>Teknik Informatika</h4>
      <h5>Universitas Muhammadiyah Gresik</h5>
      <a id="btn-info" href="logout.php"><img src="img/logout.png" width="22px"></a>
    </header>
    <p id="teks-info">admin</p>
    <div id="info">
      <div id="dosen">
        <a href="dosenpage_admin.php"><img src="img/dosen.png" width="100%"></a>
      </div>
      <div id="matakuliah">
        <a href="matkulpage_admin.php"><img src="img/matkul.png" width="100%"></a>
      </div>
      <div id="uberallez">
        <a href="uberallez_admin.php"><img src="img/uberallez.png" width="100%"></a>
      </div>
      <div id="himatif">
        <a href="himatif_admin.php"><div id="himatif"><img src="img/himatif.png" width="100%"></a>
      </div>
    </div>
  </div>
</body>
</html>