<?php
use app\App;
use app\pdo\Mysql;

require "Autoload.php";
$load = new Autoload();

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

$app = new App();

echo "<p>PDO</p>";

$g = new Mysql();
$g->select("SELECT * FROM pdv_produtos");

foreach($g->qrs as $dados){
    echo $dados['nome']."<br>";
}

echo "inserir dados";

$g->insert("INSERT INTO pdv_produtos (nome, descricao, valor_venda, valor_compra, unidade, cod_ean, ativo, from_categoria) VALUES ('Cachaça', 'Quema a guela', 4.5, 3.2, 'ML', '123123123', 1, 5)");
