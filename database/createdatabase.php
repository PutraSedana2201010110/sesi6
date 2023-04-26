<?php
    include("../konfigurasi.php");

    $cnn = mysqli_connect(DBHOST,DBUSER,DBPASS);
    if($cnn){
        $sql = "CREATE DATABASE ". DBNAME;
        $hsl = mysqli_query($cnn, $sql);
        if($hsl){
            echo "Database". DBNAME . "BERHASIL DIBUAT";
        }else{
            echo "Database". DBNAME . "GAGAL DIBUAT";
        }
    }else{
        echo "Koneksi ke DBMS Mysql Gagal";
    }
    mysqli_close($cnn);