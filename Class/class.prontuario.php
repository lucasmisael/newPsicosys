<?php

// DOCUMENTADO EM CLASS.CONVENIO.PHP

require_once('Class/class.gn_tabela.php');

class prontuario extends gn_tabela 
{
    function __construct(){
        
        parent::__construct();
        
        $this->classe = "prontuario";
        
        $this->tabela = "tab_prontuarios";
    
        $this->chave = "Pron_Id";
        
        $this->campos = array(
            "Pron_Profissional" => array(
                "tagname"   => "input",
                "class"     => 'form-control ' ,
                "banco"     => "Pron_Profissional",
                "id"        => "Pron_Profissional",
                "label"     => "Profissional",
                "orderBy"   => true, //?? Pendente
                "required"  => true,
                "pesquisa"  => true,
                "readonly"  => true,
                "tamanho"   => 6,
            ),
            "Pron_Cliente" => array(
                "tagname"      => "select",
                "class"        => 'form-control ',
                "type"         => "db",
                "banco"        => "Pron_Cliente",
                "id"           => "Pron_Cliente",
                "label"        => "Cliente",
                "custonSelect" => "tab_clientes.Pron_Cliente",
                "custonFrom"   => "LEFT OUTER JOIN tab_clientes ON (tab_clientes.Pron_Cliente = tab_prontuarios.Pron_Cliente)",
                "SQL"          => "SELECT Cli_Cod, Cli_Nome from tab_clientes",
                "SELECT_VALUE" => 'Cli_Cod' ,
                "SELECT_NAME"  => 'Cli_Nome',
                "pesquisa"     => false,
                "tamanho"      => 6,
            ),
            "Pron_DataHora" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Pron_DataHora",
                "id"       => "Pron_DataHora",
                "label"    => "Data e Hora",
                "pesquisa" => true,
                "readonly" => true,
                "tamanho"  => 6,
            ),
            "Pron_Desc" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "Pron_Desc",
                "id"       => "Pron_Desc",
                "label"    => "Prontuário",
                "pesquisa" => true,
                "tamanho"  => 12,
            ),
        );
    }
 function lista_callback_check($vl){
        //?? COMENTADO PARA EN.... O CLIENTE
        


  $char =  "<i class='fas fa-circle'></i>";

        if ($vl == 'on'){
            $color = '#369939'    ;
            $this->status = true;

            
        } else {
           $color = '#b22222'      ;
           $this->status = false;
           
        }
        
        
        return "
            <span  
                style='
                    font-size : 20px;
                    color     : $color;
                '>
                $char
            </span>
        ";
    }
    
    
    
}
