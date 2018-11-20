<?php 
        include "conexao.php";
       
        $e = new conexao();
        $cli      = $_GET["cli"];
        $idprof   = $_GET["prof"];
        $data     = $_GET["dataini"];
        $datafim  = $_GET["datafim"];
        

        $sql = "SELECT Cli_Nome FROM tab_Clientes WHERE Cli_Cod = $cli limit 1";
        $nmcli = $e->executarNoBanco($sql);
        
        //nome cliente para salvar no banco        
        foreach ($nmcli as $key => $value) {
            $nm = $value['Cli_Nome'];
        }



        $query = "INSERT INTO tab_eventos (title,prof_id,cli_id ,start, end) VALUES ('$nm',$cli,$idprof, '$data','$datafim')";
           
        

        $exec = $e->executarNoBanco($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
       
        
?>