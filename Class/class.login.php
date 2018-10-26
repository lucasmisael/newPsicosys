<?php

    // a classe de usuario nao sabe o que ela pode fazer, por isso chama a gn tabela
     require_once('class.gn_tabela.php');

        //parametros informados na tela de login
        $usuario = $_POST['login'];
        $senha = $_POST['senha'];

        //chama metodo TryLogin
        tryLogin($usuario, $senha);

        //verificar se usuario e senha informados estao no banco
        function tryLogin($usuario , $senha){
            $servername  =  "localhost" ; // Server em que esta o banco
            $username    =  "root"      ; // usuario do banco
            $password    =  ""          ; // senha do banco
            $database    =  "psicosys"  ; // banco de dados 
            
            // Cria a conexao com o banco
            $conn = new mysqli($servername, $username, $password, $database);
        
            $resultado = mysqli_query($conn,"select * from tab_usuarios where usuario_nome ='" . $usuario . "' and usuario_senha = '" . $senha."'");
            $rows = mysqli_num_rows($resultado );
            
            
            if($rows == 1){
                $_SESSION['login'] = $login;
                $_SESSION['senha'] = $password; 
                    header("Location: ../menuPrincipal.php");
            }
            else{ 
                header("Location: ../index.php");
                echo"<script> alert('Usuario ou senha Incorretos!') </script>";
            }
        }
        




     