<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="./tienda.css">
    <link rel="stylesheet" href="../components/asideAndHeader/asideAndHeader.css">
    
</head>

<body>
    

    <h1 class='titulo'>Tienda</h1>
    <div class=''></div>

    <?php 
        $texto='Colombia';
        $unidades_caja= 8 ;
        $precio_unidad= 1.250 ;

        $texto2='Colombia norteamericana';
        $unidades_caja2= 6 ;
        $precio_unidad2= 2.250 ;
    ?>

    <h2> <?php echo $texto2?> </h2>

    <ul>
        <li> Unidades caja: <?php echo $unidades_caja2?> </li>
        <li> Precio caja: <?php echo $precio_unidad2?> </li>
    </ul>

    <h2> <?php echo $texto ?> </h2>

    <ul>
        <li> Unidades caja: <?php echo $unidades_caja?> </li>
        <li> Precio caja: <?php echo $precio_unidad?> </li>
    </ul>

    <?php 
        $dolar= 210;
        $unidades_total = $unidades_caja + $unidades_caja2;
        $precio_total = $precio_unidad + $precio_unidad2;
        $precio_dolar = $precio_total / $dolar;
    ?>

    <h2>Total</h2>
    <ul>
        <li>Unidades Toales: <?php echo $unidades_total?></li>
        <li>Precio Toales: <?php echo $precio_total?></li>
        <li>Precio en dolares: <?php echo round($precio_dolar)?></li>
    </ul>


</body>
</html>