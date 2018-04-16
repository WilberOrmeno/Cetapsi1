<!DOCTYPE html>
<html lang="es">
<?php
    include("../cabecera.php");
    session_start();
    include ("../bloqueDeSeguridad.php");
    $con = conectar();
    $sSQL = "SELECT * FROM alumnos ORDER BY `id_alumno` DESC";
    $result=mysqli_query($con,$sSQL);
$tabla="";
$i=0;
while($extraido = mysqli_fetch_array($result) ) {
    global $res2;
    if($i==0){
        $tabla .= '<tr class="danger">';
        $primero=false;
    }else{
        $tabla .= '<tr>';
    }
    $tabla .= '<td>' . $extraido['cod_alumno'] . '</td>';
    $tabla .= '<td>' . $extraido['nombres'] . '</td>';
    $tabla .= '<td>' . $extraido['ape_paterno'] . '</td>';
    $tabla .= '<td>' . $extraido['ape_materno'] . '</td>';
    $tabla .= '<td>' . $extraido['grado'] . '</td>';
    $claves = preg_split("~-~", $extraido['fecNacimiento']);
    $fecNacimiento = $claves[2].'/'.$claves[1].'/'.$claves[0];
    $tabla .= '<td>' . $fecNacimiento. '</td>';
    $tabla .= '<td>' . $extraido['dni'] . '</td>';
    $tabla .= '<tr>';
    $i++;
    if($i==3){
        break;
    }
}
?>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--  jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

    <!-- Bootstrap Date-Picker Plugin -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <style>
        .form-group {
            text-align: left;
        }
        .uploader {
            position:relative;
            overflow:hidden;
            width:130px;
            height:170px;
            background:#f3f3f3;
            border:2px dashed #e8e8e8;
        }

        #filePhoto{
            position:absolute;
            width:130px;
            height:170px;
            top:0px;
            left:0;
            z-index:2;
            opacity:0;
            cursor:pointer;
        }

        .uploader img{
            position:absolute;
            width:130px;
            height:170px;
            top:-1px;
            left:-1px;
            z-index:1;
            border:none;
        }
    </style>
</head>

<body style="background-color: lightgrey">
<div class="container" >

    <div class="modal-body edit-modal" >
        <div class="modal-header" style="background-color: skyblue;">
            <h4 class="modal-title">Registro de alumno</h4>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile" style="border: solid 2px skyblue; padding-top: 20px ">
            <form class="form-horizontal" method="post" action="saveAlumno.php" id="updateStudentInfoForm">
                <div class="row">

                    <div class="col-md-12">
                        <div class="uploader col-md-2" onclick="$('#filePhoto').click()" style="left: 30px;">
                            <img id="imagePreview" src="../images/uploadImage.png" style="padding-top: 25px; padding-bottom: 25px">
                            <input type="file" name="userprofile_picture" id="filePhoto" accept="image/*"/>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="editFname" class="col-sm-4 control-label">Cod. alumno : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editFname" name="codAlumno" placeholder="Código del alumno" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editLname" class="col-sm-4 control-label">Apellido Pat. : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editLname" name="apePaterno" placeholder="Apellido paterno" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editDob" class="col-sm-4 control-label">Apellido Mat. : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editDob" name="apeMaterno" placeholder="Apellido Materno" required/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">Nombres : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editAge" name="nombres" placeholder="Nombres" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="editClassName" class="col-sm-4 control-label">Sexo : </label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="sexo" id="editClassName" required>
                                        <option value="" selected>--Seleccionar--</option>
                                        <option value="1">Masculino</option>
                                        <option value="2">Femenino</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editClassName" class="col-sm-4 control-label">Grado : </label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="grado" id="editClassName" required>
                                        <option value="" selected>--Seleccionar--</option>
                                        <option value="1">1°</option>
                                        <option value="2">2°</option>
                                        <option value="3">3°</option>
                                        <option value="4">4°</option>
                                        <option value="5">5°</option>
                                        <option value="6">6°</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">F. Nac. : </label>
                                <div class="col-sm-8">
                                    <input class="form-control" id="date" name="fecNacimiento" placeholder="dd/mm/aaaa" type="text" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">Teléfono : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editDob" name="telefono" placeholder="Teléfono" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">DNI : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editDob" name="dni" placeholder="DNI" required/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">Email : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editDob" name="email" placeholder="Email" required/>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-12">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="editAge" class="col-sm-3 control-label">Dirección : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editDob" name="direccion" placeholder="Dirección" required/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <center>
                                <button type="button" class="btn btn-warning" onclick="cleanFields()">Limpiar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </center>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div style="background-color: white">
        <table class="table table-bordered">
            <thead style="background-color: skyblue">
            <tr>
                <th>Código</th>
                <th>Nombres</th>
                <th>Ap. Paterno</th>
                <th>Ap. Materno</th>
                <th>Grado</th>
                <th>Fec. Nacimiento</th>
                <th>DNI</th>
            </tr>
            </thead>
            <tbody>
                <?php echo $tabla?>
            </tbody>
    </div>
</div>
<script>
    $(document).ready(function(){
        var date_input=$('input[name="fecNacimiento"]'); //our date input has the name "date"
        var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
        var options={
            format: 'dd/mm/yyyy',
            container: container,
            todayHighlight: true,
            autoclose: true,
            language: 'es'
        };
        date_input.datepicker(options);
    })

    var imageLoader = document.getElementById('filePhoto');
    imageLoader.addEventListener('change', handleImage, false);

    function handleImage(e) {
        var reader = new FileReader();
        reader.onload = function (event) {
            $('.uploader img').attr('src',event.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    }

    function cleanFields()
    {
        document.getElementById("updateStudentInfoForm").reset();
        document.getElementById("imagePreview").
    }
</script>
</body>
</html>