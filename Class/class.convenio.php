<?php

// DOCUMENTADO EM CLASS.CONVENIO.PHP

require_once('Class/class.gn_tabela.php');

class convenio extends gn_tabela 
{
    function __construct(){
        
        parent::__construct();
        
        $this->classe = "convenio";
        
        $this->tabela = "tab_convenios";
        
        $this->chave = "Convenio_Cod";
        
        $this->campos = array(
            "Convenio_Desc" => array(
                "tagname"   => "input",
                "class"     => 'form-control ' ,
                "banco"     => "Convenio_Desc",
                "id"        => "Convenio_Desc",
                "label"     => "Convênio",
                "orderBy"   => true, //?? Pendente
                "required"  => true,
                "pesquisa"  => true,
                "tamanho"   => 6,
            ),
            "Convenio_Status" => array(
                "tagname"    => "input",
                "class"      => 'form-control ' ,
                "banco"      => "Convenio_Status",
                "id"         => "Convenio_Status",
                "callback"   => "lista_callback_check",
                "label"      => "Ativo",
                "type"       => "checkbox",
                "checked"    => true, // ?? para sempre vir checado
                "required"   => false,
                "pesquisa"   => true,
                "tamanho"    => 1,
            ),
            "Convenio_Cnpj" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcnpj' ,
                "banco"    => "Convenio_Cnpj",
                "id"       => "Convenio_Cnpj",
                "label"    => "CNPJ",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Convenio_Email" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Convenio_Email",
                "id"       => "Convenio_Email",
                "label"    => "E-mail",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Convenio_End" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Convenio_Endereco",
                "id"       => "Convenio_Endereco",
                "label"    => "Endereço",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Convenio_Cep" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcep' ,
                "banco"    => "Convenio_Cep",
                "id"       => "Convenio_Cep",
                "label"    => "CEP",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Convenio_Contato_Fone" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Convenio_Contato_Fone",
                "id"       => "Convenio_Contato_Fone",
                "label"    => "Contato",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Convenio_Fone" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskfone' ,
                "banco"    => "Convenio_Fone",
                "id"       => "Convenio_Fone",
                "label"    => "Fone",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Convenio_Contato_Cel" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Convenio_Contato_Cel",
                "id"       => "Convenio_Contato_Cel",
                "label"    => "Contato ",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Convenio_Cel" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcel' ,
                "banco"    => "Convenio_Cel",
                "id"       => "Convenio_Cel",
                "label"    => "Celular",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Convenio_Site" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Convenio_Site",
                "id"       => "Convenio_Site",
                "label"    => "Site",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Convenio_Observacao" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Convenio_Observacao",
                "id"       => "Convenio_Observacao",
                "label"    => "Observação",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
        );
    }

    function lista_callback_check($vl){
        //?? COMENTADO PARA EN.... O CLIENTE
        
        //if ($vl == '1'){
            $color = 'green'    ;
            $char  = "&#9745;"  ;
        //} else {
        //    $color = 'red'      ;
        //    $char  = "&#9744;"  ;
        //}
        
        return "
            <span 
                style='
                    font-size : 30px;
                    color     : $color;
                '>
                $char
            </span>
        ";
    }
    
}
