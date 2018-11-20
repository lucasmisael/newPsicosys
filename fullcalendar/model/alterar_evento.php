<?php 
        include "conexao.php";
        // $this->ver($_POST);
       
        // $nomecli  = $_GET["cli"];
        // $idprof   = $_GET["idcol"];
        // $idcli    = $_GET["idcli"];
        // $data     = $_GET["dataini"];
        // $datafim  = $_GET["datafim"];


        $e = new conexao();
        $cli      = $_GET["cli"];
        $idprof   = $_GET["prof"];
        $data     = $_GET["dataini"];
        $datafim  = $_GET["datafim"];
        $id       = $_GET['id'];


        $sql = "SELECT Cliente_Desc FROM tab_Clientes WHERE Cliente_Cod = $cli limit 1";
        $nmcli = $e->executarNoBanco($sql);
        
        //nome cliente para salvar no banco        
        foreach ($nmcli as $key => $value) {
            $nm = $value['Cliente_Desc'];
        }


        $query = "UPDATE tab_eventos SET title='$nm',prof_id=$idprof, cli_id=$cli,start='$data',end='$datafim' WHERE id = $id";
        /*$query = "UPDATE  `tab_eventos` SET (`title`, `start`) VALUES ('$nome', '$data')";*/
         
 
        $exec = $e->executarNoBanco($query);                         
        
        if($exec){            
            echo "1";     
        }
        else{
            echo "0";
        }
       
        
?>