

<?php 
require 'config/database.php';
require 'config/config.php';
$db= new Database();
$con= $db->conectar();

$sql=$con->prepare("SELECT idarticulo,nombre,precio,descripcion from articulo where activo=1");
$sql->execute();
$resultado =$sql->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>LIBELULA</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!----chatbot-->
    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!----chatbot-->
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/font.css">
    <link rel="stylesheet" href="assets/main.css">

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
              <li class="nav-item active">
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
              <li class="nav-item">
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
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>mejor oferta</h4>
            <h2>Nuevas llegadas en oferta</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Ofertas relámpago</h4>
            <h2>consigue tus mejores productos</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Ultimo minuto</h4>
            <h2>Obtenga ofertas de ultima hora</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Ultimos productos</h2>
              <a href="products.php">ver todos los productos <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
<!----DIV PARA PRODUCTOS ---->
<?php foreach($resultado as $row ){?>
          <div class="col-md-4">
            <div class="product-item">

            <?php
            $id=$row['idarticulo'];
            $imagen ="assets/images/productos/$id/Principal.jpg";
            if(!file_exists($imagen)){
              $imagen="assets/images/no-photo.jpg";
            }
            ?>
              <a href="#"><img src="<?php echo $imagen?>" alt="imagen rota"></a>
              <div class="down-content">
                <a href="#"><h4><?php  echo $row['nombre']?></h4></a>
                <h6>$<?php  echo number_format($row['precio'],2,'.',',')?></h6>
                <p><?php  echo $row['descripcion']?></p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (24)</span>
              </div>
              
            </div>
          </div>
    <?php } ?>
       
  
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Tallado en madera de Oaxaca</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4></h4>
              <p><a rel="nofollow" href="https://templatemo.com/tm-546-sixteen-clothing" target="_parent"></a> El tallado de madera en Oaxaca, ha existido durante cientos de años, desde la elaboración de juguetes para niños, máscaras y objetos religiosas hasta el estilo de la talla de madera que fue iniciado en 1957 por el artesano Manuel Jiménez, quien a través de esta labor artesanal, se reconoce como el iniciador de los tallados de figuras míticas en los Valles Centrales de Oaxaca.

                La magia de crear vida e imprimir el alma en la madera es un arte que se hereda de generación en generación, desde muy pequeños los vínculos que unen a los artesanos con su entorno son inculcados por los ancianos, que de viva voz cuentan las leyendas de sus pueblos y enseñan a los niños a soñar, para luego poder traer sus sueños a la vida. Antes de que la madera de copal es cortada, en ella ya corre la vida, el artesano solo define sus características e imprime en ella su singularidad, plasmando infinidad de modelos que van desde animales, plantas, humanos, hasta seres de otro mundo, todos ellos fusionados para crear una belleza mística.</p>
              
              <a href="about.html" class="filled-button">Leer más sobre nosotros</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/tallado.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Pedidos  &amp; Regalos <em>Personalizados</em> </h4>
                  <p>En caso de requerir figuras / cantidades / colores específicos el tiempo de fabricación es 30 días hábiles. Todo pedido especial debe cotizarse.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Volver a Inicio</a>
                </div>
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
              <p>Copyright &copy; 2020 EverA SuleidyR Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
          <div class="Red social">
            
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

       
<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
  // Agrega credenciales de SDK
  var public_key='TEST-5f406a5e-4e34-480f-bc2a-a23c25f75bb1';
  const mp = new MercadoPago(public_key, {
    locale: "es-MX",
  });

  // Inicializa el checkout
  mp.checkout({
    preference: {
      id: '<?php echo $preference->id?>',
    },
    render: {
      container: ".cho-container", // Indica el nombre de la clase donde se mostrará el botón de pago
      label: "Comprar", // Cambia el texto del botón de pago (opcional)
    },
  });
</script>

<div class="social-bar">
  <a href="https://www.facebook.com/LibelulaAlebrijes-102589845832660/" class="icon icon-facebook" target="_blank"></a>
  <a href="https://www.facebook.com/LibelulaAlebrijes-102589845832660/" class="icon icon-twitter" target="_blank"></a>
  <a href="https://www.facebook.com/LibelulaAlebrijes-102589845832660/" class="icon icon-youtube" target="_blank"></a>
  <a href="https://www.facebook.com/LibelulaAlebrijes-102589845832660/" class="icon icon-instagram" target="_blank"></a>
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

  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>

</html>
