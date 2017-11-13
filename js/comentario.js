$("#boton-enviar").click(function(event){
            var error = 0;
            var regex = /[\w-\.]{2,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;


            var url = "index.html"; 


            $('.form-control').each(function(i, elem){
                    if($(elem).val().trim() == ''){
                        $(elem).css("border", "2px solid rgba(255,0,0,0.5)");
                        error++;
                        }
                    else{
                        $(elem).css("border", "0px");
                    }
                
                });
            
            if(error > 0){
                event.preventDefault();
                }
                else
                {
                    event.preventDefault();

                var correo = $('#correo').val();
                var nombre = $('#nombre').val();
                var comentario = $('#comentario').val();

                $.ajax({
                    type: "POST",
                    url: "Funcionalidad/hacer_comentario.php",
                    data: ('correo='+correo+'&nombre='+nombre+'&comentario='+comentario),
                    success: function(respuesta){
                        if(respuesta==1)
                        {
                            $(location).attr('href',url);
                        }
                        else if(respuesta==0)
                        {
                           alert('no');
                        }
                       
                    }

                }) 
                }
    });
