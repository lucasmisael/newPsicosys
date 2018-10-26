<?php
        require_once("header.php");
        makeHeather();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-BR">
    <title> Calendário Dinâmico com PHP + FullCalendar </title>
    
    <link rel='stylesheet' href='fullcalendar/fullcalendar.css' />
    <script src='fullcalendar/lib/jquery.min.js'></script>
    <script src='fullcalendar/lib/moment.min.js'></script>
    <script src='fullcalendar/fullcalendar.js'></script>

     <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- <script type="text/javascript" src="bootstrap-datepicker.de.js" charset="UTF-8"></script> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



  <!-- datepicker -->
<link rel="stylesheet" type="text/css" href="lib/externos/datetimepicker/jquery.datetimepicker.css"/ >
<!-- <script src="lib/externos/datetimepicker/jquery.js"></script> -->
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
                 // navLinks: trçue,
                editable: true,
                eventLimit: true, 
                events: 'fullcalendar/eventos.php',           
                eventColor: '#a6bbf2',

                
             eventClick:  function(event, jsEvent, view) {
                // console.log(event.start._i);
                $("#nome").val(event.title);
                $("#data").val(event.start._i);
                // $('#modalBody').html(event.description);
            //     $('#eventUrl').attr('href',event.url);
            //     $('#calendarModal').modal();
                $("#myModal").modal();
            },
            
            // editable: true,ç8
            // eventLimit: true // allow "more" link when too many events
            }); 
            
            //CADASTRA NOVO EVENTO
            $('#novo_evento').submit(function(){
                //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
                var dados = jQuery(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "fullcalendar/cadastrar_evento.php",
                    data: dados,
                    success: function(data)
                    {   
                        console.log(data);
                        if(data == "1"){
                            alert("Cadastrado com sucesso! ");
                            //atualiza a página!
                            location.reload();
                        }else{
                            alert("Houve algum problema.. ");
                        }
                    }
                });                
                return false;
            }); 
       }); 

    //   $(document).ready(function(){
    //     $("#btn_incluir").click(function(){
    //         $("#modalcadastro").modal();
    //     });
    // });

   
        $(document).ready(function(){
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
            <div id="modalBody" class="modal-body">        
                <form id="novo_evento" action="" method="post">
                    Nome do Evento: <input id="nome" type="text" name="nome" class="form-control" required/><br/><br/>            
                    Data do Evento: <input id="data" type="text" name="data" class="form-control" required/><br/><br/>            
                     
            </div>
                 <div id="modal-footer" class="modal-footer">
                    <button type="submit" href="fullcalendar/cadastrar_evento.php" class="btn btn-primary btn-lg"> Cadastrar novo evento </button>
                </div>        
            </form>
        </div>
    </div>
</div>



</body>

</html>