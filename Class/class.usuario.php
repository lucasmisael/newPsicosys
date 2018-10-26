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
        $this->chave = "usuario_cod";
        
        // campos da tabela
        $this->campos = array(
            "usuario_nome" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "usuario_nome",
                "id"       => "usuario_nome",
                "label"    => "Usuário",
                "pesquisa" => true,
                "required" => true,
            ),
            "usuario_email" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "usuario_email",
                "id"       => "usuario_email",
                "label"    => "E-mail",
                "pesquisa" => true,
            ),
            "usuario_senha" => array(
                "tagname"  => "input",
                "class"    => 'form-control ',
                "banco"    => "usuario_senha",
                "id"       => "usuario_senha",
                "label"    => "Senha",
                "pesquisa" => false,
                "requerid" => true,
            ),
        );
        
    }
}
