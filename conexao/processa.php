<?php
    require "./controler.php";
    session_start();
    
    $matric = $_POST['matricula'];
    $nome = $_POST['nome'];
    $n1 = $_POST['nota1'];
    $n2 = $_POST['nota2'];
    $n3 = $_POST['nota3'];
    
     if (empty($matric) or empty($nome) or empty($n1) or empty($n2) or empty($n3)) {
        
        $_SESSION['mensagem'] = "Preencha todos os campos!";
        header("Location: ../index.php");

    }else {

        incluirAluno($matric ,$nome, $n1,$n2,$n3);
    }
    
?>