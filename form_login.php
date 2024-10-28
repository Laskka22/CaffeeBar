<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galeria Responsiva</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="estilos.css?v=3.0">
        
       
    <script src="https://kit.fontawesome.com/77c1873de3.js" crossorigin="anonymous"></script>
    </head>
    <body>
         <!-- Incluir el menú -->
            <?php include 'menu.php'; ?>

      
     
        <section id="logeo" class="container ">
          <div class="row">
            <div class="col-12 col-md-6">
             <img src="img/about.png" alt="Cargando" class="img-fluid">
          </div>
    
          <div class="col-12 col-md-6">  
            <h2>INICIAR SESIÓN </h2>
            <form>
                <div class="mb-3">
                <label for="username_registro" class="form-label">Nombre Usuario</label>
                  <input type="text" class="form-control" id="username_registro">
                </div>

                <div class="mb-3">
                  <label for="pass_registro" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="pass_registro">
                </div>
                
                <div class="mb-3 form-check">
                  <input type="checkbox" class="form-check-input" id="showPassword">
                  <label class="form-check-label" for="showPassword">Mostrar Contraseña</label>
                </div>

                <div class="texto">En caso de que no este inscrito haga clic en <a href="form_registrarse.php">Registrarse </a></div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                  <button type="submit">Enviar</button>
                  <button type="reset">Borrar</button>
                </div>  
            </div>    
          </form>