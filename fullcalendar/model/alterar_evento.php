<?php 
        include "conexao.php";
        // $this->ver($_POST);
       
        // $nomecli  = $_GET["cli"];
        // $idprof   = $_GET["idcol"];
        // $idcli    = $_GET["idcli"];
        // $data     = $_GET["dataini"];
        // $datafim  = $_GET["datafim"];

        // var_dump($_GET);    
        $e = new conexao();

        $cli      = $_GET["cli"];
        $idprof   = $_GET["prof"];
        $data     = $_GET["dataini"];
        // $datafim  = $_GET["datafim"];
        $id       = $_GET['id'];
        $idTpDta  = $_GET["datafim"];
        $status   = $_GET['status']; 
        $valida = true; 

        $sql1 = "SELECT CONS_TEMPO FROM Tab_tpConsulta WHERE CONS_COD = $idTpDta limit 1";
        $aux = $e->executarNoBanco($sql1);
        foreach ($aux as $key => $value) {
            $datafim = $value ["CONS_TEMPO"];
        }
        
        $dtfim_soma = date( "Y-m-d H:i:s", strtotime($data)+(60*($datafim)) );


        $sql = "SELECT Cli_nome FROM tab_Clientes WHERE Cli_Cod = $cli limit 1";
        $nmcli = $e->executarNoBanco($sql);
        
        //nome cliente para salvar no banco        
        foreach ($nmcli as $key => $value) {
            $nm = $value['Cli_nome'];
        }

        if($status == 'C'){
            //Não deixa dar baixa em uma consulta futura
            $valida = ($data > date('Y-m-d H:i') ? false : true);  
            $mnsg = 'Não pode dar baixa em consultas futuras';
        }



        if($valida == false)
            echo "3";   
        else{
            $query = "UPDATE tab_eventos SET title='$nm',prof_id=$idprof, cli_id=$cli,start='$data',end='$dtfim_soma', id_tpconsulta=$idTpDta, STATUS= '$status'  WHERE id = $id";
            
            $exec = $e->executarNoBanco($query);                         
            if($exec){            
                echo "1";     
            }
            else{
                echo "0";
            }
        } 
        /*$query = "UPDATE  `tab_eventos` SET (`title`, `start`) VALUES ('$nome', '$data')";*/
         
 
        
       
        
?>