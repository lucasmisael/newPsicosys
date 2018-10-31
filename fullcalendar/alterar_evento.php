<?php 
        include "conexao.php";
        // $this->ver($_POST);
        $nome = $_POST['nome'];
        $data = $_POST['data'];
        $id   = $_POST['id'];  
        $query = "UPDATE `tab_eventos` SET `title`='$nome',`start`='$data' WHERE id = $id";
        /*$query = "UPDATE  `tab_eventos` SET (`title`, `start`) VALUES ('$nome', '$data')";*/
         
        $exec = $conexao->exec($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
       
        
?>