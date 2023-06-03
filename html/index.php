<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lc Tecnologia</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

    <header class="header">
        <img class="bg" src="../img/log16.png" alt="">
        <img class="esp" src="../img/log17.png" alt="">

        <?php
    // Iniciar sesión
    session_start();

    // Verificar si la sesión está iniciada y si existe el nombre de usuario en la sesión
    if (isset($_SESSION['email']) && isset($_SESSION['nombre'])) {
        $nombreUsuario = $_SESSION['nombre'];
        echo "<h2>Bienvenido, $nombreUsuario!</h2>";
    } else {
        // Si la sesión no está iniciada o el nombre de usuario no está definido, redirigir a la página de inicio de sesión
        header('Location: ../inicio.html');
        exit;
    }
    ?>

        <div class="menu container">

            <div class="header-img">
                <img src="../img/loco lc.jpg" alt="" class="logo">
            </div>


            




            <input type="checkbox" id="menu">
            <label for="menu"><img src="../img/menu.png" class="menu-icono" alt=""></label>
            <nav class="navbar">
                <ul>
                    <li><a href="../html/formulario.html">Compra</a></li>
                    <li><a href="../html/registrase.html">Registrarse</a></li>
                    <li><a href="../html/login.html">Iniciar Sesion</a></li>
                    
                </ul>
            </nav>

        </div>

        <div class="header-container container">
            <div class="header-info">
                <div class="header-txt">
                    <h1>Tus equipos favoritos para tus tareas o trabajos</h1>
                    <p>
                        Hola, te damos la bienvenida!
                    </p>
                    <a href="#" class="btn-1">Seccion Equipos</a>
                </div>
                
            </div>
        </div>
    </header>

    <section class="info container">

        <div class="info-1">
            <img src="../img/time.svg" alt="">
            <h3>Horario</h3>
            <p>Lunes a Viernes 9am a 8pm</p>
        </div>

        <div class="info-1">
            <img src="../img/gps.svg" alt="">
            <h3>Ubicación</h3>
            <p>Colombia</p>
        </div>

        <div class="info-1">
            <img src="../img/phone.svg" alt="">
            <h3>telefono</h3>
            <p>323545****</p>
        </div>

    </section>

    <section class="Nosotros">

        <img class="bg-2" src="../img/7125.jpg" alt="">

        <div class="Nosotros-info container">
            <div class="Nosotros-img">
                <img src="../img/22.jpg" alt="">
            </div>
            <div class="Nosotros-txt">
                
                <h2>Los mejores equipos que encontraras con mayor descuentos</h2>
                <p>
                    Debes ser cliente para obtener este beneficio.
                </p>
                <a href="#" class="btn-1">Saber mas</a>
            </div>
        </div>
       
    </section>

    <main class="Equipos container">
        <h2>Equipos</h2>
        <p>Estos son los equipos disponibles en venta</p>
        <div class="Equipos-info">
            <div class="Equipos">
                <img src="../img/1-5.png" alt="">
                <h3>Telefonos</h3>
                <p>
                    Samsung A71
                </p>
                <span>500.000</span>
            </div>

            <div class="Equipos">
                <img src="../img/2-1.png" alt="">
                <h3>Tablets</h3>
                <p>
                    Huawei PAT3
                </p>
                <span>250.000</span>
            </div>

            <div class="Equipos">
                <img src="../img/3-1.png" alt="">
                <h3>HP core I5</h3>
                <p>
                    Hola aqui es para escribir
                </p>
                <span>1.000.000</span>
            </div>
        </div>
    </main>

    <hr>

    <footer class="footes container">
        <div class="footer-link">
            <div class="link">
                <h3>Redes</h3>
                <div class="socials">
                    <img src="../img/s1.svg" alt="">
                    <img src="../img/s2.svg" alt="">
                    <img src="../img/s3.svg" alt="">
                    <img src="../img/s4.svg" alt="">
                </div>
            </div>

            <div class="link">
                <h3>Ayuda</h3>
                <ul>
                    <li><a href="#">Equipos</a></li>
                    <li><a href="#">Compra</a></li>
                    <li><a href="#">Descuentos</a></li>
                    <li><a href="#">Buscar</a></li>
                </ul>
            </div>

            <div class="link">
                <h3>Contacto</h3>
                <ul>
                    <li><a href="#">323285****</a></li>
                    <li><a href="#">Lender@gmail.com</a></li>
                    <li><a href="#">La jagua de Ibirico</a></li>
                    <li><a href="#">Cesar</a></li>
                </ul>
            </div>

            

        </div>
    </footer>
    
</body>
</html>