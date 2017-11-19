<html>
    <head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script  type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <link rel="stylesheet" type="text/css" href="css/Style.css">
    </head>
    <body>
    <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div id="main">
        <div id="first">
        <h1>ONG Capacitaciones</h1>
        <form action="login.jsp" method="post" >
            <label>Usuario</label><input type="Text" name="usuario" id="user" placeholder="Usuario" />
            <label>Contraseña</label><input type="password" name="password" id="pass" placeholder="Password" />
            <input type="submit" id="Log" value="Login" />
            <p id="two">¿No tienes una cuenta para ver las capacitaciones? <a class="signup" href="#" id="signup">Registrate Aqui</a></p>
        </form>
        </div>
       
        <div id ="second">
            <h1>Registro</h1>
            <form id ="logdatos" action="registrar.jsp" method="post">
                 <input type="Text" name="nombre" id="nombre" placeholder="Nombre" />
                <input type="Text" name="apellido" id="apellido" placeholder="Apellido" />
                <input type="Text" name="correo" id="correo" placeholder="Correo" />
              <input type="password" name="password" id="password" placeholder="Password" />
                <input type="Text" name="fecha" id="Fecha" placeholder="Fecha de Nacimiento"/><br>
                <input type="radio" name="sexo" id="sex" value="m" />Masculino <input type="radio" name="sexo" id="sex" value="f" />Femenino
                <input type="submit"  id="Reg" value="Registrar"/>
                <p id="two">¿Ya tienes una cuenta? <a class="signin" href="#" id="signin">Logeate</a></p>
            </form>
            
            
            
        </div>
             

            
            
        </div> 

    </body>
</html>