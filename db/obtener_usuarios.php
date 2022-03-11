<?php

    //$conexion = mysqli_connect("localhost", "root", "", "programador_web2022" ) 
    $conexion = mysqli_connect("localhost", "id18154039_consultas", "Asdasd123123!", "id18154039_programador_web" ) 
    or exit('no se pudo conectar con la base de datos');
   
    // $conexion = mysqli_connect("localhost", "id18154039_consultas", "?M=+Ui}n[z$]tg9V", "id18154039_programador_web" ) 
    // or exit('no se pudo conectar con la base de datos');

    $listaUsuarios = [];
    $mySqlResult = mysqli_query($conexion, "SELECT * FROM usuarios");//La consulta me devuelve un resultado

    if($mySqlResult){//Verifico que haya algun resultado
        $fila = $mySqlResult->fetch_row();//Obtengo fila del resultado
        while($fila){//Si la fila es truly, itero

            //Agrego datos de la fila al array de usuarios
            array_push($listaUsuarios,[
                "id" =>  $fila[0],
                "nombre" =>  $fila[1],
                "apellido" =>  $fila[2],
                "email" =>  $fila[3]
            ]);
            $fila = $mySqlResult->fetch_row();//Pregunto por la siguiente fila
        }
    }
    echo json_encode($listaUsuarios);//Devuelvo lista como json

    mysqli_close($conexion);//by sql