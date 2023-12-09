<?php
require "Carro.php";
require "Pessoa.php";

$meuCarro = new Carro();
$meuCarro->modelo = "Ford Ka";
$meuCarro->cor = "Preto";

$meuCarro->getVeiculo();

$outroCarro = new Carro();
$outroCarro->modelo = "Ferrari";
$outroCarro->cor = "Vermelho";
$outroCarro->getVeiculo();

$meuCarro->getVeiculo();

//Classe Pessoa
$p1 = new Pessoa("Diego", 38);
$p1->getPessoa();
