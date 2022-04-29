<?php
    session_start();
    require "./conexao/controler.php"
  
?>



<!doctype html>
<html>
    <head>
        <meta charset="UTF-8" lang="pt-br">
        <title> Tabela de Notas </title>
        <link href="./css/estilo.css" rel="stylesheet">
    </head>

    <body>

        <div class="div-tabela">
        <table class="tabela">
            
 

            <?php
                listarAluno();    
            ?>

            <!-- <tr class="linha7">    
                <td class="aluno">Kevin 2</td>
                <td class="nota">3</td>
                <td class="nota">3</td>
                <td class="nota">3</td>
                <td class="media"></td>
            </tr> -->
        </table>
        </div>

        <form method="post" action="conexao/processa.php" class="formulario">
            <div class="campo-matricula"> 
                <label class="label"> Matricula: </label>
                <input type="number" name="matricula" id="matricula" placeholder="Digite Seu Numero de Matricula">
            </div> 
           
            <div class="campo-nome">   
                <label class="label"> Nome do Aluno: </label>
                <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
            </div> 

            <div class="campo"> 
                <label class="label"> Nota 1: </label>
                <input type="number" max="10" min="0" name="nota1" id="nota1" placeholder="Digite a primeira nota">
            </div> 

            <div class="campo"> 
                <label class="label"> Nota 2: </label>
                <input type="number" max="10" min="0" name="nota2" id="nota2" placeholder="Digite a segunda nota">
            </div> 

            <div class="campo"> 
                <label class="label"> Nota 3: </label>
                <input type="number" max="10" min="0" name="nota3" id="nota3" placeholder="Digite a terceira nota">
            </div> 

            <button type="submit" class="botao" id="inserir"> Registrar </button>

        </form>

        <?php
            if(isset($_SESSION['mensagem'])){
                echo $_SESSION['mensagem'];
                unset ($_SESSION['mensagem']);
            }
            
        ?>

        <script type="text/javascript" src="./js/calcularMedia.js"></script>
        
    </body>
</html>