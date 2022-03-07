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
                        <li><a href="carro.php">Cesta</a></li>
                    </ul>
                </nav>
                 
            </div>
            
        </div>
    </div>

 
    <!--categorias-->
    <div class="small-container">
        <h1 class="title">Zapatos</h1>
        <div class="row">
            <div class="col-4">
                <form method="post" action="carro.php?nombre=Botines_Negros&precio=20">
                    <img src="img/product-2.jpg" alt="">
                    <h4>Botines negros</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>20€</p>
                    <input type="number" name="cantidad" value="1" size="2" id="bNegro" />
                    <input type="submit" value="Añadir al carro" class="btnAddAction btn" />
                </form>
            </div>
            <div class="col-4">
                <form method="post" action="carro.php?nombre=Botas&precio=15">
                    <img src="img/product-5.jpg" alt="">
                    <h4>Botas</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>15€</p>
                    <input type="number" name="cantidad" value="1" size="2" id="bGris" />
                    <input type="submit" value="Añadir al carro" class="btnAddAction btn" />
                </form>
            </div>
            <div class="col-4">
                <form method="post" action="carro.php?nombre=Botines_Negros_Rojo&precio=35">
                    <img src="img/product-10.jpg" alt="">
                    <h4>Botines negros con suela roja</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <p>35€</p>
                    <input type="number" name="cantidad" value="1" size="2" id="bNegroR" />
                    <input type="submit" value="Añadir al carro" class="btnAddAction btn" />
                </form>
            </div>
            <div class="col-4">
                <form method="post" action="carro.php?nombre=Botines_Gris&precio=20">
                    <img src="img/product-11.jpg" alt="">
                    <h4>Botines grises</h4>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <p>20€</p>
                    <input type="number" name="cantidad" value="1" size="2" id="CVerde" />
                    <input type="submit" value="Añadir al carro" class="btnAddAction btn" />
                </form>
            </div>
            

        </div>

        
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