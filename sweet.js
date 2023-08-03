function alertsweet(){
            var usuario = document.getElementById("txtUsu").value;
            var contrasena = document.getElementById("txtContrasena").value;
                $.ajax({
                url:"Validar_RH.php",
                success:function(result){
                    if(result == "true"){
                        swal("Usuario Registrado con Exito!", "", "success");
                    }else{
                        window.location("LOGIN_RH.php");
                        swal("Contraseña o Usuario incorrectos!", "", "error");
                    }
                }
            })
            
        }