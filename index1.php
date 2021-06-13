<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toner Compatible y Cartuchos de Tinta Baratos | MasqueToners</title>
    <link href="./style.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/png" href="./imagenes/trebol.png">
    <script src="index.js"></script>
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item  dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <img src="./imagenes/user.png"> Acceso / Registro</a>
                <ul class="dropdown-menu registroDrop" aria-labelledby="navbarDropdown">
                    <div class="accesoDrop">
                        ACCESO:
                        <form>
                            <input type="text" class="input">
                            <input type="password" class="input">
                            <input type="submit">
                        </form>
                    </div>
                    <div class="registroDividido">
                            <div>REGÍSTRATE COMO CLIENTE
                                <p>Al crear una cuenta en MasqueToners podrás realizar tus compras cómodamente, revisar el estado de tus pedidos y consultar tus operaciones anteriores. ¡Adelante!</p>
                                <a class="btn btn-danger">REGISTRO CLIENTE</a>
                            </div>
                            <div>REGÍSTRATE COMO DISTRIBUIDOR
                                <p>Registrate como distribuidor y accede a descuentos exclusivos y ofertas en toda la gama de consumibles e informática. Y además recibe correctamente las facturas de cada pedido. ¡Adelante!</p>
                                <a class="btn btn-danger">REGISTRO DISTRIBUIDOR</a>
                            </div>
                    </div>
                  </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><img src="./imagenes/heart.png">Favoritos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <img src="./imagenes/world.png"> ES
                </a>
                
              </li>
              <li class="nav-item">
                <a class="nav-link ayudaPedido" href="#"> <span class="amarillo">¿Necesitas ayuda con tu pedido?</span> L-J:09:30 - 14:00 y 16:00 -18:30 / V: 09:30 - 14:00. <span class="amarillo">Dudas:</span> info@masquetoners.es</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="./imagenes/trebol.png">TrebolToner</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
          
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Ofertas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Novedades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Información
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Contacto
                </a>
              </li>
              <li  class="nav-item">
                <a class="nav-link" href="#">
                  <span class="nmbr fleft"><i class="mt mt-cesta"></i><span>0</span></span>
              <span class="fright">
                <span>Mi Compra</span>
                <span class="ttal">0.00€</span>
              </span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>


      <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="rosaNav">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarPinkSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarPinkSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 rosaList">
              <a class="navbar-brand" href="#">
                <img src="./imagenes/home.png">
              </a>
         
              <li class="nav-item">
                <a class="nav-link" href="#">Cartuchos y toners</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Informática</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Papelería
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  Iluminación LED
                </a>
              </li>
              <li  class="nav-item">
                <a class="nav-link" href="#">
                  Especial Higiene
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div id="cajaDeBusqueda">
        <form>
          <input class="busqueda" type="seach" placeholder="Busca tu consumible en Trebol Toners...">
          <button type="submit" class="botonBuscar">
            <img src="./imagenes/glass.png">
          </button>
        </form>
      </div>

      <div id="tresPasos">
        <h3 class="tresPasosTitulo">Encuentra tu Cartucho de Tinta en sólo 3 pasos</h3>
        <p class="tresPasosTitulo">Es realmente sencillo, selecciona los datos de tu impresora y ahorra más de un 80% en tu factura</p>
     
            <div id="tresPasosFlex">
                        <div>
                                  <p>
                                <select id="cars" name="carlist" form="carform" class="seleccion">
                                  <option value="volvo">1.- Selecciona la MARCA</option>
                                </select>
                                </p>


                                    <p>
                              <select id="cars" name="carlist" form="carform" class="seleccion">
                                <option value="volvo">2.- Selecciona la SERIE</option>
                              </select>
                              </p>

                                <p>
                                <select id="cars" name="carlist" form="carform" class="seleccion">
                                  <option value="volvo">3.- Selecciona el MODELO</option>
                                </select>
                                </p>
                              <p class="text-white">
                                <input type="checkbox">Recordar esta búsqueda
                              </p>
                        </div>
                        <div class="noEncontrar">
                          <h5>¿No lo encuentras?<br>
                          ¡Nosotros te lo buscamos!</h5>
                          <p>Déjanos tus datos y te llamamos</p>
                          <button class="llamameFormulario"  data-bs-toggle="modal" data-bs-target="#exampleModal">Rellenar formulario</button>
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Nosotros te lo buscamos</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <form>
                              <div class="modal-body">
                                  <p>NOMBRE: <input type="text" class="maxComponent"></p>
                                  <p>TELÉFONO: <input type="text" class="maxComponent"></p>
                                  <p>E-MAIL(*):  <input type="text" class="maxComponent"></p>
                                  <p>
                                    INFORMACIÓN DE CONSULTA E IMPRESORA DE LA QUE NECESITAS AYUDA (*):</p>
                                    <textarea  class="maxComponent ayudaComentario"></textarea>
                                  
                                  <div>
                                      <input type="checkbox"> He leído y acepto los <a href="#">Términos de Condiciones de Uso y Política de Privacidad</a> de este sitio
                                  </div>
                                  
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">ENVIAR</button>
                              </div>
                            </form>
                            </div>
                          </div>
                        </div>
            </div>
      </div>

          <div id="compatibles">

            <h5>Cartuchos de Tinta y Toners Compatibles</h5>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/brother.jpg"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/canon.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/dell.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/epson.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/fujitsu.jpg"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/hp.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/kodak.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/minolta.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/kyocera.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/lenovo.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/lexmark.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/oki.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/olivetti.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/panasonic.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/philips.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/ricoh.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/samsung.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/sharp.jpg"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/dymo.jpg"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/xerox.png"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/ibm.jpg"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/ncr.jpg"></a>
              <a href="#" class="btn compatibleBoton"><img src="./imagenes/zebra.jpg"></a>
        </div> 

        <div id="publicidad">
            <a href="#"><img src="./imagenes/romperPrecios.jpg"></a>
            <a href="#"><img src="./imagenes/premiumPublicidad.jpg"></a>
            <a href="#"><img src="./imagenes/rebajasPorCompra.jpg"></a>
        </div>

        <div id="productosEstrella">
            <div id="tituloEstrella">
              <h5><img src="./imagenes/estrella.png">PRODUCTOS ESTRELLA</h5>
              <span>Aquí tienes la mejor selección de productos de la web. No los dejes escapar, ¡Vuelan!</span>
            </div>
        </div>

        <div id="productosDestacados">
          <?php
              echo "Hello world";
          ?>
        </div>

        <div class="colorGrey">
        <div id="cuatroAses">
              <div>
