<?php 
require 'config/database.php';
require 'config/config.php';
include 'chatbot.html';
include 'redS.html';
$db= new Database();
$con= $db->conectar();
print_r($_SESSION);
$sql=$con->prepare("SELECT idarticulo,nombre,precio,descripcion from articulo where activo=1");
$sql->execute();
$resultado =$sql->fetchAll();
//session_destroy();

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Libelula Alebrije</title>

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
              <li class="nav-item active">
                <a class="nav-link" href="products.php">Nuestros productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">Sobre nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contactanos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link"  href="checkout.php">
                  Carrito <span id="num_cart" ></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>Libelula Alebrijes</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
                  <li data-filter=".des">Featured</li>
                  <li data-filter=".dev">Flash Deals</li>
                  <li data-filter=".gra">Last Minute</li>
              </ul>
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
              <div class="btn-group">
                <a href="DetalleProducto.php?id=<?php echo $row['idarticulo'];?>&token=<?php echo hash_hmac('sha1',$row['idarticulo'],KEY_TOKEN); ?>" class="btn btn-primary">Detalles</a>
                
              </div>
              <div class="btn-group">
              <button class="btn btn-outline-success" type="button" onclick="addProducto(<?php echo $row['idarticulo'];?>,'<?php echo hash_hmac('sha1',$row['idarticulo'],KEY_TOKEN); ?>')">Agregar  al carrito  </button>
              </div>
            </div>
          </div>
    <?php } ?>

          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 libelula y Alebrijes.Oax.
            
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
<script>
  function addProducto(id,token){
    let url='clases/carrito.php'
    let formData= new FormData()
    formData.append('id',id)
    formData.append('token',token)
    fetch(url,{
      method:'POST',
      body: formData,
      mode: 'cors'
    }).then(response =>response.json())
    .then(data=>{
      if(data.ok){
        let elemento=document.getElementById("num_cart")
        elemento.innerHTML=data.numero
      }

    })
  }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>

  </body>

</html>
