<?php

class Usuario {

    private $pcUserName;
    private $pcEmail;
    private $pcNome;
    private $pcImagem;
    private $pnAmigo;
    private $pcId;
    
    public function getPcUserName() {
        return $this->pcUserName;
    }

    public function setPcUserName($pcUserName) {
        $this->pcUserName = $pcUserName;
    }

    public function getPcEmail() {
        return $this->pcEmail;
    }

    public function setPcEmail($pcEmail) {
        $this->pcEmail = $pcEmail;
    }

    public function getPcNome() {
        return $this->pcNome;
    }

    public function setPcNome($pcNome) {
        $this->pcNome = $pcNome;
    }

    public function getPcImagem() {
        return $this->pcImagem;
    }

    public function setPcImagem($pcImagem) {
        $this->pcImagem = $pcImagem;
    }
    
    public function getPnAmigo() {
        return $this->pnAmigo;
    }

    public function setPnAmigo($pnAmigo) {
        $this->pnAmigo = $pnAmigo;
    }
    
    public function getPcId() {
        return $this->pcId;
    }

    public function setPcId($pcId) {
        $this->pcId = $pcId;
    }



}
