<?php

class Publicacao {

    private $pcDescricao;
    private $pnIdUusuario;
    private $pcNome;
    private $pcUsername;
    private $pcTitulo;
    private $pnVotosUP;
    private $pnVotosDOWN;
    private $pnIdInstituicao;
    private $pcNomeInstituicao;
    private $pcId;
    private $pcImagem;
    private $pcTipo;
    private $pcComentarios;

    public function __construct() {
        
    }
    public function getPcComentarios() {
        return $this->pcComentarios;
    }

    public function setPcComentarios($pcComentarios) {
        $this->pcComentarios = $pcComentarios;
    }

    public function getPcTipo() {
        return $this->pcTipo;
    }

    public function setPcTipo($pcTipo) {
        $this->pcTipo = $pcTipo;
    }

    public function getPcDescricao() {
        return $this->pcDescricao;
    }

    public function setPcDescricao($pcDescricao) {
        $this->pcDescricao = $pcDescricao;
    }

    public function getPnIdUusuario() {
        return $this->pnIdUusuario;
    }

    public function setPnIdUusuario($pnIdUusuario) {
        $this->pnIdUusuario = $pnIdUusuario;
    }

    public function getPcNome() {
        return $this->pcNome;
    }

    public function setPcNome($pcNome) {
        $this->pcNome = $pcNome;
    }

    public function getPcUsername() {
        return $this->pcUsername;
    }

    public function setPcUsername($pcUsername) {
        $this->pcUsername = $pcUsername;
    }

    public function getPcTitulo() {
        return $this->pcTitulo;
    }

    public function setPcTitulo($pcTitulo) {
        $this->pcTitulo = $pcTitulo;
    }

    public function getPnVotosUP() {
        return $this->pnVotosUP;
    }

    public function setPnVotosUP($pnVotosUP) {
        $this->pnVotosUP = $pnVotosUP;
    }

    public function getPnVotosDOWN() {
        return $this->pnVotosDOWN;
    }

    public function setPnVotosDOWN($pnVotosDOWN) {
        $this->pnVotosDOWN = $pnVotosDOWN;
    }

    public function getPnIdInstituicao() {
        return $this->pnIdInstituicao;
    }

    public function setPnIdInstituicao($pnIdInstituicao) {
        $this->pnIdInstituicao = $pnIdInstituicao;
    }

    public function getPcNomeInstituicao() {
        return $this->pcNomeInstituicao;
    }

    public function setPcNomeInstituicao($pcNomeInstituicao) {
        $this->pcNomeInstituicao = $pcNomeInstituicao;
    }

    public function getPcId() {
        return $this->pcId;
    }

    public function setPcId($pcId) {
        $this->pcId = $pcId;
    }

    public function getPcImagem() {
        return $this->pcImagem;
    }

    public function setPcImagem($pcImagem) {
        $this->pcImagem = $pcImagem;
    }

    public function exibirTimeline() {
        echo '<h2>';
        echo '<a href = "publicacao.php?publi='.$this->pcId.'" target = "_blank">'. $this->pcTitulo.'</a>';
        echo '</h2>';
        echo '<p class = "lead">';
        echo 'publicado por <a href = "usuario.php?user='.$this->pcUsername.'" target = "_blank">'.$this->pcNome.'</a>';
        echo '</p>';
        echo '<p><span class = "glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>';
        echo '<hr>';
        echo '<img class = "img-responsive" src ="'. $this->pcImagem .'" alt = "">';
        echo '<hr>';
        echo '<p>' .$this->pcDescricao.'</p>';
        echo '<a class = "btn btn-primary" href = "publicacao.php?publi='.$this->pcId.'">Leia mais</a>';
        //<hr>
    }

}