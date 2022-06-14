<?php
    session_start();
    require "./conexao/controler.php"
  
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="UTF-8" >
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
                    <input type="text" name="nome" id="campoNome" placeholder="Digite seu nome">
                </div> 
            </div>

            <div class="notas">
                <div class="campo-nota"> 
                    <label class="label-notas"> Nota 1: </label> <br>
                    <input type="number" step="0.5" max="10" min="0" name="nota1" id="campoNota1" placeholder="1º Nota">
                </div> 

                <div class="campo-nota"> 
                    <label class="label-notas"> Nota 2: </label> <br>
                    <input type="number" step="0.5" max="10" min="0" name="nota2" id="campoNota2" placeholder="2º Nota">
                </div> 

                <div class="campo-nota"> 
                    <label class="label-notas"> Nota 3: </label> <br>
                    <input type="number" step="0.5" max="10" min="0" name="nota3" id="campoNota3" placeholder="3º Nota">
                </div> 
            </div>

            <label for="selection"> Selecione a função </label>
            <select name="funcao">
                 <option> Registrar </option>
                 <option> Editar </option>
                 <option> Deletar </option>
            </select>
            
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
        <script type="text/javascript" src="./js/corMedia.js"></script>
        <script type="text/javascript" src="./js/click.js"></script>
        <script type="text/javascript" src="./js/getFetch.js"></script>
        
    </body>
</html>