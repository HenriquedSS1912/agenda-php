<?php

    $host = "127.0.0.1:3306";
    $dbname = "agenda";
    $user = "root";
    $password = "Santos@2807";

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