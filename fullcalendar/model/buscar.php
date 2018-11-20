<?php 
    
    // require_once('Class/class.gn_tabela.php');
    include "conexao.php";
    
    class buscar extends conexao {

        function __construct() {

        }

        public function getClientes(){
            $SQL = "SELECT Cli_Cod,Cli_Nome  FROM tab_clientes order by Cli_Nome " ; 
            $exec = $this->executarNoBanco($SQL);

            foreach ($exec as $key => $value) {
                $arr[] = $value;
            }


        
            return json_encode($arr);
            //Conectando ao banco de dados
            
            
        }

        public function getProfissionais(){
            $SQL = "SELECT Prof_Nome, Prof_Cod  FROM tab_Profissionais order by Prof_Nome" ; 
            $exec = $this->executarNoBanco($SQL);

        
            return $exec;
            //Conectando ao banco de dados
            
            
        }
                        
    }   
        
?>