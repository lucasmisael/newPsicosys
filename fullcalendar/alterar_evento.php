<?php 
        include "conexao.php";
        // $this->ver($_POST);
        $nome = $_POST["nome"];
        $data = $_POST["data"];
        $query = "UPDATE `tab_eventos` SET `title`='$nome',`start`='$data' WHERE id = 1";
        /*$query = "UPDATE  `tab_eventos` SET (`title`, `start`) VALUES ('$nome', '$data')";*/
        
        $exec = $conexao->exec($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
       
        
?>