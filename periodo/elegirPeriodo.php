<!DOCTYPE html>
<html lang="es">
<?php
    session_start();

    include("../cabecera.php");
    include ("../bloqueDeSeguridad.php");
    $con=conectar();
    //vemos si el usuario y contraseña son válidos
    if(isset($_POST["periodSelected"])){

    }
?>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" rel="stylesheet"/>
</head>

<body style="background-color: lightgrey">
<div class="container" >
    <div class="modal-body edit-modal" >
        <div class="modal-header" style="background-color: skyblue;">
            <h4 class="modal-title">Seleccionar periodo</h4>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile" style="border: solid 2px skyblue; padding-top: 20px ">
            <form class="form-horizontal" method="post" action="actualizarPeriodo.php" id="updateStudentInfoForm">
                <div class="row">
                    <div class="col-md-12">

                        <div class="col-md-offset-4 col-md-4 ">
                            <div class="input-group">
                                <input type='text' class="form-control" name="periodSelected" id="datepicker" placeholder="--Click para seleccionar--"/>
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>
                            </div>
                            <br>

                            <br>
                            <div class="form-group">
                                <center>
                                    <button class="btn btn-success">Confirmar</button>
                                </center>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
<script type="application/javascript">
    $("#datepicker").datepicker({
        format: "yyyy",
        viewMode: "years",
        minViewMode: "years",
        autoclose: true,
    });</script>
</body>
</html>