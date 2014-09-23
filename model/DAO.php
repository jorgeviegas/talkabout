<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAO
 *
 * @author Jorge
 */
class DAO {

    private $pcNomeTabela;
    
    function __construct($pcNomeTabela) {
        $this->pcNomeTabela = $pcNomeTabela;
    }
    
    public function getPcNomeTabela() {
        return $this->pcNomeTabela;
    }

    public function setPcNomeTabela($pcNomeTabela) {
        $this->pcNomeTabela = $pcNomeTabela;
    }
    
    public function inserir($tcCampos,$tcValores) {
        $lcQuery = 'insert into ' . $this->pcNomeTabela . ' (' . $tcCampos . ') values(' . $tcValores . ')';
        $result = mysql_query($lcQuery);
        return $result;
    }

    public function pesquisar($tcCampos, $tcFiltro) {
        $lcQuery = 'select ' . $tcCampos . ' from ' . $this->pcNomeTabela . ' where ' . $tcFiltro;
        $result = mysql_query($lcQuery);
        return $result;
    }

    public function deletar($tcFiltro) {
        $lcQuery = 'delete from ' . $this->pcNomeTabela . ' where ' . $tcFiltro;
        $result = mysql_query($lcQuery);
        return $result;
    }
    
  

}
