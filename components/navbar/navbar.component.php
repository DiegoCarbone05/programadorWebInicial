<head>
    <link rel="stylesheet" href="./components/navbar/navbar.component.css">
    <link rel="stylesheet" href="../../components/navbar/navbar.component.css">
    <script src="./components/navbar/navbar.component.js"></script>
    <script src="../../components/navbar/navbar.component.js"></script>
    <!-- <meta name="theme-color" content="#00b686"> -->

</head>

<nav>
    <div style="color:white;" class="wrap-pc-container">
        <div  class="left-container">
            <button onClick="redirectLocation('root')">DiegoCarbone</button>
            <button class="btn-on-pc" onClick="redirectLocation('sobreNosotros')">Sobre nosotros</button>
            <button class="btn-on-pc" onClick="redirectLocation('users')">Usuarios</button>
        </div>
        <div class="right-container">
            <button class="right btn-on-pc" onClick="redirectLocation('login')">Inicar sesion</button>
        </div>
    </div>
    <div style="color:white;" class="wrap-phone-container">
        <button class="btn-phone" onClick="redirectLocation('sobreNosotros')">Sobre nosotros</button>
        <button class="btn-phone" onClick="redirectLocation('users')">Usuarios</button>
        <button class="right" onClick="redirectLocation('login')">Inicar sesion</button>

    </div>
</nav>