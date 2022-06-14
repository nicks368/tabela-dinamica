<?php
   require '../conexao/aluno.php';

function listarAluno(){
        require "../conexao/conexao.php";

        $consulta = "SELECT * FROM tb_pw_aluno"; 

        //criando statament ou query
            $stmt_listar = $conexao->prepare($consulta);
    
        //executando a instrução 
            $stmt_listar->execute();
    
        $listaAlunos = [];
        
        //retorna uma lista de objetos 
            while($registro = $stmt_listar->fetch(PDO::FETCH_OBJ)) {
                $aluno = new Aluno ($registro->matricula,  $registro->nomeAluno,  $registro->nota1, $registro->nota2, $registro->nota3);
                $array[] = $aluno;
            }       
        $passagem = json_encode($array[]);
        
        echo $passagem;
    }

    listarAluno();

?>