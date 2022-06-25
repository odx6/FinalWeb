<?php 
include 'chatbot.html';
include 'redS.html';
require 'config/database.php';
require 'config/config.php';

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing - Contact Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
      
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>Libelula <em>Alebrijes</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Inicio
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.php">Nuestros Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Sobre Nosotros</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="contact.php">Contactanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="checkout.php">
                  Carrito <span id="num_cart" ><?php echo $num_cart;?></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading contact-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>contactanos</h4>
              <h2>Vamos a ponernos en contacto</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Nuestra Localizacion </h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15258.731892690272!2d-96.7994583257054!3d17.039213674384918!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c719fb6ba504dd%3A0xae18f94265f14aad!2sCasa%20de%20la%20Iguana%20Tienda%20de%20Alebrijes!5e0!3m2!1ses!2smx!4v1654973151262!5m2!1ses!2smx"  width="100%" height="330px" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>Acerca de nuestro Negocio</h4>
              <p>Nos puedes encontar en Blvd. Eduardo Vasconcelos 218, Centro, 68080 Oaxaca de Juárez, Oax.<br><br>Pregunta por un pedido personalizado.
                Contáctanos para consultas de tipo general.Consulta piezas disponibles en nuestra tienda.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Envianos un mensaje</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="EnviarAsunto.php" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Nombre completo" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="Correo Electronico" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="subject" type="text" class="form-control" id="subject" placeholder="Asunto" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Tu mensaje" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Enviar mensaje</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
          
          <div class="col-md-4">
            <ul class="accordion">
              <li>
                  <a>COMERCIO JUSTO</a>
                  <div class="content">
                      <p>Fortalecemos nuestra economía local, impulsando nuestros productos a nivel global.</p>
                  </div>
              </li>
              <li>
                  <a>medio ambiente</a>
                  <div class="content">
                      <p>Reciclamos recursos de nuestros bosques para producir nuestras piezas. no talamos árboles.</p>
                  </div>
              </li>
              <li>
                  <a>regalos corporativos</a>
                  <div class="content">
                      <p>Producimos alebrijes para empresas y eventos con un estilo oaxaqueño personalizado.</p>
                  </div>
              </li>
              <li>
                  <a>Garantía</a>
                  <div class="content">
                      <p>Ofrecemos productos y servicios de calidad a través de la negociación directa con el artesano.</p>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

           <!-- CHAT BAR BLOCK -->
    <div class="chat-bar-collapsible">
      <button id="chat-button" type="button" class="collapsible">Messenger
           <i id="chat-icon" style="color: #fff;" class="fa fa-fw fa-comments-o"></i>
      </button>

      <div class="content">
          <div class="full-chat-block">
              <!-- Message Container -->
              <div class="outer-container">
                  <div class="chat-container">
                      <!-- Messages -->
                      <div id="chatbox">
                          <h5 id="chat-timestamp"></h5>
                          <p id="botStarterMessage" class="botText"><span>Cargando...</span></p>
                      </div>

                      <!-- User input box -->
                      <div class="chat-bar-input-block">
                          <div id="userInput">
                              <input id="textInput" class="input-box" type="text" name="msg"
                                  placeholder="Aa">
                              <p></p>
                          </div>

                          <div class="chat-bar-icons">
                              <i id="chat-icon" style="color: rgb(40, 20, 220);" class="fa fa-fw fa-heart"
                                  onclick="heartButton()"></i>
                              <i id="chat-icon" style="color: #333;" class="fa fa-fw fa-send"
                                  onclick="sendButton()"></i>
                          </div>
                      </div>

                      <div id="chat-bar-bottom">
                          <p></p>
                      </div>

                  </div>
              </div>

          </div>
      </div>

  </div>
     
    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Nuestros clientes satisfechos</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel">
              <div class="client-item">
                <img src="assets/images/client-01.png" alt="1">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-02.png" alt="2">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-03.png" alt="3">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-04.png" alt="4">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-05.png" alt="5">
              </div>
              
              <div class="client-item">
                <img src="assets/images/client-06.png" alt="6">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>

  </body>

</html>