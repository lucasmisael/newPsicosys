<?php
    
    
    function makeHeather(){
        
        ?>
            
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>Pagina Inicial</title>
            
            <!-- Includes -->
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
            <link rel="stylesheet" type="text/css" media="screen" href="lib/bootstrap/css/bootstrap.min.css" />
            <link rel="stylesheet" href="lib/externos/bootstrap.min.css">
            <!-- <script src="lib/bootstrap/js/npm.js"></script> -->
            <script src="lib/externos/jquery.min.js"></script>
            <script src="lib/bootstrap/js/jquery-3.3.1.min.js"></script>
            <!-- //?? MASCARAS AQUI  -->
            <script src="lib/externos/bootstrap.min.js"></script>
            <link rel="stylesheet" type="text/css" media="screen" href="lib/bootstrap/css/PsicoSysCss.css"/>
            
            

            <meta http-equiv="cache-control" content="max-age=0" />
            <meta http-equiv="cache-control" content="no-cache" />
            <meta http-equiv="expires" content="0" />
            <meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
            <meta http-equiv="pragma" content="no-cache" />



         <!-- <script src="http://code.jquery.com/jquery-1.6.3.min.js"></script> -->
        <!-- <script type="text/javascript" charset="utf-8" src="lib/externos/jquery-3.3.1.min.js"></script> -->
            <!-- <script type="text/javascript" charset="utf-8" src="lib/script/datatables.js"></script> -->
            
            <!-- <script src="main.js"></script> -->
            
            <!-- DataTables -->
            <!-- <link rel="stylesheet" type="text/css" href="lib/Script/DataTables-1.10.18/css/dataTables.bootstrap.css"/> -->
            <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


            <!--********************************Inicio Menu ********************** -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <!--Link para pagina incial com nome do sistema -->
                    <div class="navbar-header">
                        <a href="menuPrincipal.php">
                            <img src="img/logo_PsicoSys.png" height="45px"  />
                        </a>
                    </div>
                    
                    <!-- Buttons para Atalhos -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    
                    <!-- DropDown Opções Colaboradores -->
                        <ul class="nav navbar-nav">
                            
                            <?php
                                $operacaoes = array(
                                    "Cadastrar",
                                    "Pesquisar"
                                );
                                
                                $tabelas = array(
                                    "Cliente"     ,
                                    "Colaborador" ,
                                    "Convenio"    ,
                                    "Usuario"     ,
                                );
                                
                                foreach ($operacaoes as $operacao) {
                                    echo "
                                        <li class='dropdown'>
                                            <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>$operacao <span class='caret'></span></a>
                                            <ul class='dropdown-menu'>";
                                                foreach ($tabelas as $tabela) {
                                                    echo "<li><a href='$operacao.php?tabela=$tabela'>$tabela</a></li>";
                                                }
                                            echo "</ul>
                                            </li> ";
                                }
                                
                                
                            ?>
                                <li class="dropdown">
                                    <a href="./home_calendar.php"  role="button" aria-haspopup="true" aria-expanded="false">Agendar <span class="caret"></span></a>
                                </li> 
                            </ul>
                            <ul class="navbar-right" style='margin-top:10px; margin-bottom:0px'>
                                <form action="index.php">
                                    <button class="btn btn-danger" action="index.php" onclick="destroySession">
                                        Sair
                                    </a>
                                </form>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            

            <script>
                function destroySession(){
                    session_destroy();
                }

                $(document).ready( function () {
                    $('#consultar').dataTable();
                } );
            </script>
        <?php
        
    }
    