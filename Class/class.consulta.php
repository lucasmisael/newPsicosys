<?php

// a classe de usuario nao sabe oque ela pode fazer, por isso chama a gn tabela
require_once('Class/class.gn_tabela.php');

// classe de usuario recebe os metodos de gn_tabela
class consulta extends gn_tabela 
{
    // construtor eh chmado automaticamente ao instanciar a classe, neste caso, o construtor de GN_TABELA apenas
    // cria as variaveis
    function __construct(){
        
        // chama o construtor do pai, o pai eh gn_tabela, que criara os campos
        parent::__construct();
        
        // nome da classe
        $this->classe = "Consulta";
        
        // nome da tabela
        $this->tabela = "tab_eventos";
        
        // chave da tabela
        $this->chave = "id";
        
        // campos da tabela
        $this->campos = array(
            "title" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "title",
                "id"       => "title",
                "label"    => "Cliente",
                "pesquisa" => true,
                "required" => true,
                "tamanho"  => 6
            ),

            "start" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "start",
                "id"       => "start",
                "label"    => "Data Consulta",
                "pesquisa" => true,
                "required" => true,
                "tamanho"  => 6
            ),
             "end" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "end",
                "id"       => "end",
                "label"    => "Data Fim consulta",
                "pesquisa" => false,
                "required" => true,
                "tamanho"  => 6
            ),
           "prof_id" => array(
                "tagname"  => "input",
                "class"    => 'form-control ' ,
                "banco"    => "prof_id",
                "id"       => "prof_id",
                "label"    => "Profissional",
                "pesquisa" => false,
                "required" => true,
                "tamanho"  => 6
            ),
        );
        
    }

     function lista_callback_check($vl){
        //?? COMENTADO PARA EN.... O CLIENTE
        


        if ($vl == 'on'){
            $color = '#369939'    ;
            // $char  = "&#9745;"  ;
            $char = '<i class="fas fa-check-circle"></i>';
            $this->status = true;

            
        } else {
           $color = '#b22222'      ;
           $char = '<i class="fas fa-times-circle"></i>';
           $this->status = false;
           
        }
        
        
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
