<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./sobreNosotros.css">
    <link rel="stylesheet" href="../../global.styles.css">
</head>
<?php include('../../components/navbar/navbar.component.php')?>


<body>
    <main class="sobre-nosotros-main">
        <header class='small-header'>
            <p>Sobre Nosotros</p>
        </header>
        <div class="aboutUs-content">

            <h1>Carbone Software</h1>

            <section>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus illum nisi quod ducimus saepe provident vitae! Fugit laudantium neque pariatur minima enim perspiciatis aliquid quisquam cum, explicabo fugiat assumenda nihil!</p>
                <img class="seccion-img" src="../../assets/illustrations/undraw_complete_design_re_h75h.svg" alt="">
            </section>
            <hr>
            <section>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus illum nisi quod ducimus saepe provident vitae! Fugit laudantium neque pariatur minima enim perspiciatis aliquid quisquam cum, explicabo fugiat assumenda nihil!</p>
                <img class="seccion-img" src="../../assets/illustrations/undraw_close_tab_re_4cj6.svg" alt="">
            </section>
            <hr>
            <section>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus illum nisi quod ducimus saepe provident vitae! Fugit laudantium neque pariatur minima enim perspiciatis aliquid quisquam cum, explicabo fugiat assumenda nihil!</p>
                <img class="seccion-img" src="../../assets/illustrations/undraw_ideas_flow_re_bmea.svg" alt="">
            </section>

        </div>

    </main>


    <!-- <ul>
        
        <li><a href="nosotros.php?nombre='jp'">Juan Perez</a></li>
        <li><a href="nosotros.php?nombre='cf'">Cosme Fulanito</a></li>
        <li><a href="nosotros.php?nombre='ng'">Natalia Gomez</a></li>
    </ul> -->
    <?php

        if(isset ($_GET['nombre'])){
            switch($_GET['nombre']){
                case 'jp':
                $nombre = 'Juan Perez';
                $cargo = 'ceo';
                $info = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quod, amet accusantium ut soluta, dignissimos est, voluptatum vel fuga blanditiis dicta laborum error ipsum doloremque cum laboriosam minima cupiditate quas.';
                break;
        
                case 'cf':
                    $nombre = 'Cosme Fulanito';
                    $cargo = 'Recursos humanos';
                    $info = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quod, amet accusantium ut soluta, dignissimos est, voluptatum vel fuga blanditiis dicta laborum error ipsum doloremque cum laboriosam minima cupiditate quas.';
                break;
        
                case 'ng':
                    $nombre = 'Natalia Gomez';
                    $cargo = 'Ventas';
                    $info = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quod, amet accusantium ut soluta, dignissimos est, voluptatum vel fuga blanditiis dicta laborum error ipsum doloremque cum laboriosam minima cupiditate quas.';
                break;
            }
        }

    ?>
<!-- 
    <div class="info_nosotros">
        <h2><?php echo $nombre ?></h2>
        <h4><?php echo $cargo ?></h4>
        <p><?php echo $info ?></p>
    </div> -->
</body>
</html>