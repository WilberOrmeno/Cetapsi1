<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>
<div style="height: 40px; background-color: skyblue; top: 0;">
    <p style="font-size: 25px;">Sistema de matrícula - Periodo 2018</p>
</div>
<nav class="navbar navbar-inverse" style="border-radius: 0px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">CETAPSI</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../registro/alumno.php">Alumno</a></li>
                        <li><a href="../registro/grado.php">Grado</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registro <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../consulta/imprimirMatricula.php">Imprimir matrícula</a></li>
                        <li><a href="../consulta/modificarDatos.php">Modificar datos</a></li>
                        <li><a href="../consulta/borrar.php">Borrar</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Periodo <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../periodo/elegirPeriodo.php">Elegir periodo</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Cerrar sesión</a></li>
            </ul>
        </div>
    </div>
</nav>
</body>
</html>