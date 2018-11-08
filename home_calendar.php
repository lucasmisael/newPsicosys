<?php
        // require_once('./Class/class.gn_tabela.php');
        require_once("fullcalendar/buscar.php");
        require_once("header.php");
        makeHeather();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-BR">
    <title> Eventos Psicosys </title>
    
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
    <script src='fullcalendar/lib/jquery.min.js'></script>
    <script src='fullcalendar/lib/moment.min.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- datepicker -->
    <link rel="stylesheet" type="text/css" href="lib/externos/datetimepicker/jquery.datetimepicker.css"/ >

    <script src="lib/externos/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>    
    <!-- script de tradução -->
    <script src='fullcalendar/locale/pt-br.js'></script>
        
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
                events: 'fullcalendar/eventos.php',           
                eventColor: '#a6bbf2',

                editable:true,
                eventClick:  function(event, jsEvent, view) {
                    

                    $("#nome").val(event.title);
                    // console.log(event);
                    // $("#prof_nome").val(event.PROF_NOME);
                    // $("#cli_nome").val(event.CLI_NOME);
                    $("#data").val(event.start._i);
                    $("#myModal").modal();

                    $('#submit_btn').hide();
                    $('#update_btn').show();
                    $('#delete_btn').show();
                    
                    funcoes(event);

                },
        
            }); 
            
            //CADASTRA NOVO EVENTO
            $('#novo_evento').submit(function(){
                //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
                var dados = jQuery(this).serialize();
                let url = "fullcalendar/cadastrar_evento.php?cli='"+$('#cliente').val()+"'&idcli='"+$('#idcli').val()+"'&prof='"+$('#colaborador').val()+"'&idcol='"+$('#idcol').val()+"'&dataini='"+$('#data').val()+"'"; 
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
                        }else{
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
                var url = "fullcalendar/alterar_evento.php?id="+event.id+"&nome='"+$('#nome').val()+"'&data='"+$('#data').val()+"'";     

                // var url = "fullcalendar/alterar_evento.php?id="+event.id+"&prof_nome='"+$('#prof_nome').val()+"'&cli_nome='"+$('#cli_nome').val()+"'&data='"+$('#data').val()+"'";     

                // alert(url);
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


            $(document).on('click', '#delete_btn', function(){
                
                var dados = jQuery(this).serialize();
                var url = "fullcalendar/deletar_evento.php?id="+event.id;     

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
            });
        
            //DATE TIME PARA CALENDARIO
            $('#data').datetimepicker();        

       }); 

       
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
                       <!--  Profissional: <input id="prof_nome" type="text" name="prof_nome" class="form-control" required/><br/><br/>
                        Cliente: <input id="cli_nome" type="text" name="cli_nome" class="form-control" required/><br/><br/>             -->
                       <!-- COMBOBOX PROFISSIONAL -->
                        Cliente: 
                         <input type='text'  placeholder='Digite o nome do Cliente' id="cliente" class='flexdatalist form-control' data-min-length='1' multiple='multiple'  list='clientes'  name='str_clientes' >
                        <datalist >
                        <?php 

                            $a = new buscar();
                            $cli = $a->getClientes();

                           foreach ($cli as $key => $value) {
                            
                            echo '<option value="'.$value['Cliente_Desc'].'""><input id="idcli" type="hidden" value="'.$value['Cliente_Cod'].'"></option>';
                               
                           }
                            
                            

                        ?>

                        </datalist><br/><br/>
                        <!-- COMBOBOX CLIENTE -->
                        Profissional:
                        <input type='text' id="colaborador"  placeholder='Digite o nome do Profissional' class='flexdatalist form-control' data-min-length='1' multiple='multiple'  list='colaborador'  name='str_colaborador'>
                        <datalist >
                        <?php 

                            
                            $col = $a->getProfissionais();

                           foreach ($col as $key => $value) {
                            
                            echo '<option value="'.$value['Colaborador_Desc'].'""><input id="idcol" type="hidden" value="'.$value['Colaborador_Cod'].'"></option>';
                               
                           }
                            
                            

                        ?>
                        </datalist><br/><br/>
                        <!-- CALENDARIO -->
                        Data do Evento: <input id="data" type="text" name="data" class="form-control" required/>
                                                 
                    </div>
                     <div id="modal-footer" class="modal-footer">
                        <button type="submit" id="submit_btn" class="btn btn-primary btn-lg"> Cadastrar </button>
                        <button type="button" id="update_btn" class="btn btn-info btn-lg" style="display: none;">Alterar</button>
                        <button type="button" id="delete_btn" class="btn btn-danger btn-lg" style="display: none;">Excluir</button>
                    </div>        
                </form>
            </div>
        </div>
    </div>


</body>

</html>