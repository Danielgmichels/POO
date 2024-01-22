<?php
require "Animais.php";
require "Felinos.php";
//Classe filha
//A classe filha herda métodos e atributos da classe mãe, desde que sejam public ou protected

class Cachorro extends Animais{
    public $som;

    public function som(){
        return $this->som;
    }
}

/// Instanciando a classe (não faça isso em casa)

$dog = new Cachorro();
$dog->nome = "Max";
$dog->idade = "17";
$dog->especie = "Cachorro";
$dog->som = "late";

echo "O {$dog->getEspecie()} {$dog->som()}<br>";

$f = new Felinos();
$f->nome = "Zeca";
$f->idade = 4;
$f->especie = "Gato";
$f->som = "mia";
$f->tipo = "Domesticável";
$f->porte = "Pequeno";

echo "O {$f->getEspecie()} {$f->getSom()}, {$f->getDetalhes()}<br>";

$leao = new Felinos();
$leao->nome = "Simba";
$leao->idade = 25;
$leao->especie = "Leão";
$leao->som = "ruge";
$leao->tipo = "Selvagem";
$leao->porte = "Grande";

echo "O {$leao->getEspecie()} {$leao->getSom()}, {$leao->getDetalhes()}<br>";

