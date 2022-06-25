<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
$access_token='TEST-6727587907938063-061511-f08da2925897cb4ca320601f4aca7a21-730688391';
MercadoPago\SDK::setAccessToken($access_token);

$preference = new MercadoPago\Preference();
$preference->back_urls=array(
    "success"=>"http://localhost/ProyectoWEB-STORE/templatemo_546_sixteen_clothing/Prueba.php",
    "failure"=>"http://localhost/ProyectoWEB-STORE/templatemo_546_sixteen_clothing/Prueba.php",
    "pending"=>"http://localhost/ProyectoWEB-STORE/templatemo_546_sixteen_clothing/Prueba.php"
);
// Crea un ítem en la preferencia
$Product=[];
$item = new MercadoPago\Item();
$item->title = 'Alebrije1';
$item->quantity = 1;
$item->unit_price =96.6;
//$preference->items = array($item);
array_push($Product,$item);
$preference->items=$Product;
$preference->save();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra </title>
</head>
<body>
<div class="cho-container">
       
</div>
    
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


</body>
</html>