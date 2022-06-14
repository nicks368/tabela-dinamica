<?php
    class Aluno{
        public $matricula;
        public $nome;
        public $nota1;
        public $nota2;
        public $nota3;

    }

    function __construct ($matricula, $nome, $nota1, $nota2, $nota3){
        $this->matricula = $matricula;
        $this->nome = $nome;
        $this->nota1 = $nota1;
        $this->nota2 = $nota2;
        $this->nota3 = $nota3;
    }
?>