<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
include 'chatbot.html';
// Agrega credenciales
$toltalP=0;
$access_token='TEST-6727587907938063-061511-f08da2925897cb4ca320601f4aca7a21-730688391';
MercadoPago\SDK::setAccessToken($access_token);

$preference = new MercadoPago\Preference();
$preference->back_urls=array(
    "success"=>"http://localhost/ProyectoWEB-STORE/templatemo_546_sixteen_clothing/index.php",
    "failure"=>"http://localhost/ProyectoWEB-STORE/templatemo_546_sixteen_clothing/Prueba.php",
    "pending"=>"http://localhost/ProyectoWEB-STORE/templatemo_546_sixteen_clothing/Prueba.php"
);
$total=0;
// Crea un ítem en la preferencia
$Product=[];
$item = new MercadoPago\Item();
$item->title = 'Cantidad a pagar';
$item->quantity = 1;
$item->unit_price =print($toltalP);
//$preference->items = array($item);
array_push($Product,$item);
$preference->items=$Product;
$preference->save();

?>

<?php 
require 'config/database.php';
require 'config/config.php';
include 'chatbot.html';
include 'redS.html';
$db= new Database();
$con= $db->conectar();
$productos= isset($_SESSION['carrito']['productos'])?$_SESSION['carrito']['productos']:null;
//print_r($_SESSION);
$lista_carrito= array();

if($productos !=null);{
    foreach($productos as $clave=>$cantidad){
        $sql=$con->prepare("SELECT idarticulo,nombre,precio,descripcion, $cantidad AS cantidad from articulo where idarticulo=? AND activo=1");
        $sql->execute([$clave]);
        $lista_carrito[]=$sql->fetch(PDO::FETCH_ASSOC);
    }
}



?>
<!DOCTYPE html>
<html lang="en">
a<
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!----chatbot-->
    <link rel="stylesheet" href="static/css/chat.css">
    <link rel="stylesheet" href="static/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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


    
    <div class="latest-products">
  
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                <th>Producto</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Subtotal</th>
                <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if($lista_carrito==null){
                    echo '<tr>< colspan="5" class="text-center"><b>Lista vacia</b></td></tr>';
                    }else{
                      $total=0;
                        foreach($lista_carrito as $producto){
                        
                            $_id=$producto['idarticulo'];
                           
                            $nombre=$producto['nombre'];
                            $precio=$producto['precio'];
                            $cantidad=$producto['cantidad'];
                            $subtotal=$cantidad*$precio;
                            $total += $subtotal;
                            
                        
            ?>
                <tr>
                    <td> <?php echo $nombre ?></td>
                    <td> $<?php  echo number_format($precio,2,'.',',')?></td>
                    <td> 
                      <input type="number" min="1" max="10" step="1" value="<?php echo $cantidad?>" size="5" id="cantidad_<?php echo $_id?>" onchange="actualizaCantiad(this.value,<?php echo $_id?>)">
                    </td>
                    <td><div id="subtotal_<?php echo $_id?>" name="subtotal[]"> $<?php  echo number_format($subtotal,2,'.',',')?> </div></td>
                        <td>
                          <a  id="eliminar" class="btn btn-warning btn-sm" 
                        data-bs-id="<?php echo $_id?>" data-bs-toggle="modal" data-bs-target="#eliminaModal" >Eliminar</a></td>
                </tr>
                <?php } ?>
                <tr>
                    <td colspan="3"></td>
                    <td colspan="2">
                        <p class="h3" id="total">$<?php  echo number_format($total,2,'.',',')?> </p>
                    </td>
                </tr>
                $toltalP=$total;      </tbody>
<?php } ?>

        </table>
        <div ><div class="cho-container" >
       
       </div></div>
        
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
          <div class="Red social">
            
          </div>
        </div>
      </div>
    </footer>

<!-- Modal -->
<div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="eliminaModalLabel">Alerta</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Desea Elimar el producto de la lista?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button id="btn-elimina"type="button" class="btn btn-danger" onclick="eliminar()" >Elimina</button>
      </div>
    </div>
  </div>
</div>
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
  <a href="https://www.facebook.com" class="icon icon-facebook" target="_blank"></a>
  <a href="https://twitter.com" class="icon icon-twitter" target="_blank"></a>
  <a href="https://www.youtube.com" class="icon icon-youtube" target="_blank"></a>
  <a href="https://www.instagram.com" class="icon icon-instagram" target="_blank"></a>
</div>
<script type="text/javascript">
  let eliminaModal= document.getElementById("eliminaModal")
  eliminaModal.addEventListener('show.bs.modal',function(event){
    let button = event.relatedTarget
    let id=button.getAttribute('data-bs-id')
    let buttonElimina= eliminaModal.querySelector('.modal-footer #btn-elimina')

    buttonElimina.value=id

  })
  function actualizaCantiad(cantidad,id){
    let url='clases/actualizar_carrito.php'
    let formData= new FormData()
    formData.append('action','agregar')
    formData.append('id',id)
    formData.append('cantidad',cantidad)
    fetch(url,{
      method:'POST',
      body: formData,
      mode: 'cors'
    }).then(response =>response.json())
    .then(data=>{
      if(data.ok){
        let divsubtotal= document.getElementById("subtotal_"+id)

        
        divsubtotal.innerHTML = data.sub
       
        let total=0.00
        let list= document.getElementsByName("subtotal[]")
        
        for(let i=0;i<list.length;i++){
          total +=parseFloat(list[i].innerHTML.replace(/[$,]/g,''))
         
        }
        total = new Intl.NumberFormat('en-US',{
          minimumFractionDigits:2
        }).format(total) 
        
        document.getElementById("total").innerHTML ='$'+total       
        
      }
      
    })
  }
  function eliminar(){
    let botonElimina= document.getElementById('btn-elimina')
    let id=botonElimina.value

    let url='clases/actualizar_carrito.php'
    let formData= new FormData()
    formData.append('action','eliminar')
    formData.append('id',id)
    
    fetch(url,{
      method:'POST',
      body: formData,
      mode: 'cors'
    }).then(response =>response.json())
    .then(data=>{
      if(data.ok){
        location.reload()
      }
      
    })
  }
  
        
             
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="static/scripts/responses.js"></script>
<script src="static/scripts/chat.js"></script>


</html>
