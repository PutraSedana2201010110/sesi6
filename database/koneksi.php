<?php
    include("konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME,DBPORT)or die("Error");
    /*
    if($cnn){
        echo "Koneksi ke DBMS Mysql Sukses";
    }else{
        echo "Koneksi ke DBMS Mysql Gagal";
    }
    mysqli_close($cnn);
    */