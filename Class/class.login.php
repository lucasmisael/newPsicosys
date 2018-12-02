<?php
session_start();

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
            $database    =  "Newpsicosys"  ; // banco de dados 
            
            // Cria a conexao com o banco
            $conn = new mysqli($servername, $username, $password, $database);
        
            $resultado = mysqli_query($conn,"select * from tab_usuarios where usu_nome ='" . $usuario . "' or usu_email = '".$usuario."'and usu_senha = '" . $senha."'");
            $rows = mysqli_num_rows($resultado );
            
            
            if($rows > 0){
                $_SESSION['login'] = $usuario;
                // $_SESSION['senha'] = $password; 
                // $_SESSION['usr_login'] = $usuario;
                header("Location: ../menuPrincipal.php");
            }
            else{ 
                echo"<script> alert('Usuario ou senha Incorretos!') </script>";
                header("Location: ../index.php");
            }
        }
        




     