<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' type='text/javascript'></script>
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

      #btn-bagan {
        position: absolute;
        top: 60px;
        right: 30px;
        width: 25px;
      }

      #title-list {
        margin-top: 160px;
        text-transform: uppercase;
        font-weight: 700;
        font-size: 2em;
        color: #474747;
        text-align: center;
      }

      #flex-container {padding: 10px;}

      a {
        text-decoration: none;
        color: #000;
      }

      #list-dosen {
        display: grid;
        /* grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr); */
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: 1fr;
        grid-column-gap: 0px;
        grid-row-gap: 0px;
        padding: 0 20px 20px 20px;
        text-align: center;
      }

      #dosen {
        grid-area: 1 / 1 / 2 / 2;
        background-color: #fff;
        border-radius: 20px;
      }

      #flex-items:nth-child(1) {
        display: block;
        background-color: #f6f6f6;
        font-size: 1.2em;
        box-shadow: 0px 3px 8px #444;
        border-radius: 20px;
        padding: 10px;
        flex-basis: 140px;
        flex-grow: 0;
        flex-shrink: 0;
      }
      #flex-items:nth-child(2) {
        display: block;
        background-color: #f6f6f6;
        font-size: 1.2em;
        box-shadow: 0px 3px 8px #444;
        border-radius: 20px;
        padding: 10px;
        flex-basis: 140px;
        flex-grow: 0;
        flex-shrink: 0;
      }

      .modal-dialog {
        width: 100%;
        position:fixed;
        margin: auto;
        bottom:0;
      }
      
    }
  </style>
</head>
<body>
  <div id="main">
    <header>
      <a href="bagandosen.html"><img id="btn-bagan" src="img/info.png"></a>
      <img id="title-dosen" src="img/dosen_header.png" width="100%">
      <a id="back" href="homepage_client.php"><img id="back-btn" src="img/back.png"></a>
      <p>Dosen</p>
    </header>
    <p id="title-list">list dosen</p>
    <div id="list-dosen">
      <?php
        $read = "SELECT * FROM dosen";
        $query = mysqli_query($conn, $read);
        while($dosen = mysqli_fetch_array($query)){
          $id = $dosen['id'];
          $nama = $dosen['nama_dosen'];
          $foto = $dosen['foto_dosen'];
        ?>
          <div id="flex-container">
            <!-- <a id="detail-dosen" href=""> -->
              <div id="flex-items">
                <?='<img src="data:image/png;base64, '.base64_encode($foto).' ">'; ?>
                <?= "<p> ".$nama." </p>" ?>
                <?= "<button data-id='".$id."' class='btn btn-info btn-sm btn-popup'>Detail</button>" ?>
              </div>
            <!-- </a> -->
          </div>
      <?php
        }
      ?>

      <!-- Modal -->
      <div class="modal fade" id="custModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Dosen</h4>
              <!-- <button type="button" class="close" data-dismiss="modal">??</button> -->
            </div>
            <div class="modal-body" 
                  style="font-weight: 800;
                        font-size: 1.5em;">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size: 30px;">&times;</button>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal ends -->

    </div>
  </div>


  <script type="text/javascript">
    $(document).ready(function () {
      $('.btn-popup').click(function () {
        var custId = $(this).data('id');
        $.ajax({
          url: 'detail_dosen.php',
          type: 'post',
          data: { custId: custId },
          success: function (response) {
            $('.modal-body').html(response);
            $('#custModal').modal('show');
          }
        });
      });
    });
  </script>
</body>
</html>