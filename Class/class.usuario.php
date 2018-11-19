<?php

// a classe de usuario nao sabe oque ela pode fazer, por isso chama a gn tabela
require_once('Class/class.gn_tabela.php');

// classe de usuario recebe os metodos de gn_tabela
class usuario extends gn_tabela 
{
    // construtor eh chmado automaticamente ao instanciar a classe, neste caso, o construtor de GN_TABELA apenas
    // cria as variaveis
    function __construct(){
        
        // chama o construtor do pai, o pai eh gn_tabela, que criara os campos
        parent::__construct();
        
        // nome da classe
        $this->classe = "usuario";
        
        // nome da tabela
        $this->tabela = "tab_usuarios";
        
        // chave da tabela
        $this->chave = "usu_cod";
        
        // campos da tabela
        $this->campos = array(
            "usu_nome" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "usu_nome",
                "id"       => "usu_nome",
                "label"    => "Usuário",
                "pesquisa" => true,
                "required" => true,
                "tamanho"  => 6
            ),
            "usu_senha" => array(
                "tagname"  => "input",
                "type"     => "password",
                "class"    => 'form-control ',
                "banco"    => "usu_senha",
                "id"       => "usu_senha",
                "label"    => "Senha",
                "pesquisa" => false,
                "requerid" => true,
                "tamanho"  => 6
            ),
            "usu_email" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "usu_email",
                "id"       => "usu_email",
                "label"    => "E-mail",
                "pesquisa" => true,
                "tamanho"  => 6
            ),
        );
        
    }
}
