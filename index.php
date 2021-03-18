<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Felder - Home</title>
</head>

<body> 
    <header>
        <img src="img/logo1.png" alt="Logo de Felder" class="logo">
        <a href="#" class="btn-principal" id="btn-start">Start</a>
    </header>

    <main>
        <h2 class="main_Title">¡Bienvenido a Felder!</h2>
<!-- ----------------------------------- -->
<!-- Parte trasera (estatica) -->
        <div class="content_All">
            <div class="box_Back">
                <div class="login_Box">
                    <h3 class="box_Title">¿Ya tienes una cuenta?</h3>
                    <p class="box_Text">Inicia Seción acá</p>
                    <button class="box_Btn" id="btn_login">Iniciar Sesión</button>
                </div>
                <div class="signup_Box">
                    <h3 class="box_Title">¿Aun no tienes una cuenta?</h3>
                    <p class="box_Text">Resgistrate Ahora</p>
                    <button class="box_Btn" id="btn_login">Crear Cuenta</button>
                </div>
            </div>
<!-- ----------------------------------------------------------  -->
<!-- Parte delantera (se mueve)  -->
<!-- -------------------------------------------------------------- -->
            <div class="content_Front">
                <!-- Login -->
                <form action="" class="login_Form">
                    <h2 class="form_Title">Iniciar sesión </h2>
                    <input type="text" placeholder="Correo electronico">
                    <input type="password" placeholder="Contraseña">
                    <button class="btn_Form">Iniciar Sesión</button>
                </form>
                <!-- Registro -->
                <form action="" class="signup_Form">
                    <h2 class="form_Title">Iniciar sesión </h2>
                    <input type="text" placeholder="Nombre Completo">
                    <input type="text" placeholder="Correo electronico">
                    <input type="text" placeholder="Usuario">
                    <input type="password" placeholder="Contraseña">
                    <input type="password" placeholder="Confirmar contraseña">
                    <button class="btn_Form">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </main>

    <script src="assets/js/index.js"></script>
</body>
</html>