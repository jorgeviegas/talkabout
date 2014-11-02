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
        if (1 == 1) {
            $retorno = mysql_connect('localhost', 'root', '');
            $retorno = mysql_select_db('talkabout');
        } else {
            $retorno = mysql_connect('localhost', 'turma4k', '1fsul2o14');
            $retorno = mysql_select_db('talkabout');
        };
        return $retorno;
    }

}
