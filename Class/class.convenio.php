<?php

// DOCUMENTADO EM CLASS.CONVENIO.PHP

require_once('Class/class.gn_tabela.php');

class convenio extends gn_tabela 
{
    function __construct(){
        
        parent::__construct();
        
        $this->classe = "convenio";
        
        $this->tabela = "tab_convenios";
    
        $this->chave = "Conv_Cod";
        
        $this->campos = array(
            "Conv_Nome" => array(
                "tagname"   => "input",
                "class"     => 'form-control ' ,
                "banco"     => "Conv_Nome",
                "id"        => "Conv_Nome",
                "label"     => "Convênio",
                "orderBy"   => true, //?? Pendente
                "required"  => true,
                "pesquisa"  => true,
                "tamanho"   => 6,
            ),
            "Conv_Status" => array(
                "tagname"    => "input",
                "class"      => 'form-control checkbox' ,
                "banco"      => "Conv_Status",
                "id"         => "Conv_Status",
                "callback"   => "lista_callback_check",
                "label"      => "Ativo",
                "type"       => "checkbox",
                "checked"    => true, // ?? para sempre vir checado
                "required"   => false,
                "pesquisa"   => false,
                "tamanho"    => 1,
                 "data-toggle"=>"toggle",
                "data-onstyle" =>"success",
                "data-offstyle"=>"danger",
                "data-on"=>"Ativo",
                "data-off"=>"Inativo"
            ),
            "Conv_Cnpj" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcnpj' ,
                "banco"    => "Conv_Cnpj",
                "id"       => "Conv_Cnpj",
                "label"    => "CNPJ",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Conv_Email" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Conv_Email",
                "id"       => "Conv_Email",
                "label"    => "E-mail",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Conv_Endereco" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Conv_Endereco",
                "id"       => "Conv_Endereco",
                "label"    => "Endereço",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Conv_Cep" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcep' ,
                "banco"    => "Conv_Cep",
                "id"       => "Conv_Cep",
                "label"    => "CEP",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Conv_Contato_Fone" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Conv_Contato_Fone",
                "id"       => "Conv_Contato_Fone",
                "label"    => "Contato",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Conv_Fone" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskfone' ,
                "banco"    => "Conv_Fone",
                "id"       => "Conv_Fone",
                "label"    => "Fone",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Conv_Contato_Cel" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Conv_Contato_Cel",
                "id"       => "Conv_Contato_Cel",
                "label"    => "Contato ",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Conv_Cel" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcel' ,
                "banco"    => "Conv_Cel",
                "id"       => "Conv_Cel",
                "label"    => "Celular",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Conv_Site" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Conv_Site",
                "id"       => "Conv_Site",
                "label"    => "Site",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Conv_Obs" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Conv_Obs",
                "id"       => "Conv_Obs",
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
