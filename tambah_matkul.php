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

      form {
        padding: 30px;
        margin-top: 135px;
      }

      input[type="radio"] {
        width: 30px;
        height: 30px;
        vertical-align: middle;
      }
      .label-sem {
        font-size: 2em;
        font-weight: 600;
      }
      /* .sem {
        font-weight: 600;
        font-size: 1.5em;
        margin-left: 10px;
      } */

      #label-nama,
      #label-semester {
        display: block;
        font-weight: 600;
        font-size: 1.5em;
        margin-bottom: 5px;
      }

      #nama {
        background-color: whitesmoke;
        border: 1px solid #999;
        width: 100%;
        border-radius: 5px 20px 5px 20px;
        padding: 10px;
        font-weight: 500;
        margin-bottom: 20px;
      }

      #nomor {
        background-color: whitesmoke;
        border: 1px solid #999;
        width: 84%;
        border-radius: 0 20px 5px 0;
        padding: 10px;
        font-weight: 500;
      }

      #no62 {
        background-color: whitesmoke;
        float: left;
        border: 1px solid #999;
        font-size: 1.3em;
        font-weight: 600;
        margin: 0 5px 0 0;
        padding: 10px;
        border-radius: 0 0 0 20px;
      }
      
      #foto::-webkit-file-upload-button {
        visibility: hidden;
        position: absolute;
      }

      #foto::before {
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

      #btn-tambah {
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
      #btn-tambah:focus {
        background-color: #545381;
        box-shadow: none;
        transform: translate(0px, 10px);
      }

      .flex-container {
        /* background-color: red; */
        display: flex;
        flex-direction: row;
        flex-wrap: nowrap;
        justify-content: normal;
        align-items: center;
        align-content: center;
        text-align: center;
      }

      .flex-items:nth-child(1) {
        width: 50%;
        /* background-color: green; */
        display: block;
        flex-grow: 0;
        flex-shrink: 1;
        flex-basis: auto;
        align-self: center;
        order: 0;
      }

      .flex-items:nth-child(2) {
        /* background-color: blueviolet; */
        width: 50%;
        display: block;
        flex-grow: 0;
        flex-shrink: 1;
        flex-basis: auto;
        align-self: auto;
        order: 0;
      }
      .flex-items:nth-child(3) {
        /* background-color: blueviolet; */
        width: 50%;
        display: block;
        flex-grow: 0;
        flex-shrink: 1;
        flex-basis: auto;
        align-self: auto;
        order: 0;
      }
    }
  </style>
</head>
<body>
  <div id="main">
    <header>
      <img id="title-tambah" src="img/dosen_header.png" width="100%">
      <a id="back" href="matkulpage_admin.php"><img id="back-btn" src="img/back.png"></a>
      <p>Tambah Mata Kuliah</p>
    </header>
    <form action="" method="post" enctype="multipart/form-data">
      <label id="label-nama" for="nama">Mata Kuliah</label>
      <input type="text" name="nama" id="nama" required>

      <p id="label-semester">Semester</p>
      <div class="flex-container">
        <div class="flex-items">
          <p class="label-sem">
            <input type="radio" name="semester" id="semester" width="40px" required>&nbsp;1<br>
            <input type="radio" name="semester" id="semester" width="40px">&nbsp;2<br>
            <input type="radio" name="semester" id="semester" width="40px">&nbsp;3<br>
          </p>
        </div>
        <div class="flex-items">
          <p class="label-sem">
            <input type="radio" name="semester" id="semester" width="40px">&nbsp;4<br>
            <input type="radio" name="semester" id="semester" width="40px">&nbsp;5<br>
            <input type="radio" name="semester" id="semester" width="40px">&nbsp;6<br>
          </p>
        </div>
        <div class="flex-items">
          <p class="label-sem">
            <input type="radio" name="semester" id="semester" width="40px">&nbsp;7<br>
            <input type="radio" name="semester" id="semester" width="40px">&nbsp;8<br>
          </p>
        </div>
      </div>
      <button id="btn-tambah" type="submit" name="tambah" value="TAMBAH">Tambah</button>
    </form>
  </div>
</body>
</html>