<?php 
        include "conexao.php";
       
        $e = new conexao();
        $cli      = $_GET["cli"];
        $idprof   = $_GET["prof"];
        $data     = $_GET["dataini"];
        $datafim  = $_GET["datafim"];
        
        $dtfim_soma = date( "Y-m-d H:i:s", strtotime($data)+(60*($datafim)) );

        $sql = "SELECT Cli_Nome FROM tab_Clientes WHERE Cli_Cod = $cli limit 1";
        $nmcli = $e->executarNoBanco($sql);
        
        //nome cliente para salvar no banco        
        foreach ($nmcli as $key => $value) {
            $nm = $value['Cli_Nome'];
        }


       /* //Verificar se existe evento cadastrado para Profissional no horario informado
        $ev = "SELECT id FROM tab_eventos WHERE start = '$data' AND prof_id = '$idprof'";
        $ex = $e->executarNoBanco($ev);
        
        var_dump($ex->num_rows);*/

        /*if($ex->num_rows)*/
            
        // $a = strtotime($data.' +'.$datafim.' minutes');
        // var_dump($data);

        // var_dump($dtfim_soma); 
        $query = "INSERT INTO tab_eventos (title,prof_id,cli_id ,start, end) VALUES ('$nm',$cli,$idprof, '$data','$dtfim_soma')";



           
        

        $exec = $e->executarNoBanco($query);                         
        
        //Gravado com sucesso
        if($exec)            
            echo "1";     
        //Já existe evento no horario informado para o colaborador informado
        elseif($ev)
        	echo"2";
        //Erro 
        else
            echo "0";
        
       	
        
?>