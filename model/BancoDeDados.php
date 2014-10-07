<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BancoDeDados
 *
 * @author Jorge
 */
class BancoDeDados {
    private $Conexao;
    public function Conectar() {
       $retorno = mysql_connect('localhost', 'root', '');
       $retorno = mysql_select_db('talkabout');
       return $retorno; 
    }
}
