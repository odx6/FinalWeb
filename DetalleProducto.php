<?php 
require 'config/database.php';
require 'config/config.php';
include 'chatbot.html';
include 'redS.html';
$db= new Database();
$con= $db->conectar();
$id=isset($_GET['id'])? $_GET['id']: '';
$token=isset($_GET['token'])? $_GET['token']: '';

if($id==''|| $token==''){
  echo 'Error al ver   detalles 1';
  
  exit;
}else{
  $token_tmp=hash_hmac('sha1',$id,KEY_TOKEN);
  if($token==$token_tmp){
    $sql=$con->prepare("SELECT count(idarticulo) from articulo where idarticulo =? AND activo=1");
    $sql->execute([$id]);
    if($sql->fetchColumn()>0){
      $sql=$con->prepare("SELECT idarticulo,nombre,precio,localidad,marca ,descripcion from articulo where idarticulo =? AND  activo=1 LIMIT 1");
    $sql->execute([$id]);

    $resultado =$sql->fetch(PDO::FETCH_ASSOC);

    $nombre= $resultado['nombre'];
    $id= $resultado['idarticulo'];
    $imagen="assets/images/productos/$id/Principal.jpg";
    if(!file_exists($imagen))$imagen="assets/images/no-photo.jpg";
    }
    
  }else{
  echo 'Error al ver detalles 2';
  exit;


  }
  

}


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
                <a class="nav-link" href="about.html">Sobre Nosotros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contactanos</a>
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

    <!---Div contenedor---->
    
    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4><?php echo $nombre?></h4>
              <p><?php echo $resultado['descripcion']?></p>
              <ul class="featured-list">
                <li><b>Precio:</b> $<?php  echo number_format($resultado['precio'],2,'.',',')?></li>
                <li><a href="#"><b>Localidad :</b> <?php echo $resultado['localidad']?></a></li>
                <li><a href="#"><b>Marca :</b> <?php echo $resultado['marca']?></a></li>
                
              </ul>
              
              


  

              </div>
              <!---
              <button class="btn btn-primary" type="button">Comprar ahora </button>
              --->
                <button class="btn btn-outline-primary" type="button" onclick="addProducto(<?php echo $id;?>,'<?php echo $token_tmp;?>')">Agregar  al carrito  </button>
            </div>
            
          <div class="col-md-6">
            <div class="right-image">
              <img src="<?php echo $imagen?>" alt="">
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
              <p>Copyright &copy; LiBELULA.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank"></a></p>
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

       


<div class="social-bar">
  <a href="https://www.facebook.com" class="icon icon-facebook" target="_blank"></a>
  <a href="https://twitter.com" class="icon icon-twitter" target="_blank"></a>
  <a href="https://www.youtube.com" class="icon icon-youtube" target="_blank"></a>
  <a href="https://www.instagram.com" class="icon icon-instagram" target="_blank"></a>
</div>
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
        alert(data.numero)
      }

    })
  }
</script>
  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>

</html>
