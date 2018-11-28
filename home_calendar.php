    <?php
            // require_once('./Class/class.gn_tabela.php');
            require_once("fullcalendar/model/buscar.php");
            require_once("header.php");
            makeHeather();
    ?>

    <html>
    <head>
        <meta charset="utf-8">
        <meta lang="pt-BR">
        <title> Eventos Psicosys </title>
        
        <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
        <!-- <script src='fullcalendar/lib/jquery.min.js'></script> -->
        <!-- <script src="./lib/externos/jquery.min.js"></script> -->
        <script src='fullcalendar/lib/moment.min.js'></script>
        <script src='fullcalendar/fullcalendar.js'></script>

        <!-- <script src="../lib/bootstrap/js/jquery-3.3.1.min.js"></script> -->
            <!-- <script src="lib/externos/bootstrap.min.js"></script> -->

        <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
      
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

        <!-- datepicker -->
        <link rel="stylesheet" type="text/css" href="lib/externos/datetimepicker/build/jquery.datetimepicker.min.css"/ >

        <script src="lib/externos/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>    
        <!-- script de tradução -->
        <script src='fullcalendar/locale/pt-br.js'></script>
       

        <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

            
        <script>


           $(document).ready(function() {   
                
                //CARREGA CALENDÁRIO E EVENTOS DO BANCO
                $('#calendario').fullCalendar({
                    header: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'month,agendaWeek,agendaDay'
                    },
                     
                    editable: true,
                    eventLimit: true, 
                    events: 'fullcalendar/model/eventos.php',           
                    eventColor: '#a6bbf2',

                    editable:true,
                    eventClick:  function(event, jsEvent, view) {
                        
                        console.log(event);
                        $("#cliente").val(event.cli_id);
                        $("#colaborador").val(event.prof_id);
                        
                        $("#data").val(event.start._i);
                        $("#datafim").val(event.id_tpconsulta);
                        $("#myModal").modal();

                        $('#submit_btn').hide();
                        $('#update_btn').show();
                        $('#delete_btn').show();
                        $('#atender_btn').show();
                        $('#div_status').show();
                        
                        funcoes(event);

                    },
                    
                }); 
                
                //CADASTRA NOVO EVENTO
                $('#novo_evento').submit(function(){
                    //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
                   
                    var dados = jQuery(this).serialize();

                    
                    var url = "fullcalendar/model/cadastrar_evento.php?cli="+$('#cliente').val()+"&prof="+$('#colaborador').val()+"&dataini="+$('#data').val()+"&datafim="+$('#datafim').val(); 
                    // var url = 'fullCalendar/model/cadastrar_evento.php?id=1'
                    
                    $.ajax({
                        type: "GET",
                        url: url,
                        data: dados,
                        success: function(data)
                        {   
                            alert(url);
                            
                            
                            if(data == "1"){
                                // alert("Cadastrado com sucesso! ");
                                //atualiza a página!
                                location.reload();
                            }
                            else if(data == "2"){
                                 alert("O colaborador informado não poderá atender no horário informado!    ")   
                            }

                            else{
                                alert("Houve algum problema.. ");
                            }
                        }

                    });                
                       
                    return false;
                }); 
                
                //funcoes Evento
             function funcoes(event){
                var e = event;
                
                $(document).on('click', '#update_btn', function(){
                    
                    var dados = jQuery(this).serialize();
                    // var url = "fullcalendar/model/alterar_evento.php?id="+event.id+"&nome='"+$('#nome').val()+"'&data='"+$('#data').val()+"'";     
                    /*var url = "fullcalendar/model/alterar_evento.php?cli='"+$('#cliente').val()+"'&idcli='"+$('#idcli').val()+"'&prof='"+$('#colaborador').val()+"'&idcol='"+$('#idcol').val()+"'&dataini='"+$('#data').val()+"'&datafim="+$('#datafim').val()+"&id="+event.id; */

                    var url = "fullcalendar/model/alterar_evento.php?cli="+$('#cliente').val()+"&prof="+$('#colaborador').val()+"&dataini="+$('#data').val()+"&datafim="+$('#datafim').val()+'&id='+event.id; 

                    console.log(url);
                    $.ajax({
                        type: 'GET',
                        url: url,
                        data: dados,
                        success: function(data){
                            // alert(url);
                            if(data == "1"){
                                // alert("Alterado com sucesso! ");
                                //atualiza a página!
                                location.reload();
                            }else{
                                alert("Houve algum problema.. ");
                            }


                        }
                    });     
                });


                $(document).on('click', '#delete_btn', function(){
                    
                    var dados = jQuery(this).serialize();
                    var url = "fullcalendar/model/deletar_evento.php?id="+event.id;     

                    alert(url);
                    $.ajax({
                        type: 'GET',
                        url: url,
                        data: dados,
                        success: function(data){
                            
                            if(data == "1"){
                                // alert("Alterado com sucesso! ");
                                //atualiza a página!
                                location.reload();
                            }else{
                                alert("Houve algum problema.. ");
                            }
                        }
                    });     
                });

                
             }   



            $("#myBtn").click(function(){
                $("#myModal").modal();
                $('#submit_btn').show();
                $('#update_btn').hide();
                $('#delete_btn').hide();
            });
        
            //DATE TIME PARA CALENDARIO
            $('#data').datetimepicker();        
            // $('#datafim').datetimepicker();        

           }); 

           

            $(document).ready(function() {
                $('.js-example-basic-single').select2({ width: '100%' });
            });

           

            function consultas(){

                url = "./Pesquisar.php?tabela=CONSULTA";
                $( location ).attr("href", url);
           
            }
        </script>
        
        <style>
            #calendario{
                position: relative;
                width: 70%;
                margin: 0px auto;
            }        
        </style>
        
    </head>
    <body>    
        <div class="container" >
            <button type="button" class="btn btn-primary btn-lg" id="myBtn" >Incluir novo evento</button>
            <button type="button" onclick="consultas()" class="btn btn-default btn-lg" id="myBtn" >Visualizar eventos</button>
        </div>
        <br>
        <div id='calendario'></div>

        <br/>
        
        <div id="myModal" class="modal fade">
            <div class="modal-dialog">        
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                        <h4 id="modalTitle" class="modal-title"></h4>
                    </div> 
                    <form id="novo_evento" action="" method="post">
                        <div id="modalBody" class="modal-body">        
                            <div id="div_status"style="display: none" >
                                <label for="status">Status:</label> <br>
                                <select class="form-control">
                                    <option value="A">Aberto</option>    
                                    <option value="C">Consulta Efetuada</option>    
                                    <option value="F">Falta</option>    
                                    <option value="D">Desistência</option>    
                                </select>
                            </div>
                            <br>
                            <!-- COMBOBOX CLIENTES -->
                            <label for="cliente">Cliente:</label> <br>
                            <select id="cliente" class="js-example-basic-single form-control" name="cliente">
                            <?php 
                                $a = new buscar();
                                $cli = $a->getClientes();
                            
                                    
                                $cli2 = json_decode($cli,true);
                                
                               foreach ($cli2 as $key => $value) {
                             
                                echo "<option value='".$value['Cli_Cod']."'>".$value['Cli_Nome']."</optin>

                                ";
                                

                               }
                                
                                

                            ?>
                             
                            </select><br><br>
                            <!-- COMBOBOX PROFISSIONAIS -->
                            <label for="colaborador">Profissional::</label> <br>
                            <select id="colaborador" class="js-example-basic-single form-control " name="colaborador">    
                            <?php 

                                
                               $col = $a->getProfissionais();

                               foreach ($col as $key => $value) {
                                
                               echo '<option value="'.$value['Prof_Cod'].'">'.$value['Prof_Nome'].'</option>';
                                
                               }
                                
                                

                            ?>

                            </select><br><br>

                            <!-- CALENDARIO -->
                           <label for="data"> Data inicial do Evento:</label> <input id="data" type="text" name="data" class="form-control date" required/> <br>
                            <!-- COMBOBOX TIPO CONSULTAS -->
                            <label for="datafim"> Tipo de Consulta:</label> <select id="datafim" name="datafim" class="form-control">
                            <?php 

                                
                                $con = $a->getConsultas();


                               foreach ($con as $key => $value) {
                                var_dump( $value);
                                
                                    echo '<option value="'.$value['CONS_COD'].'">'.$value['CONS_DESC'].'</option>';
                                
                               }
                                
                                

                            ?> 

                            </select>
                                                     
                        </div>
                         <div id="modal-footer" class="modal-footer">
                            <button type="submit" id="submit_btn" class="btn btn-primary btn-lg"> Cadastrar </button>
                            <button type="button" id="update_btn" class="btn btn-default btn-lg" style="display: none;">Alterar</button>
                            <button type="button" id="delete_btn" class="btn btn-danger btn-lg" style="display: none;">Excluir</button>
                            <button type="button" id="atender_btn" class="btn btn-success btn-lg" style="display: none;">Atender</button>
                        </div>        
                    </form>
                </div>
            </div>
        </div>


    </body>

    </html>