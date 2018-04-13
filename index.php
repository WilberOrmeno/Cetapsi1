<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>SISTEMA DE MATRÍCULA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/sRegistro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style>
        #msform {
            max-width: 400px;
            padding: 15px;
            margin: 0 auto;
        }
        #msform input[type=text]:focus + i.fa {
            opacity: 1;
            left: 30px;
            transition: all 0.25s ease-out;
        }
        #msform input[type=password]:focus + i.fa {
            opacity: 1;
            left: 30px;
            transition: all 0.25s ease-out;
        }

        div.container {
            top: 200px;
            position: relative }
        div.container label {
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-right: -50%;
            transform: translate(-50%, -50%) }
    </style>


</head>

<body style="background-color: lightgrey">
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <label style="font-family: 'Tw Cen MT'; font-weight: bold; color: red; font-size: 50px ;">CETAPSI</label>
        </div>
    </div>
    <br><br>
    <form id="msform" action="autenticacion.php" method="POST">
        <input type="text" id="textuser" name="user" placeholder="Usuario" autofocus required/>
        <i class="fa fa-user"></i>
        <input type="password" id="textpass" name="pass" id="myPassword" placeholder="Contraseña" required/>
        <i class="fa fa-key"></i>
        <br>
        <button id="login-password" type="submit" class="btn btn-lg" style="background-color: black; color: white;" onclick="buscarUsuario()">Ingresar</button>
    </form>
</div>
</body>
</html>