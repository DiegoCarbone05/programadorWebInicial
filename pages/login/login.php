<link rel="stylesheet" href="./pages/login/login.css">
<link rel="stylesheet" href="./global.styles.css">

<main class="main-global">
    
    <header class='small-header'>
        <p>Iniciar sesion</p>
    </header>
    
    <form action="https://carbonesoftware.000webhostapp.com/carboneWebsite-UTN/db/enviar_consulta.php" class="form-users" method='POST'>

        <?php if(isset($_GET['e'])): ?>

            <div class='alert-log'>  
                <p class='alert-message'> Mensaje enviado con exito </p>
            </div>
            
        <?php endif; ?>
        
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
            <input name="email" class="mat-input" type="email" required="required"/><span class="highlight"></span><span class="bar"></span>
            <label>Email</label>
        </div>

        <input class='post-form-btn' type="submit">
        
    </div>
    </form>

</main>
