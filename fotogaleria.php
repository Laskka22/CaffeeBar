<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
   
  </head>
  <body>
    <!--Incluir a menu.php-->
    <?php include 'menu.php'; ?>


        <section id="galeria">
        <div class="text-center p-5">
            <h1>Foto-GALERIA</h1>
            <p>Ven y conoce nuestros productos artesanales 100% hechos en la región del eje cafetero</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h3 class="text-center">Café Americano</h3>
                <img src="img/americano.jpg" alt="Cargando" data-bs-toggle="modal" data-bs-target="#imageModal" data-title="Café Americano" data-description="El café americano o american coffee es un tipo de preparación de procedencia estadounidense, en la que se diluye el café espresso en agua caliente, reduciendo así la intensidad de su sabor" data-price="$4.500">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Bombon</h3>
                <img src="img/cafe_bombon.jpg" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Carajillo</h3>
                <img src="img/carajillo.png" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Latte</h3>
                <img src="img/late.jpeg" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Mocachino</h3>
                <img src="img/mocachino_caliente.jpg" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Jamaiquino</h3>
                <img src="img/jamaiquino_frio.png" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Freddo</h3>
                <img src="img/freddo_frio.jpeg" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Frapuchino</h3>
                <img src="img/frapuchino_frio.jpg" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Azteca</h3>
                <img src="img/azteca_frio.jpeg" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Irlandes</h3>
                <img src="img/irlandes_frio.jpg" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café Mochachino Frío</h3>
                <img src="img/mocachino_frio.jpg" alt="Cargando...">
            </div>
            <div class="col-sm-12 col-md-6 col-lg-4">
                <h3 class="text-center">Café</h3>
                <img src="img/menu-3.jpg" alt="Cargando...">
            </div>
        </div>
    </section>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<!--Creación ventana modal-->

<!--Button tigger nodal-->

    <div class="modal fade" id="imageModal"     tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Cafe Americano</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" alt="" id="modalImage" class="img-fluid">
                    <p id="modalDescription" class="mt-3"></p>
                    <p><strong>Precio:</strong> <span id="modalPrice"></span></p>
                </div> 
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

            <script>
            // Obtener el modal y los elementos que serán actualizados
            const imageModal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalTitle = document.getElementById('modalTitle');
            const modalDescription = document.getElementById('modalDescription');
            const modalPrice = document.getElementById('modalPrice');
      
            // Añadir evento al modal para cuando se muestra
            imageModal.addEventListener('show.bs.modal', function (event) {
              const button = event.relatedTarget; // Botón que activó el modal
              const imgSrc = button.getAttribute('src');
              const title = button.getAttribute('data-title');
              const description = button.getAttribute('data-description');
              const price = button.getAttribute('data-price');
      
              // Actualizar el contenido del modal
              modalImage.src = imgSrc;
              modalTitle.textContent = title;
              modalDescription.textContent = description;
              modalPrice.textContent = price;
            });
          </script>
          <!--Incluir a menu.php-->
            <?php include 'footer.php'; ?>
  </body>
</html>