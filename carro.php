<?php 

//Variables
$aCarrito = array();
$sHTML = '';
$fPrecioTotal = 0;
$existe = false;

//Vaciar el carro
if(isset($_GET['vaciar'])) {
	unset($_COOKIE['carrito']);
	$sHTML .= 'El carrito está vacio';
}

//Obtenemos los productos anteriores
if(isset($_COOKIE['carrito'])) {
	$aCarrito = unserialize($_COOKIE['carrito']);
}

//Añadir producto
if(isset($_GET['nombre']) && isset($_GET['precio'])) {


	for($i = 0; $i< sizeof($aCarrito); $i++) {
	    if($aCarrito[$i]['nombre'] == $_GET['nombre']) {
		$aCarrito[$i]['cantidad'] = $aCarrito[$i]['cantidad'] + 1;
		$existe = true;
	    }
	}



	if($existe == false) {
		$iUltimaPos = count($aCarrito);
		$aCarrito[$iUltimaPos]['nombre'] = $_GET['nombre'];
		$aCarrito[$iUltimaPos]['precio'] = $_GET['precio'];
		$aCarrito[$iUltimaPos]['cantidad'] = $_POST['cantidad'];
        }
}

//Crear la cookie
$iTemCad = time() + (60 * 60);
setcookie('carrito', serialize($aCarrito), $iTemCad);



//Imprimir el array
$sHTML .= '<div style="margin: 80px auto;"> <table style="width: 100%; border-collapse:collapse;">';
$sHTML .= '<tr>
<th style="text-align:left; padding: 5px; color:#fff; background:#ff523b; font-weight:normal;">Producto</th>
<th style="text-align:left; padding: 5px; color:#fff; background:#ff523b; font-weight:normal;">Precio</th>
<th style="text-align:left; padding: 5px; color:#fff; background:#ff523b; font-weight:normal;">Cantidad</th>
</tr>';
foreach ($aCarrito as $key => $value) {
	$sHTML .= '<tr>';
	$sHTML .= '<td style="padding:10px 5px; width:40px; height:30px;">' . $value['nombre'] . '</td>
	<td style="padding:10px 5px; width:40px; height:30px;">' . $value['precio']*$value['cantidad'] . '</t>
	<td >' . $value['cantidad']  . '</td>';
	$sHTML .= '</tr>';
	$fPrecioTotal += $value['precio']*$value['cantidad'];
}
$sHTML .= '</table> </div>';

$sHTML .= '<br>------------------<br>Precio total: ' . $fPrecioTotal . ' €';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E_Servidor | Ecommerce</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <nav>
                    <ul id="MenuItems">
                        <li><a href="Inicio.php">Inicio</a></li>
                        <li><a href="carro.php">Carrito</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="contenido" style="margin: 40px;">
    <div>
		<?php echo $sHTML; ?>
	</div>
    <br>
    <a href="carro.php?vaciar=1" class="btn">vaciar carrito</a>
    </div>
    
    <!--footer-->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-1">
                    <h3>Descarga nuestra App</h3>
                    <p>Descarga la aplicación para Android y Ios</p>
                    <div class="app-logo">
                        <img src="img/play-store.png" alt="">
                        <img src="img/app-store.png" alt="">
                    </div>
                </div>
                <div class="footer-col-2">
                    <h3>Nuestro proposito</h3>
                    <p>Nuestro propósito es hacer que el placer y los beneficios 
                        de los deportes sean accesibles para muchos de manera sostenible.
                    </p>
                </div>
                <div class="footer-col-3">
                    <h3>Links de interes</h3>
                    <ul>
                        <li>Cupones</li>
                        <li>Blog</li>
                        <li>Política de devoluciones</li>
                        <li>Únete al afiliado</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Siguenos</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>YouTube</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
