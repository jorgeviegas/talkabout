<?php

class Publicacao {

    private $descricao;
    private $usuario;
    private $votos_up;
    private $votos_down;
    private $instituicao;
    
   // function __construct($descricao, $usuario, $votos_up, $votos_down, $instituicao) {
   //    $this->descricao = $descricao;
   //    $this->usuario = $usuario;
   //     $this->votos_up = $votos_up;
   //     $this->votos_down = $votos_down;
   //     $this->instituicao = $instituicao;
   // }
    
   function __construct() {
   }
    
    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    public function getVotos_up() {
        return $this->votos_up;
    }

    public function setVotos_up($votos_up) {
        $this->votos_up = $votos_up;
    }

    public function getVotos_down() {
        return $this->votos_down;
    }

    public function setVotos_down($votos_down) {
        $this->votos_down = $votos_down;
    }

    public function getInstituicao() {
        return $this->instituicao;
    }

    public function setInstituicao($instituicao) {
        $this->instituicao = $instituicao;
    }


}