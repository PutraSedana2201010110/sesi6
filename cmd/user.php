<?php
    include("database/koneksi.php");

    function createuser($nama,$email,$user,$pass){

        $stt = false;
        $iduser = md5($user);
        $sql = "INSERT INTO tbuser(nama, email, username, passkey, iduser)
        VALUES(
            '$nama',
            '$email',
            '$user',
            '$pass',
            '$iduser'

        )";
        echo "DEBUG: ".$sql;
        return $stt;
    }