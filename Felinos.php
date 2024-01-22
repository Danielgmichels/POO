<?php
// require "Animais.php";

class Felinos extends Animais{
    public $som,
    $tipo,
    $porte;

    public function getSom(){
        return $this->som;
    }

    public function getDetalhes(){
        return "Porte: {$this->porte} | Tipo: {$this->tipo}";
    }
}