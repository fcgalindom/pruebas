<?php
// SDK de Mercado Pago
require __DIR__ .  '/vendor/autoload.php';
// Agrega credenciales
MercadoPago\SDK::setAccessToken('APP_USR-1348611840121163-102717-841fa8d67097eee813fae0150de2217d-454737132');



$preference = new MercadoPago\Preference();

// Crea un ítem en la preferencia
$item = new MercadoPago\Item();
$item->title = 'Mi producto';
$item->quantity = 1;
$item->unit_price = 75.56;
$preference->items = array($item);
$preference->save();


//curl -X POST -H "Content-Type: application/json" -H "Authorization: Bearer TEST-1348611840121163-102717-3f4a30369639c60dd23d87cdcaa93b7f-454737132" "https://api.mercadopago.com/users/test_user" -d "{'site_id':'MCO'}"


//{"id":1007967482,"nickname":"TESTIA5VNPGK","password":"qatest283","site_status":"active","email":"test_user_25142114@testuser.com"}

//{"id":1007983682,"nickname":"TETE8736231","password":"qatest3587","site_status":"active","email":"test_user_72072927@testuser.com"}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- <script src="https://www.mercadopago.com.mx/integration/v1/web-payment-checkout.js"
           data-prepreference
          
            
          ></script> -->
    <script src="https://sdk.mercadopago.com/js/v2"></script>
    <button class="cho-container"></button>

    <form action="/procesar-pago" method="POST">


        <script src="https://www.mercadopago.com.co/integrations/v1/web-payment-checkout.js" data-preference-id="1348611840121163">
        </script>
    </form>



    <h1>Aquie enviar</h1>
    <form method="post" name="myForm" action="insertar.php">



        <input type="hidden" name="external_reference" id="external_reference">
        <input type="hidden" name="title" id="title">
        <input type="hidden" name="description" id="description">}
        <input type="hidden" name="category_id" id="category_id">
        <input type="hidden" name="quantity" id="quantity">
        <input type="hidden" name="unit_price" id="unit_price">


        <button class="" onclick="submitform()"> Enviar </button>
    </form>



    <script>
        //https://api.mercadopago.com/checkout/preferences?access_token=TEST-1348611840121163-102717-3f4a30369639c60dd23d87cdcaa93b7f-454737132
        // Agrega credenciales de SDK
        const mp = new MercadoPago('APP_USR-568ecb44-5167-426a-97ff-28af610fddae', {
            locale: 'es-CO'
        });

        // Inicializa el checkout
        mp.checkout({
            preference: {
                id: '1348611840121163'
            },
            render: {
                container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
                label: 'Pagar3', // Cambia el texto del botón de pago (opcional)
            }
        });
    </script>




</body>

</html>



<script type="text/javascript">
    var formData = JSON.stringify($("#myForm").serializeArray());
    $.ajax({
        type: "POST",
        url: "serverUrl",
        data: formData,
        success: function() {},
        dataType: "json",
        contentType: "application/json"
    });
</script>