<?php 
        include "conexao.php";
        
        echo '<pre>';
           print_r($_GET);
        echo '</pre>';
        $nome = $_POST["nome"];
        // $nomeprof = $_POST["prof_nome"];
        // $nomecli = $_POST["cli_nome"];
        $data = $_POST["data"];

        
        $query = "INSERT INTO `tab_eventos` (`title`, `start`) VALUES ('$nome', '$data')";
        // $query = "INSERT INTO `tab_eventos` (`PROF_NOME`,`CLI_NOME` ,`start`) VALUES ('$nomeprof','$nomecli', '$data')";
        
        $exec = $conexao->exec($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
       
        
?>