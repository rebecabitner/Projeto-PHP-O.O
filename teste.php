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

$uma_pessoa = new Pessoa;
$uma_pessoa->nome = "Rebeca";
$uma_pessoa->idade = "23";

$uma_pessoa->falarNome();
$uma_pessoa->falarIdade();


?>