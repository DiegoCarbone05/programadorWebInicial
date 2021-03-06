
<link rel="stylesheet" href="./pages/users/users.css">
<?php
    
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://carbonesoftware.000webhostapp.com/carboneWebsite-UTN/db/obtener_usuarios.php',
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
    if($users == null){
        $users = [];
    }
?>
<main>
    
    <header class='small-header'>
        <p>Usuarios</p>
    </header>

    <?php if(count($users)): ?>
    <table>
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th class="email">Email</th>
        </tr>
        <?php foreach($users as $user): ?>
        <tr>
            <td><?= $user->nombre ?></td>
            <td><?= $user->apellido ?></td>
            <td class="email"><?= $user->email ?></td>
        </tr>
        <?php endforeach ?>
    </table>
    <?php else: ?>
        <p class="no-users-found">No se han cargado usuarios aun</p>
    <?php endif; ?>
    <br><br><br><br><br>

</main>