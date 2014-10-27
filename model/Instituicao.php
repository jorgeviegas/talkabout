<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Instituicao
 *
 * @author Jorge Viegas
 */
class Instituicao {

    private $pcImagem;
    private $pcEmail;
    private $pcFone;
    private $pcDescricao;
    private $pcNome;
    
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

    public function getPcEmail() {
        return $this->pcEmail;
    }

    public function setPcEmail($pcEmail) {
        $this->pcEmail = $pcEmail;
    }

    public function getPcFone() {
        return $this->pcFone;
    }

    public function setPcFone($pcFone) {
        $this->pcFone = $pcFone;
    }

    public function getPcDescricao() {
        return $this->pcDescricao;
    }

    public function setPcDescricao($pcDescricao) {
        $this->pcDescricao = $pcDescricao;
    }
}

?>
