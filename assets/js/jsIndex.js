$(document).ready(function(){
 
 $('#edad').keyup(function(){
        this.value = (this.value + '').replace(/[^0-9]/g,'');
    });
 
 
  $("#ingresar").click(function(){
        var nombre = $("#nombre").val();
        var apellido = $("#apellido").val();
        var edad = $("#edad").val();
        var fecha = $("#fechaC").val();
        
	if( nombre.trim() === ''){
                    
                    $("#nombre").focus();
                    $("#respuesta").html("<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Debe de Ingresar el Nombre.!</strong></div>");
                    return false;
                }else{
                if( apellido.trim() === ''){
                    
                    $("#apellido").focus();
                    $("#respuesta").html("<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Debe de Ingresar el Apellido.!</strong></div>");
                    return false;
                }else{
                   
                   if( edad.trim() === ''){
                    
                    $("#edad").focus();
                    $("#respuesta").html("<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Debe de Ingresar la Edad.!</strong></div>");
                    return false;
                    }else{
                        
                        if( fecha.trim() === ''){
                    
                            $("#fecha").focus();
                            $("#respuesta").html("<div class='alert alert-success' role='alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Debe de Ingresar la fecha.!</strong></div>");
                            return false;
                            }else{
                                
                                jQuery.post("./insertar.php",{
                                nombre: nombre,
                                apellido: apellido,
                                edad: edad,
                                fecha: fecha
                                }, function(data){
                                    if(data = 1){
                                        $("#respuesta").html("<div class='alert alert-info' role='alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>Datos almacenados correctamente</strong></div>");
                                    }else{
                                       $("#respuesta").html("<div class='alert alert-danger' role='alert'><button type='button' class='close' data-dismiss='alert'>&times;</button><strong>¡Error Al Guardar Datos!</strong></div>"); 
                                    }
                                });

                            }

                    }
                   
                }
              } 
	});
        
        $("#mostrar").click(function(){
            
            
            jQuery.post("./mostrar.php",{
                                }, function(data){
                                  
                                        $("#mos").html(data);
                                   
                                });
            
        });
});
