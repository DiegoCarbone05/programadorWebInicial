<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidad 4: Maquetación Web</title>
    <link rel="stylesheet" href="./style.css">
    <meta name="theme-color" content="#00b686">
    <link rel="stylesheet" href="./global.styles.css">
</head>

<body>


    <nav>
        <div style="color:white;" class="wrap-pc-container">
            <div  class="left-container">
                <a href="index.php?component=home"><button>DiegoCarbone</button></a>
                <a href="index.php?component=sobreNosotros"><button class="btn-on-pc">Sobre Nosotros</button></a>
                <a href="index.php?component=users"><button class="btn-on-pc">Usuarios</button></a>
            </div>
            <div class="right-container">
                <a href="index.php?component=login"><button class="right btn-on-pc">Inicar sesion</button></a>
            </div>
        </div>
        <div style="color:white;" class="wrap-phone-container">
            <button class="btn-phone" onClick="redirectLocation('sobreNosotros')">Sobre nosotros</button>
            <button class="btn-phone" onClick="redirectLocation('users')">Usuarios</button>

            <button class="right" onClick="redirectLocation('login')">Inicar sesion</button>
        </div>
    </nav>

    <?php
        if ($_GET["component"]) {
            $root = $_GET["component"];
        }
        else{
            $root = "home";
        }
        include('./pages/'.$root.'/'.$root.'.php')
    ?>

</body>

</html>
