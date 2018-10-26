<?php

// DOCUMENTADO EM CLASS.USUARIO.PHP

require_once('Class/class.gn_tabela.php');

class cliente extends gn_tabela 
{
    function __construct(){
        
        parent::__construct();
        
        $this->classe = "cliente";
        
        $this->tabela = "tab_clientes";
        
        $this->chave = "Cliente_Cod";
        
        $this->campos = array(
            "Cliente_Data_Cadastro" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Data_Cadastro",
                "id"       => "Cliente_Data_Cadastro",
                "label"    => "Data de Cadastro",
                "callback"   => "lista_callback_data",
                "type"     => "date",
                "pesquisa" => true,
                "tamanho"  => 6,
                "onchange" => "calcYearOld(this, \"Cliente_Idade\");",
            ),
            "Cliente_Status" => array(
                "tagname"    => "input",
                "class"      => 'form-control ' ,
                "banco"      => "Cliente_Status",
                "id"         => "Cliente_Status",
                "callback"   => "lista_callback_check",
                "label"      => "Ativo",
                "type"       => "checkbox",
                "checked"    => true, // ?? para sempre vir ticado
                "pesquisa"   => true,
                "tamanho"    => 1,
            ),
            "Cliente_Desc" => array(
                "tagname"  => "input",
                "class"    => 'form-control ',
                "banco"    => "Cliente_Desc",
                "id"       => "Cliente_Desc",
                "label"    => "Descrição",
                "orderBy"  => true, //?? Pendente
                "required" => true,
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Cpf" => array(
                "tagname"  => "input",
                "class"    => 'form-control ',
                "banco"    => "Cliente_Cpf",
                "id"       => "Cliente_Cpf",
                "label"    => "CPF",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Data_Nasc" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Data_Nasc",
                "id"       => "Cliente_Data_Nasc",
                "label"    => "Data Nascimento",
                "callback" => "lista_callback_data",
                "type"     => "date",
                "pesquisa" => true,
                "tamanho"  => 6,
                "onchange" => "calcYearOld(this, \"Cliente_Idade\");",
            ),
            
            "Cliente_Idade" => array(
                "tagname"        => "input",
                "class"          => 'form-control ' ,
                "banco"          => "Cliente_Idade" ,
                "id"             => "Cliente_Idade" ,
                "label"          => "Idade",
                "type"           => "text",
                "pesquisa"       => true,
                "disabled"       => true,
                "gravar"         => false,
                "tamanho"        => 6,
                "custonSelect"   => "
                    CASE
                        WHEN Cliente_Data_Nasc <> '0000-00-00' 
                        THEN (SELECT YEAR(CURRENT_TIMESTAMP) - YEAR(Cliente_Data_Nasc) - 
                            (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(Cliente_Data_Nasc, 5))) 
                        ELSE NULL
                    END Cliente_Idade",
            ),
            "Cliente_Tipo" => array( 
                "tagname"  => "select",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Tipo",
                "id"       => "Cliente_Tipo",
                "label"    => "Classificação",
                "pesquisa" => true,
                "tamanho"  => 6,
                'options'=> array(
                    'Crianca'    => "Criança"     ,       
                    'Adolescente'=> "Adolescente" ,           
                    'Adulto'     => "Adulto"      ,       
                    'Idoso'      => "Idoso"       ,   
                ),
            ),
            "Cliente_Periodo" => array( 
                "tagname"  => "select",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Periodo",
                "id"       => "Cliente_Periodo",
                "label"    => "Preferência Período",
                "pesquisa" => true,
                "tamanho"  => 6,
                'options'=> array(
                    'Manha'  => "Manhã",       
                    'Tarde'  => "Tarde",           
                    'Noite'  => "Noite",       
                    'Sabado' => "Sábado",   
                ),
            ),
            "Cliente_Cod_Cid" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Cod_Cid",
                "id"       => "Cliente_Cod_Cid",
                "label"    => "Código CID",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Liberacao" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Liberacao",
                "id"       => "Cliente_Liberacao",
                "label"    => "Liberação (Código ou Nº Carteirinha)",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Endereco" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Endereco",
                "id"       => "Cliente_Endereco",
                "label"    => "Endereço",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Cep" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Cep",
                "id"       => "Cliente_Cep",
                "label"    => "CEP",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Contato_Fone1" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Contato_Fone1",
                "id"       => "Cliente_Contato_Fone1",
                "label"    => "Contato Fone(1)",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Fone1" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                // "type"  => "phone",
                "banco"    => "Cliente_Fone1",
                "id"       => "Cliente_Fone1",
                "label"    => "Fone(1)",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            
            "Cliente_Contato_Fone2" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Contato_Fone2",
                "id"       => "Cliente_Contato_Fone2",
                "label"    => "Contato Fone(2)",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Fone2" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Fone2",
                "id"       => "Cliente_Fone2",
                "label"    => "Fone(2)",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Contato_Celular1" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Contato_Celular1",
                "id"       => "Cliente_Contato_Celular1",
                "label"    => "Contato Cel(1)",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Celular1" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Celular1",
                "id"       => "Cliente_Celular1",
                "label"    => "Celular(1)",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Contato_Celular2" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Contato_Celular2",
                "id"       => "Cliente_Contato_Celular2",
                "label"    => "Contato Cel(2)",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Celular2" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Celular2",
                "id"       => "Cliente_Celular2",
                "label"    => "Celular(2)",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Responsavel" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Responsavel",
                "id"       => "Cliente_Responsavel",
                "label"    => "Responsável",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Cliente_Email" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Email",
                "id"       => "Cliente_Email",
                "label"    => "E-mail",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            
            "Cliente_Convenio" => array(
                "tagname"      => "select",
                "class"        => 'form-control ',
                "type"         => "db",
                "banco"        => "Cliente_Convenio",
                "id"           => "Cliente_Convenio",
                "label"        => "Convênio",
                "custonSelect" => "tab_convenios.Convenio_Desc",
                "custonFrom"   => "LEFT OUTER JOIN tab_convenios ON (tab_convenios.Convenio_Cod = tab_clientes.Cliente_Convenio)",
                "SQL"          => "SELECT Convenio_Cod, Convenio_Desc from tab_convenios",
                "SELECT_VALUE" => 'Convenio_Cod' ,
                "SELECT_NAME"  => 'Convenio_Desc',
                "pesquisa"     => true,
                "tamanho"      => 6,
            ),
            
            "Cliente_Observacao" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Cliente_Observacao",
                "id"       => "Cliente_Observacao",
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
    
    
    function lista_callback_data($valor)
    {
        if ($valor == "0000-00-00"){
            return "";
        }
        
        return date( 'd/m/Y', strtotime( $valor ) ) ; 
    }
    
    
    function getJavascript(){
        return "
            // ?? remover
            $(document).ready(
                function(){
                    //?? MASCARAS AQUI 
                    
                    $('#Cliente_Data_Nasc').change();
                }
            );
            
            var calcYearOld = function(birthday, target)
            {
                var date1 = birthday.valueAsDate;
                var date2 = new Date();
                var timeDiff = Math.abs(date2.getTime() - date1.getTime());
                var diffDays = Math.ceil(timeDiff / (1000 * 60 * 60 * 24 * 365)); 
                diffDays = diffDays > 1 ? diffDays -1 : diffDays;
                document.getElementById(target).value=(diffDays);
            };
        ";
    }

}


