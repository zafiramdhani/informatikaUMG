<?php

$SERVER = "localhost";
$USER = "root";
$PASSWORD = "";
$NAMA_DB = "mp_kel7";
$NAMA_DB2 = "mp_kel7_matkul";

$conn = mysqli_connect($SERVER, $USER, $PASSWORD, $NAMA_DB);

$conn2 = mysqli_connect($SERVER, $USER, $PASSWORD, $NAMA_DB2);

if(!$conn){
  die("Gagal terhubung " . mysqli_connect_error());
}

?>