<?php
    //require "./aluno.php";
    //require "./conexao.php";
    //require "./processa.php";

    /*$aluno1 = new Aluno();
    $aluno1 -> matricula = $matricula;
    $aluno1 -> nome = $nome;
    $aluno1 -> nota1 = $nota1;
    $aluno1 -> nota2 = $nota2;
    $aluno1 -> nota3 = $nota3;
    $aluno1 -> media = ($nota1 + $nota2 + $nota3)/3;
   
    $listaAlunos = [$aluno1];
   
    $json = json_encode($listaAlunos);

    var_dump($json);*/



    function incluirAluno($matricula, $nome, $nota1, $nota2, $nota3) {
        session_start();
        require "./conexao.php";

        $consulta = "SELECT * FROM 2022_tb_aluno WHERE matricula = :Matricula"; 
        // prepara a instrução SQL para receber uma variavel no momento de execução 
        $consulta = $conexao->prepare($consulta);
    
        // faz o vinculo entre uma variavel e uma intrução SQL
        $consulta->bindParam(':Matricula', $matricula);
    
        // executa a função 
        $consulta->execute();
    
        if ($consulta->rowCount() > 0) {
            echo "Já possui cadastro!";
        } else {
            //Cadastrando um novo
            $str_sql = "INSERT INTO 2022_tb_aluno (matricula, nomeAluno, nota1, nota2, nota3)";
            $str_sql = $str_sql . "VALUES (:Matricula, :Nome, :Nota1, :Nota2, :Nota3)";
    
            $str_salvar = $conexao->prepare($str_sql);
            $str_salvar->bindParam(':Matricula', $matricula);
            $str_salvar->bindParam(':Nome', $nome);
            $str_salvar->bindParam(':Nota1', $nota1);
            $str_salvar->bindParam(':Nota2', $nota2);
            $str_salvar->bindParam(':Nota3', $nota3);
    
            if($str_salvar->execute()){
                //Salvo com sucesso
                $_SESSION['mensagem'] = "Aluno Registrado com Sucesso!";
                header("Location: ../index.php");
                //echo "cadastrado com sucesso";
            }else {
                //Ocorreu um erro
                header("Location: ../index.php");
                //echo "Houve problemas!";  
            }
        } 
    }

    function editarAluno($matricula, $nome, $nota1, $nota2, $nota3){ 
        require "./conexao.php";

         // Atualiza os dados
        $str_sql = "UPDATE 2022_tb_aluno SET matricula = :Matricula, nomeAluno = :Nome, nota1 = :Nota1, 
        nota2 = :Nota2, nota3 = :Nota3, WHERE matricula = :Matricula";
    
        $str_salvar = $conexao->prepare($str_sql);
        $str_salvar->bindParam(':Matricula', $matricula);
        $str_salvar->bindParam(':Nome', $nome);
        $str_salvar->bindParam(':Nota1', $nota1);
        $str_salvar->bindParam(':Nota2', $nota2);
        $str_salvar->bindParam(':Nota3', $nota3);
    
        if($str_salvar->execute()){
            //Salvo com sucesso
            echo "Cadastrado atualizado com sucesso!";
        }else {
            //Ocorreu um erro
            echo "Houve problemas!";
        }
    }

    function deletarAluno($matricula){
        require "./conexao.php";

        // Exclui os dados
        $str_sql = "DELETE * FROM 2022_tb_aluno WHERE matricula = :Matricula";

        $str_salvar = $conexao->prepare($str_sql);
        $str_salvar->bindParam(':Matricula', $matricula);

        if($str_salvar->execute()){
            //Excluido com sucesso
            echo "Cadastrado excluido com sucesso!";
        }else {
            //Ocorreu um erro
            echo "Houve problemas!";
        }
    }
    
    $dados = 0;
    
    function listarAluno(){
        require "./conexao/conexao.php";
        global $dados;

        $consulta = "SELECT * FROM 2022_tb_aluno"; 

        //criando statament ou query
            $stmt_listar = $conexao->prepare($consulta);
    
        //executando a instrução 
            $stmt_listar->execute();
    
        $aluno = array();
        
        //retorna uma lista de objetos 
            while($registro = $stmt_listar->fetch(PDO::FETCH_OBJ)) {
                $aluno[] = array("MATRICULA"=>$registro->matricula, 
                                   "NOME"=>$registro->nomeAluno, 
                                   "NOTA1"=>$registro->nota1, 
                                   "NOTA2"=>$registro->nota2,
                                   "NOTA3"=>$registro->nota3,             
                );


            }       
        $passagem = json_encode($aluno);
        $dados = json_decode($passagem);
        
        $numAluno = 0;
        
        echo ('<tr class=" linha1">    
                  <td class="campo">Aluno</td>
                  <td class="campo">Nota 1</td>
                  <td class="campo">Nota 2</td>
                  <td class="campo">Nota 3</td>
                  <td class="campo">Média</td>
               </tr>');
        
        while ($numAluno != count($dados)){   
            echo( 
            '<tr>    
                <td class="aluno">'.$dados[$numAluno]->NOME.'</td>
                <td class="nota">'.$dados[$numAluno]->NOTA1.'</td>
                <td class="nota">'.$dados[$numAluno]->NOTA2.'</td>
                <td class="nota">'.$dados[$numAluno]->NOTA3.'</td>
                <td class="media"> </td>
             </tr>');
            
            $numAluno++;
        } 
    }
?>