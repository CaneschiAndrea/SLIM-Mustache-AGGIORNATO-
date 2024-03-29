<?php

class Alunno implements JsonSerializable {

    protected $nome;
    protected $cognome;
    protected $eta;

    public function __construct($nome, $cognome, $eta){
        $this->nome=$nome;
        $this->cognome=$cognome;
        $this->eta=$eta;

    }

    public function getNome(){
        return $this->nome;
    }

    public function getCognome(){
        return $this->cognome;
    }

    public function getEta(){
        return $this->eta;
    }

    public function jsonSerialize() {
        $attrs = [];
        $class_vars = get_class_vars(get_class($this));
        foreach ($class_vars as $name => $value) {
          $attrs[$name]=$this->{$name};
          
         }
        return $attrs;
    }
    



}


?>