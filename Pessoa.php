<?php

class Pessoa{
    public $nome;
    public $idade;
    public function falarNome(){
        echo $this->nome;
    }
    public function falarIdade(){
        echo $this->idade;
    }
}

?>