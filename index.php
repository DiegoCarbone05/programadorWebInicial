<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carbone Website</title>
    <link rel="icon" href="CarboneFavicon.ico">
    <link rel="stylesheet" href="./css/lightbox.min.css">
    <link rel="stylesheet" href="./style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <meta name="theme-color" content="#169b77">
</head>
<body>
    <nav>
        <div style="color:white;" class="wrap-pc-container btn-on-pc">
            <div  class="left-container">
                <a href="index.php?component=home"><button class="btn-on-pc">DiegoCarbone</button></a>
                <a href="index.php?component=sobreNosotros"><button class="btn-on-pc">Sobre Nosotros</button></a>
                <a href="index.php?component=users"><button class="btn-on-pc">Usuarios</button></a>
            </div>
            <div class="right-container">
                <a href="index.php?component=login"><button class="right btn-on-pc">Agregar usuario</button></a>
            </div>
        </div>
        <div id="btn-sidebar" class="menu-btn sideBar-vis"><img style="width: 70%; display: flex; margin: auto;" src="./assets/icons/menu_white_24dp.svg" alt=""></div>
        <p class="title-nav sideBar-vis">Carbone Website</p>
    </nav>

    <div id="backSideBar" class="wrap-sideBar hiddenSidebar"></div>
    <div id="sideBarComponent" class="sideBar showSidebar">
        <a href="index.php?component=home">
            <button class="btn-phone hiddenSidebar">Inicio</button>
        </a>
        <a href="index.php?component=sobreNosotros">
            <button class="btn-phone hiddenSidebar">Sobre nosotros</button>
        </a>

        <a href="index.php?component=users">
            <button class="btn-phone hiddenSidebar">Usuarios</button>
        </a>

        <a href="index.php?component=login">
            <button class="btn-phone hiddenSidebar">Agregar usuario</button>
        </a>
    </div>
    <?php
        if (isset($_GET["component"])) {
            $root = $_GET["component"];
        }
        else{
            $root = "home";
        }
        include('./pages/'.$root.'/'.$root.'.php')
    ?>
    <script src="./js/lightbox-plus-jquery.min.js"></script>
    <script src="./main.js"></script>
</body>

</html>
