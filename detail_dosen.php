<?php
  include('config.php');
  
  if(isset($_POST['custId'])){
    $id = $_POST['custId'];
    
    $sql = "SELECT * FROM dosen WHERE id=".$id;
    $result = mysqli_query($conn,$sql);
    
    // $response = "<table border='0' width='100%'>";
    // while( $dosen = mysqli_fetch_array($result) ){
    //   $id = $dosen['id'];
    //   $nama = $dosen['nama_dosen'];
    //   $foto = $dosen['foto_dosen'];
    //   $nomor = $dosen['nomor_wa'];
      
    //   $response .= "<tr>";
    //   $response .= "<td>".$nama."</td>";
    //   $response .= "</tr>";
      
    //   $response .= "<tr>";
    //   $response .= '<img src="data:image/png;base64, '.base64_encode($foto).' ">';
    //   $response .= "</tr>";

    //   $response .= "<tr>";
    //   $response .= "<td>+62".$nomor."</td>";
    //   $response .= "</tr>";
    // }
    // $response .= "</table>";

    $response = "<div>";
    while( $dosen = mysqli_fetch_array($result) ){
      $id = $dosen['id'];
      $nama = $dosen['nama_dosen'];
      $foto = $dosen['foto_dosen'];
      $nomor = $dosen['nomor_wa'];
      
      $response .= '<img src="data:image/png;base64, '.base64_encode($foto).' ">';
      
      $response .= "<p>".$nama."</p>";

      $response .= "<p>+62".$nomor."</p>";
    }
    $response .= "</div>";
      
      echo $response;
    exit;
  }
?>