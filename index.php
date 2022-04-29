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
        <h1> Tabela de Notas </h1>

        <div class="div-tabela">
        <table class="tabela">
            
            <?php
                listarAluno();    
            ?>

        </table>
        </div>

        <form method="post" action="conexao/processa.php" class="formulario">
            <div class="dados">
                <div class="campo-matricula"> 
                    <label class="label-dados"> Matricula: </label> <br>
                    <input type="number" name="matricula" id="matricula" placeholder="Digite Seu Numero de Matricula">
                </div> 
                
                <div class="campo-nome">   
                    <label class="label-dados"> Nome do Aluno: </label> <br>
                    <input type="text" name="nome" id="nome" placeholder="Digite seu nome">
                </div> 
            </div>

            <div class="notas">
                <div class="campo-nota"> 
                    <label class="label-notas"> Nota 1: </label> <br>
                    <input type="number" max="10" min="0" name="nota1" id="nota1" placeholder="1º Nota">
                </div> 

                <div class="campo-nota"> 
                    <label class="label-notas"> Nota 2: </label> <br>
                    <input type="number" max="10" min="0" name="nota2" id="nota2" placeholder="2º Nota">
                </div> 

                <div class="campo-nota"> 
                    <label class="label-notas"> Nota 3: </label> <br>
                    <input type="number" max="10" min="0" name="nota3" id="nota3" placeholder="3º Nota">
                </div> 
            </div>

            <button type="submit" class="botao" id="inserir"> Registrar </button>

        </form>
        
        <h1>
                <?php
                    if(isset($_SESSION['mensagem'])){
                        echo $_SESSION['mensagem'];
                        unset ($_SESSION['mensagem']);
                    }    
                ?> 
        </h1>

        <script type="text/javascript" src="./js/calcularMedia.js"></script>
        <script type="text/javascript" src="./js/bgColor.js"></script>
        
    </body>
</html>