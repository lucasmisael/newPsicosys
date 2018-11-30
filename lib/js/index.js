
    
    function calcYearOld (birthday){
        uhasihdihasidha
        return date;
    }
    
    var calcYearOld = function(birthday)
    {

        var date1 = birthday.valueAsDate;
        var date2 = new Date();
        var timeDiff = Math.abs(date2.getTime() - date1.getTime());
        var diffDays = Math.ceil(timeDiff / (1000 * 60 * 60 * 24 * 365)); 
        console.log (diffDays);
    }; 
    
    var documentoPronto = function (){
        
    }; 
    
    
    $(document).ready(documentoPronto);
    
    

    $(document).ready( function () {
        
        //inicia Data table
        $('#consultar').dataTable();
        
        
        //Mascara CPF
        $(".maskcpf").mask('000.000.000-00', {reverse: true});
        //Mascara CNPJ
        $(".maskcnpj").mask("99.999.999/9999-99" , {reverse: true});
        //Mascara CEP
        $(".maskcep").mask('00.000-000', {reverse: true});
        //Mascara Telefone Fixo
        $(".maskfone").mask("(00) 0000-0000" , {reverse: false});
        //Mascara Celular
        $(".maskcel").mask("(00) 00000-0000" , {reverse: false});

        //calendario 
        var datepicker = $('.datepicker').datepicker({
            dateFormat: 'yy-mm-dd',
            changeMonth: true,
            changeYear: true
        });

        
        //abre calendario ao clicar no campo
        $('.datepicker').focus(function() {
          datepicker.open(); 
        });
        
       //checkbox 
        $('.checkbox').bootstrapToggle();

         $('.validate').cpfcnpj({
                mask: true,
                validate: 'cpfcnpj',
                event: 'blur',
                // validateOnlyFocus: true,
                handler: '.btn',
                ifValid: function (input) { input.removeClass("error"); },
                ifInvalid: function (input) { input.addClass("error"); }
            });
      
      

    } );

    



     
    function destroySession(){
       session_destroy();
    }
