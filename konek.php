<?php

 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "tugas_14";

 $conn = mysqli_connect($host,$user,$pass,$db);

 if ($conn == false)
 {
 echo "Koneksi ke server gagal.";
 die();
 }

 ?>