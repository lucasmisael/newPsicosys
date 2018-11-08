<?php 
    
    // require_once('Class/class.gn_tabela.php');
    include "conexao.php";
    
    class buscar extends conexao {

        function __construct() {

        }

        public function getClientes(){
            $SQL = "SELECT Cliente_Cod,Cliente_Desc  FROM tab_clientes " ; 
            $exec = $this->executarNoBanco($SQL);

        
            return $exec;
            //Conectando ao banco de dados
            
            
        }

        public function getProfissionais(){
            $SQL = "SELECT Colaborador_Desc, Colaborador_Cod  FROM tab_colaboradores " ; 
            $exec = $this->executarNoBanco($SQL);

        
            return $exec;
            //Conectando ao banco de dados
            
            
        }
                        
    }   
        
?>