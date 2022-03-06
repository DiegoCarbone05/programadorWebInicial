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
        <?php include('./components/navbar/navbar.component.php')?>
        <div class="index-content">
            <?php 
                include('./components/cne-header-extended/header-extended.component.php');
                $tituloCard1 = 'High quality';
                $tituloCard2 = 'Versatile';
                $tituloCard3 = 'Frictionless';
            ?>
            <main class='index-main'>
                <section class='index-card-seccion'>
                    <div class="index-card-item">
                        <!-- Variable -->
                        <h2><?php echo $tituloCard1?></h2>

                        <p>Internationalized and accessible components for everyone. Well tested to ensure performance and reliability.</p>
                        <p>Straightforward APIs with consistent cross platform behaviour.</p>
                    </div>
                    <div class="index-card-item">
                        <!-- Variable -->
                        <h2><?php echo $tituloCard2?></h2>

                        <p>Provide tools that help developers build their own custom components with common interaction patterns.</p>
                        <p>Customizable within the bounds of the Material Design specification.</p>
                    </div>
                    <div class="index-card-item">
                        <!-- Variable -->
                        <h2><?php echo $tituloCard3?></h2>

                        <p>Built by the Angular team to integrate seamlessly with Angular.</p>
                        <p>Start from scratch or drop into your existing applications.</p>
                    </div>
                </section>

                <hr>
                <div id="soyunid"></div>

            </main>
        </div>
    </body>

</html>
