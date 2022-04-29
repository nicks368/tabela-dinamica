<?php
    //data source name
    //drive - 
    $DSN = "mysql:host=fdb25.awardspace.net;dbname=3451164_crud;charset=utf8";
    $usuario = "3451164_crud";
    $senha = "Nikolas2005";
    
    //tratamento erro
    
    try {
        //classe pdo conexão
        
        $conexao = new PDO($DSN, $usuario, $senha);
        //echo "conectado com sucesso";
        
    } catch(PDOException $erro) {
        echo $erro-> getMessage();
        exit;
      }
?>