<a href="">
                <div style="vertical-align:middle;"><img src="./imagenes/cerditoAhorrador.png"></div>
                <div> <span class="azulAses">AHORRA UN 80%</span><br> en tus facturas con TrebolToner</div>
                </a>
              </div>
              <div>
              <a href="">
              <div style="vertical-align:middle;"><img src="./imagenes/camion.png"></div>
                <div><span class="azulAses">ENVÍO GRATIS</span><br> desde 69€</div>
              </a>
              </div>
              <div>
              <a href="">
              <div style="vertical-align:middle;"><img src="./imagenes/pagoSeguro.png"></div>
               <div><span  class="azulAses">PAGOS SEGUROS</span><br> Contrareembolso, Tarjeta de Crédito, Paypal, Transferencia</div>
                </a>
              </div>
              <div>
              <a href="">
                <div style="vertical-align:middle;"><img src="./imagenes/tienda.png"></div>
                <div><span  class="azulAses">RECOGER EN TIENDA</span> <br>También puedes pasarte a recoger tu pedido</div>
              </a>
              </div>
        </div>
        </div>

        <footer>
            <div class="contenedorComponentesFooter">
            <div class="footerMenor">
              <h2><img src="./imagenes/trebol.png">TrebolToner</h2>
              ¿Quiere ahorrar hasta un 70% en Impresión? En TrebolToner te vamos a ayudar a ahorrar gracias a nuestros cartuchos de tinta y toners compatibles. Nuestros consumibles de impresión compatibles están garantizados de una calidad excepcional con los que podrás ahorrar en la tinta que necesita para tu impresora. Disponemos de todas las marcas para que puedas comprar tu cartucho de toner o tinta al mejor precio.
            </div>
            <div class="enlacesFooter">
              <a href="#">Cartuchos y Toners </a> / <a href="#"> Informática </a> / <a href="#">Papelería </a> / <a href="#">Iluminación LED </a> / <a href="#"> Especial Higiene </a>
              <p><span class="informacionFooter">TODA LA INFORMACIÓN SOBRE TREBOLTONER AQUÍ:</span></p>
            </div>
          </div>
        </footer>
</body>
</html>