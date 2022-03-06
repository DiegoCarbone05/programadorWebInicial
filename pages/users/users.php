
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./users.css">
    <link rel="stylesheet" href="../../global.styles.css">
</head>
<body>
    <?php include('../../components/navbar/navbar.component.php')?>

            <?php
                $curl = curl_init();

                curl_setopt_array($curl, array(
                  CURLOPT_URL => 'http://localhost/unidad-1-ejercicio/db/obtener_usuarios.php',
                  CURLOPT_RETURNTRANSFER => true,
                  CURLOPT_ENCODING => '',
                  CURLOPT_MAXREDIRS => 10,
                  CURLOPT_TIMEOUT => 0,
                  CURLOPT_FOLLOWLOCATION => true,
                  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                  CURLOPT_CUSTOMREQUEST => 'GET',
                ));
                
                $response = curl_exec($curl);
                
                curl_close($curl);

                $users = json_decode($response);
             ?>
    <main>
        
        <header class='small-header'>
            <p>Usuarios</p>
        </header>

        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
            </tr>
            <?php foreach($users as $user): ?>
            <tr>
                <td><?= $user->nombre ?></td>
                <td><?= $user->apellido ?></td>
                <td><?= $user->email ?></td>
            </tr>
            <?php endforeach ?>
        </table>


    </main>
</body>
</html>