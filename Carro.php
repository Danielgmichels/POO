<?php
class Carro {
    //atibutos dos Carros
    public $ano,
    $modelo,
    $cor,
    $fabricante,
    $motor,
    $combustível = "Gasolina",
    $portas,
    $velocidade,
    $quilometragem;

    //Métodos
    public function andar(){
        echo "Andando a {$this->velocidade}";
    }

    public function getVeiculo(){
        echo <<<HTML
        <p>{$this->modelo}</p>
        <p>{$this->cor}</p>
        HTML;
    }
}