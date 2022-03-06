<?php

    $name_form = $_POST['name'];
    $surname_form = $_POST['surname'];
    $email_form = $_POST['email'];

    
    $conexion = mysqli_connect("localhost", "root", "", "programador_web2022" ) 
    or exit('no se pudo conectar con la base de datos');
   
    // $conexion = mysqli_connect("localhost", "id18154039_consultas", "?M=+Ui}n[z$]tg9V", "id18154039_programador_web" ) 
    // or exit('no se pudo conectar con la base de datos');

    mysqli_query($conexion, "INSERT INTO usuarios VALUES (DEFAULT, '$name_form', '$surname_form', '$email_form')");\
    mysqli_close($conexion);

    header('Location: ../pages/login/login.php?e=ok');