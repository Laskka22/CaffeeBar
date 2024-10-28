<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos_logeo.css?v=2.0">
    <title>Registro de usuarios</title>
    <!--<script src="scripts.js" defer></script>-->
</head>
<body>
      <div class="container">
            <h2>Registro de usuarios</h2>
            <form id= "borrarCampos" action="registrarBd.php" method='POST' onsubmit="return validateForm()">
                <label for="username_registro"><strong>Nombre Usuario:</strong></label> <!--ESte codigo realiza la activación de la caja de texto que en este caso se llama username_registro-->
                <input type="text" id="username_registro" name="username_registro" required><br> <!--El nombre required significa que para poder continuar con el proceso la caja de texto debe de ser diligenciada-->

                <label for="email_registro"><strong>Correo electrónico:</strong></label> <!--ESte codigo realiza la activación de la caja de texto que en este caso se llama username_registro-->
                <input type="email" id="email_registro" name="email_registro" required><br> <!--El nombre required significa que para poder continuar con el proceso la caja de texto debe de ser diligenciada-->

                <label for="pass_registro"><strong>Contraseña:</strong></label> <!--Este codigo realiza la activación de la caja de texto que en este caso se llama username_registro-->
                <input type="password" id="pass_registro" name="pass_registro" required><br> <!--El nombre required significa que para poder continuar con el proceso la caja de texto debe de ser diligenciada-->

                <label for="confirm_pass"><strong>Confirmar Contraseña:</strong></label> <!--Este codigo realiza la activación de la caja de texto que en este caso se llama username_registro-->
                <input type="password" id="confirm_pass" name="confirm_pass" required><br> <!--El nombre required significa que para poder continuar con el proceso la caja de texto debe de ser diligenciada-->

                <input type="submit" value="Registrar">
            </form>
        </div>
           
    </body>
</html>














        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
 
</html>