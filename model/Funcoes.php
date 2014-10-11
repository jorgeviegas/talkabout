<?php

/*
 * Funcoes auxiliares
 *
 * @author Jorge
 */

class Funcoes {

    static public function calcularUltimoDia($tcMes, $tcAno) {
        $mes = $tcMes;
        $ano = $tcAno;
        $ultimo_dia = date("t", mktime(0, 0, 0, $mes, '01', $ano));
        return $ultimo_dia;
    }

    static public function montarCombo($tcTabela, $tcCampo, $tnInativo, $tnDistinct, $tnTodas, $tcNome, $tcId) {
        include './model/BancoDeDados.php';
        include './model/DAO.php';
        
        $llConexao = new BancoDeDados();
        $llConexao->Conectar();
        $lcFiltro = ' 1=1 ';
        if ($tnDistinct === 1) {
            $lcQuery = ' distinct ' . $tcCampo;
            $tcCampoValue = $tcCampo;
        } else {
            $lcQuery = $tcCampo . ',id';
            $tcCampoValue = 'id';
        }

        if ($tnInativo === 1) {
            $lcFiltro.= ' and inativo = 0';
        }
        $loDao = new DAO($tcTabela);
        $Result = $loDao->pesquisar($lcQuery, $lcFiltro);
        $return = '<select name="' . $tcNome . '" class = "input-large form-control" id="' . $tcId . '">';
        if ($tnTodas === 1) {
            $return.='<option value="00">Todos</option>';
        }
        while ($registro = mysql_fetch_assoc($Result)) {
            $return.= '<option value="' .$registro[$tcCampoValue] . '">' . $registro[$tcCampo] . '</option>';
        }
        $return.='</select>';
        return $return;
    }

    static public function formatarHTML($tcString) {
        $laFormat = array("<" => "&lt;",
            "<" => "&gt;",
            "&" => "&amp;",
            "á" => "&aacute;",
            "â" => "&acirc;",
            "à" => "&agrave;",
            "ç" => "&ccedil;",
            "ã" => "&atilde;",
            "é" => "&eacute;",
            "ê" => "&ecirc;",
            "í" => "&iacute;",
            "ó" => "&oacute;",
            "ô" => "&ocirc;",
            "õ" => "&otilde;",
            "ú" => "&uacute;",
            "ü" => "&uuml;",
            "Á" => "&Aacute;",
            "Â" => "&Acirc;",
            "À" => "&Agrave;",
            "Ã" => "&Atilde;",
            "Ç" => "&Ccedil;",
            "É" => "&Eacute;",
            "Ê" => "&Ecirc;",
            "Í" => "&Iacute;",
            "Ó" => "&Oacute;",
            "Ô" => "&Ocirc;",
            "Õ" => "&Otilde;",
            "Ú" => "&Uacute;",
            "Ü" => "&Uuml;",
        );
        return strtr($tcString, $laFormat);
    }

    static public function getPublicacaoById($tcId) {
        include './model/BancoDeDados.php';
        include './model/Publicacao.php';
        include './model/Usuario.php';

        $conexao = new BancoDeDados();
        $conexao->Conectar();
        $publicacoesDAO = new DAO('publicacoes p left join usuarios u on u.id = p.id_usuario');
        $query = $publicacoesDAO->pesquisar(' p.*,u.nome, u.username ', ' p.id = ' . $tcId);
        $post = mysql_fetch_array($query);
        $publicacao = new Publicacao();
        $usuario = new Usuario($post['username']);
        $publicacao->setDescricao($post['descricao']);
        $publicacao->setUsuario($usuario);
        return $publicacao;
    }

    static public function getUsuariobyId($tcId) {
        include '../model/Usuario.php';
        $usuariosDAO = new DAO('usuarios');
        $query = $usuariosDAO->pesquisar('*', ' id = ' + $tcId);
        $usuario = mysql_fetch_assoc($query);
        $user = new Usuario($usuario['username']);
        return $user;
    }

    static public function iniciarSessao($tcId) {
        $usuario = Funcoes::getUsuariobyId($tcId);
        $_SESSION['usuario'] = serialize($usuario);
        session_start();
    }

}
