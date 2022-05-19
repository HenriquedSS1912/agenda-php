<?php

    $host = "myhost";
    $dbname = "mydb";
    $user = "";
    $password = "";

    try{
        $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);

        //Activate error mode
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        //connection error
        $error = $e->getMessage();
        echo "Erro: $error";
    }


?>
