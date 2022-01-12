<?php
  include 'config.php';
  error_reporting(0);
  session_start();
  
  if (isset($_SESSION['username'])) {
    header("Location: homepage_admin.php");
  }
  
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
      $row = mysqli_fetch_assoc($result);
      $_SESSION['username'] = $row['username'];
      header("Location: homepage_admin.php");
    } else {
      echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
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
        background-color: #263780;
      }

      #back-btn {
        display: block;
        position: absolute;
        top: 43px;
        left: 10px;
        width: 50px;
      }

      #admin-login {
        display: flex;
        flex-direction: column;
        align-items: center;
        color: whitesmoke;
      }

      #teks-admin-login {
        margin: 50% 0 0 0;
        margin-bottom: 20px;
        font-size: 3.5em;
      }

      #username {
        border: none;
        display: block;
        border-radius: 30px;
        padding: 15px;
        margin: 30px 0 15px 0;
        font-weight: 500;
      }

      #email {
        border: none;
        display: block;
        border-radius: 30px;
        padding: 15px;
        margin: 0px 0 15px 0;
        font-weight: 500;
      }
      
      #password {
        border: none;
        border-radius: 30px;
        padding: 15px;
        margin-bottom: 30px;
        font-weight: 500;
      }

      ::placeholder {
        font-weight: 400;
        color: gray;
      }

      #btn-login {
        border: none;
        display: block;
        margin: auto;
        padding: 8px;
        width: 60%;
        border-radius: 50px;
        background-color: #aaa9d5;
        color: #fff;
        font-size: 2.3em;
        letter-spacing: 2px;
        font-weight: 800;
        text-transform: uppercase;
        box-shadow: 0px 10px 0px #6562b3;
      }
      #btn-login:focus {
        background-color: #545381;
        box-shadow: none;
        transform: translate(0px, 10px);
      }
      
      #lupa-password {
        letter-spacing: 1px;
        text-decoration: none;
        display: block;
        margin: 50px 0 0px 0;
        text-align: center;
        color: whitesmoke;
        font-size: 1.1em;
      }

      #div-login-gagal {
        width: 40%;
        background-color: rgb(128, 128, 128, 0.7);
        text-align: center;
        padding: 15px;
        border-radius: 50px;
        margin-top: 20px;
        opacity: 0;
      }
      #login-gagal {
        font-size: 1.4em;
        letter-spacing: 1px;
      }
    }
  </style>
</head>
<body>
  <div id="admin-login">
    <a href="index.html"><img id="back-btn" src="img/back.png"></a>
    <h1 id="teks-admin-login">Admin Login</h1>
    <form action="" method="post" id="form-group">
      <input type="text" name="username" id="username" size="35" placeholder="Username" required>
      <input type="email" name="email" id="email" size="35" placeholder="Email" required>
      <input type="password" name="password" id="password" size="35" placeholder="Password" required>
      <button id="btn-login" type="submit" name="submit">log in</button>
    </form>
    <!-- <?php if(isset($error)) : ?>
      <div id="div-login-gagal">
        <p  id="login-gagal">Login Gagal</p>
      </div>
    <?php endif; ?> -->
  </div>
</body>
</html>