<?php

// DOCUMENTADO EM CLASS.COLABORADOR.PHP

require_once('Class/class.gn_tabela.php');

class colaborador extends gn_tabela 
{
    function __construct(){
        
        parent::__construct();
        
        $this->classe = "colaborador";
        
        $this->tabela = "tab_colaboradores";
        
        $this->chave = "Colaborador_Cod";
        
        $this->campos = array(
            "Colaborador_Desc" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Colaborador_Desc",
                "id"       => "Colaborador_Desc",
                "label"    => "Nome",
                "orderBy"  => true, //?? Pendente
                "type"     => "text",
                "required" => true,
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Colaborador_Status" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Colaborador_Status",
                "id"       => "Colaborador_Status",
                "label"    => "Status ",
                "callback" => "lista_callback_check",
                "type"     => "checkbox",
                "checked"  => true, // ?? para sempre vir checado
                "pesquisa" => true,
                "tamanho"  => 1,
                "data-toggle"=>"toggle",
                "data-onstyle" =>"success",
                "data-offstyle"=>"danger",
                "data-on"=>"Ativo",
                "data-off"=>"Inativo"


                // "data-height"=>"50"
            ),
            "Colaborador_Especialidade" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Colaborador_Especialidade",
                "id"       => "Colaborador_Especialidade",
                "label"    => "Especialidade",
                "type"     => "text",
                "pesquisa" => true,
                "tamanho"  => 6,
            ),
            "Colaborador_Cnpj_Cpf" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcpf' ,
                "banco"    => "Colaborador_Cnpj_Cpf",
                "id"       => "Colaborador_Cnpj_Cpf",
                "label"    => "CNPJ/CPF",
                "type"     => "text",
                "pesquisa" => false,
                "tamanho"  => 6,
            ),
            "Cliente_Tipo" => array( 
                "tagname"  => "select",
                "class"    => 'form-control selectmultiple' ,
                "banco"    => "Colaborador_TipoCrianca",
                 "id"      => "Colaborador_TipoCrianca",
                "label"    => "Atende",
                "pesquisa" => true,
                "multiple" =>"multiple",
                "tamanho"  => 6,
                'options'=> array(
                    'Crianca'    => "Criança"     ,       
                    'Adolescente'=> "Adolescente" ,           
                    'Adulto'     => "Adulto"      ,       
                    'Idoso'      => "Idoso"       ,   
                ),
            ),
            // "Colaborador_TipoCrianca" => array(
            //     "tagname"  => "input",
            //     "class"    => 'form-control select' ,
            //     "banco"    => "Colaborador_TipoCrianca",
            //     "id"       => "Colaborador_TipoCrianca",
            //     "callback" => "lista_callback_check",
            //     "label"    => "Criança",
            //     "type"     => "select",
            //     "checked"  => true, // ?? para sempre vir checado
            //     "pesquisa" => true,
            //     "tamanho"  => 6,
            // ),
            // "Colaborador_TipoAdolescente" => array(
            //     "tagname"  => "input",
            //     "class"    => 'form-control ' ,
            //     "banco"    => "Colaborador_TipoAdolescente",
            //     "id"       => "Colaborador_TipoAdolescente",
            //     "callback" => "lista_callback_check",
            //     "label"    => "Adolescente",
            //     "type"     => "checkbox",
            //     "checked"  => true, // ?? para sempre vir checado
            //     "pesquisa" => true,
            //     "tamanho"  => 3,
            // ),
            // "Colaborador_TipoAdulto" => array(
            //     "tagname"  => "input",
            //     "class"    => 'form-control ' ,
            //     "banco"    => "Colaborador_TipoAdulto",
            //     "id"       => "Colaborador_TipoAdulto",
            //     "callback" => "lista_callback_check",
            //     "label"    => "Adulto",
            //     "type"     => "checkbox",
            //     "checked"  => true, // ?? para sempre vir checado
            //     "pesquisa" => true,
            //     "tamanho"  => 3,
            // ),
            // "Colaborador_TipoIdoso" => array(
            //     "tagname"  => "input",
            //     "class"    => 'form-control ' ,
            //     "banco"    => "Colaborador_TipoIdoso",
            //     "id"       => "Colaborador_TipoIdoso",
            //     "callback" => "lista_callback_check",
            //     "label"    => "Idoso",
            //     "type"     => "checkbox",
            //     "checked"  => true, // ?? para sempre vir checado
            //     "pesquisa" => true,
            //     "tamanho"  => 3,
            // ),
            "Colaborador_Data_Nasc" => array(
                "tagname"  => "input",
                "class"    => 'form-control datepicker ' ,
                "banco"    => "Colaborador_Data_Nasc",
                "id"       => "Colaborador_Data_Nasc",
                "label"    => "Data Nascimento",
                "callback" => "lista_callback_data",
                "type"     => "date",
                "pesquisa" => true,
                "tamanho"  => 3,
                "onchange" => "calcYearOld(this, \"Colaborador_Idade\");",
            ),
            "Colaborador_Idade" => array(
                "tagname"        => "input",
                "class"          => 'form-control ' ,
                "banco"          => "Colaborador_Idade" ,
                "id"             => "Colaborador_Idade" ,
                "label"          => "Idade",
                "type"           => "text",
                "pesquisa"       => false,
                "disabled"       => true,
                "gravar"         => false,
                "tamanho"        => 3,
                "custonSelect"   => "
                    CASE
                        WHEN Colaborador_Data_Nasc <> '0000-00-00' 
                        THEN (SELECT YEAR(CURRENT_TIMESTAMP) - YEAR(Colaborador_Data_Nasc) - 
                            (RIGHT(CURRENT_TIMESTAMP, 5) < RIGHT(Colaborador_Data_Nasc, 5))) 
                        ELSE NULL
                    END Colaborador_Idade",
            ),
            "Colaborador_Endereco" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Colaborador_Endereco",
                "id"       => "Colaborador_Endereco",
                "label"    => "Endereço",
                "type"     => "text",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Colaborador_Cep" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcep ' ,
                "banco"    => "Colaborador_Cep",
                "id"       => "Colaborador_Cep",
                "label"    => "CEP",
                "type"     => "text",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Colaborador_Fone1" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskfone' ,
                "banco"    => "Colaborador_Fone1",
                "id"       => "Colaborador_Fone1",
                "label"    => "Fone(1)",
                "type"     => "text",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Colaborador_Fone2" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskfone' ,
                "banco"    => "Colaborador_Fone2",
                "id"       => "Colaborador_Fone2",
                "label"    => "Fone(2)",
                "type"     => "text",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Colaborador_Celular1" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcel ' ,
                "banco"    => "Colaborador_Celular1",
                "id"       => "Colaborador_Celular1",
                "label"    => "Celular(1)",
                "type"     => "text",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Colaborador_Celular2" => array(
                "tagname"  => "input",
                "class"    => 'form-control maskcel ' ,
                "banco"    => "Colaborador_Celular2",
                "id"       => "Colaborador_Celular2",
                "label"    => "Celular(2)",
                "type"     => "text",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Colaborador_Convenio" => array(
                "tagname"      => "select",
                "class"        => 'form-control ' ,
                "type"         => "db",
                "banco"        => "Colaborador_Convenio",
                "id"           => "Colaborador_Convenio",
                "label"        => "Convênio",
                "custonSelect" => "tab_convenios.Convenio_Desc",
                "custonFrom"   => "LEFT OUTER JOIN tab_convenios ON (tab_convenios.Convenio_Cod = tab_colaboradores.Colaborador_Convenio)",
                "SQL"          => "SELECT Convenio_Cod, Convenio_Desc from tab_convenios",
                "SELECT_VALUE" => 'Convenio_Cod' ,
                "SELECT_NAME"  => 'Convenio_Desc',
                "pesquisa"     => false,
                "tamanho"      => 3,
            ),
            "Colaborador_Conselho" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Colaborador_Conselho",
                "id"       => "Colaborador_Conselho",
                "label"    => "Conselho",
                "type"     => "text",
                "pesquisa" => false,
                "tamanho"  => 3,
            ),
            "Colaborador_Email" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Colaborador_Email",
                "id"       => "Colaborador_Email",
                "label"    => "E-mail",
                "type"     => "text",
                "pesquisa" => true,
                "tamanho"  => 3,
            ),
            "Colaborador_Observacao" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Colaborador_Observacao",
                "id"       => "Colaborador_Observacao",
                "label"    => "Observação",
                "type"     => "textarea",
                "pesquisa" => true,
                "tamanho"  => 3,
            )
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


