<?php 
    $hostname = "localhost";
    $database = "to_do_list";
    $username = "root";
    $password = "";

    try{
        $pdo = new PDO("mysql:host=$hostname;dbname=$database", $username, $password);
    }catch(PDOException $erro){
        echo "Erro: " . $erro->getMessage();
        die("Erro de conexão: " . $erro->getMessage());
    }


?>