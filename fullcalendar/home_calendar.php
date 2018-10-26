<?php
        require_once("header.php");
        makeHeather();
?>

<html>
<head>
    <meta charset="utf-8">
    <meta lang="pt-BR">
    <title> Calendário Dinâmico com PHP + FullCalendar </title>
    
    <link rel='stylesheet' href='./fullcalendar.css' />
    <script src='./lib/jquery.min.js'></script>
    <script src='./lib/moment.min.js'></script>
    <script src='./fullcalendar.js'></script>
    
    <!-- script de tradução -->
    <script src='./locale/pt-br.js'></script>
        
    <script>
       $(document).ready(function() {	
           	
            //CARREGA CALENDÁRIO E EVENTOS DO BANCO
            $('#calendario').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                 // navLinks: true,
                editable: true,
                eventLimit: true, 
                events: 'eventos.php',           
                eventColor: '#a6bbf2'
            });	
            
            //CADASTRA NOVO EVENTO
            $('#novo_evento').submit(function(){
                //serialize() junta todos os dados do form e deixa pronto pra ser enviado pelo ajax
                var dados = jQuery(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "cadastrar_evento.php",
                    data: dados,
                    success: function(data)
                    {   
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
    <div id='calendario'>
        <br/>
        <form id="novo_evento" action="" method="post">
            Nome do Evento: <input type="text" name="nome" required/><br/><br/>            
            Data do Evento: <input type="date" name="data" required/><br/><br/>            
            <button type="submit"> Cadastrar novo evento </button>
        </form>
    </div>
</body>
</html>