<?php

/*
 * Description of DAO
 *
 * 
 * Esta classe implementa a interação entre o código e o Danco de Dados
 * através das operações CRUD.
 * 
 * Parâmetros: No método construtor, recebe o nome da tabela do banco que será referenciada
 * e seus respectivos Joins.
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

    public function inserir($tcCampos, $tcValores) {
        $lcQuery = 'insert into ' . $this->pcNomeTabela . ' (' . $tcCampos . ') values(' . $tcValores . ')';
        echo $lcQuery;
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

    public function atualizar($tcCampos, $tcValores, $tcFiltro) {
        $lcQuery = 'update ' . $this->pcNomeTabela . ' set (' . $tcCampos . ')' . ' = ' . $tcValores . ' where ' . $tcFiltro;
        $result = mysql_query($lcQuery);
        return $result;
    }

}

