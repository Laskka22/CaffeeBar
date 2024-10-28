<?php
    include("conexion.php");/*conectamos la base de datos*/
    /*La variable $_SERVER es una variable de entorno superglobal que contiene toda la informacion sobre los encabezados, rutas y ubicaciones de los scripts.
    $_SERVER['REQUEST_METHOD'], almacena el metodo http con el cual se hozo la solicitud actual, los mas comunes son POST y GET $_POST es una variable super global, la cual especifica que almacena los datos enviados a trave del formulario utilizando el método POST */

    if ($_SERVER['REQUEST_METHOD']==='POST') {
        $username_registro=$_POST['username_registro'];
        $email_registro=$_POST['email_registro'];
        $pass_registro=$_POST['pass_registro'];
        $confirm_pass=$_POST['confirm_pass'];

        //verificar que las contraseñas coincidan//

        if($pass_registro===$confirm_pass) {
            $password=password_hash($pass_registro, PASSWORD_BCRYPT); //esta funcion permite encriptar el password//
            
            /*prueba imprimir los datos antes de insertarlos a la base de datos
            echo "username: $username_registro <br>";
            echo "email: $email_registro <br>";
            echo "contraseña: $password <br>";*/

            $chequear_User=$conn->prepare("SELECT * FROM REGISTRO WHERE username_registro=?");
            $chequear_User->bind_param("s", $username_registro); //vincular el parametro $username_registro//
            $chequear_User->execute(); //Ejecuta la consulta//
            $resultado= $chequear_User->get_result(); //obtiene el resultado de la consulta//

            if($resultado->num_rows>0) {
                //si el nombre de usuario ya existe

                echo '<script>alert("El nombre de usuario ya existe. Por favor elige otro.");</script>';
                echo '<script>window.location.href="form_refistrarse.php";</script>';

            }//cierra el if cuando existe el nombre de usuario//

            else {
                //si no existe el usuario, inserta la base de datos//
                $insertar_bd=$conn->prepare("INSERT INTO registro ( username_registro, email_registro, pass_registro) VALUES (?,?,?)");

                if($insertar_bd->execute([$username_registro, $email_registro, $password])) {
                    header(header: "location: form_login.php"); //redirecciona a la pagina del logueo//
                }//cierra el if donde permite insertar datos a la BD//
                else {
                    echo "Error" .$insertar_bd->error;
                }

            }//cierra el else en caso de que no exista el nombre de usuario en la base de datos

        }/*cierra el if de comparacion de las contraseñas*/
        else {
            echo '<script>alert("Las contraseñas nop coiciden")</script>';
            echo '<script>window.location.href="form_registrarse.php</script>';
        }
    } /*Cierra el ir principal de la comparacion del metodo POST*/
   
?>