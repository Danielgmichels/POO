<?php
//conceitos de herança
//Classe mãe

class Animais{
    public $nome,
    $idade,
    $especie;

    public function getEspecie(){
        return $this->especie;
    }
}