<?php
class Veiculos {
    
    public $ano,
    $modelo,
    $cor,
    $fabricante,
    $motor,
    $quilometragem,
    $tipo;

    public function getVeiculo(){
        return "Tipo: {$this->tipo} | Fabricante: {$this->fabricante} | Modelo: {$this->modelo} | Cor: {$this->cor} | Ano: {$this->ano}";
    }
}

//
//Veículos de Corrida
//

class VeiculosCorrida extends Veiculos {
    public $equipe,
    $velocidade;

    public function getDetalhes(){
        return "Equipe: {$this->equipe} | Velocidade: {$this->velocidade} KM";
    }
}

$corrida = new VeiculosCorrida();
$corrida->tipo = "Corrida";
$corrida->ano = 2000;
$corrida->modelo = "Spider";
$corrida->cor = "Vermelho";
$corrida->fabricante = "Ferrari";
$corrida->quilometragem = 0;
$corrida->equipe = "Ferrari";
$corrida->velocidade = 380;

echo "{$corrida->getVeiculo()} | {$corrida->getDetalhes()}<br>";


//
///Veículos de Carga
//

class VeiculosCarga extends Veiculos {
    public $capacidade,
    $peso;

    public function getDetalhes(){
        return "Capacidade: {$this->capacidade} | Peso: {$this->peso}";
    }
}

$carga = new VeiculosCarga();
$carga->tipo = "Carga";
$carga->ano = 1988;
$carga->modelo = "Camionete";
$carga->cor = "Preto";
$carga->fabricante = "Ford";
$carga->quilometragem = 2000;
$carga->capacidade = 1000;
$carga->peso = 3000;

echo "{$carga->getVeiculo()} | {$carga->getDetalhes()}<br>";

//
//Veículos de Passeio
//

class VeiculosPasseio extends Veiculos {
    public $lugares,
    $cambio;

    public function getDetalhes(){
        return "Lugares: {$this->lugares} | Cambio: {$this->cambio}";
    }
}

$passeio = new VeiculosPasseio();
$passeio->tipo = "passeio";
$passeio->ano = 2022;
$passeio->modelo = "Zafira";
$passeio->cor = "Prata";
$passeio->fabricante = "Ford";
$passeio->quilometragem = 3000;
$passeio->lugares = 7;
$passeio->cambio = "Manual";

echo "{$passeio->getVeiculo()} | {$passeio->getDetalhes()}<br>";