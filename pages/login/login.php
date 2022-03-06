<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css">
    <link rel="stylesheet" href="../../global.styles.css">
</head>
<?php include('../../components/navbar/navbar.component.php')?>

    <body>
        <main class="main-global">
            
            <header class='small-header'>
                <p>Login</p>
            </header>
            
            <form action="../../db/enviar_consulta.php" class="form-users" method='POST'>

                <?php
                    if(isset($_GET['e'])){
                        echo " <div class='alert-log'>  
                            <p class='alert-message'> Mensaje enviado con exito </p>
                        </div>";
                    }
                ?>
                
            <div class='wrap-input'>
                <P class='title-form'>Iniciar sesion</P>
                <div class="group">
                    <input name="name" class="mat-input" type="text" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label>Nombre</label>
                </div>
            
                <div class="group">
                    <input name="surname" class="mat-input" type="text" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label>Apellido</label>
                </div>
                
                <div class="group">
                    <input name="email" class="mat-input" type="text" required="required"/><span class="highlight"></span><span class="bar"></span>
                    <label>Mensaje</label>
                </div>

                <input class='post-form-btn' type="submit">
            </div>
            </form>




        </main>
    </body>

</html>