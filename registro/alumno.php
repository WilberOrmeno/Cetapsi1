<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include("..\cabecera.php")
    ?>
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
    </style>
</head>

<body style="background-color: lightgrey">
<div class="container" >

    <div class="modal-body edit-modal" >
        <div class="modal-header" style="background-color: skyblue;">
            <h4 class="modal-title">Registro de alumno</h4>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile" style="border: solid 2px skyblue; padding-top: 20px ">
            <form class="form-horizontal" method="post" action="student/updateInfo" id="updateStudentInfoForm">
                <div class="row">

                    <div class="col-md-12">
                        <div class="col-md-2" style="background-color: red; color: red; left: 40px; margin-right: 40px; right: 40px; padding: 15px; height: 180px; width: 140px;" >
                            saf
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="editFname" class="col-sm-4 control-label">Cod. alumno : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editFname" name="editFname" placeholder="Código del alumno" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editLname" class="col-sm-4 control-label">Apellido Pat. : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editLname" name="editLname" placeholder="Apellido paterno"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editDob" class="col-sm-4 control-label">Apellido Mat. : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editDob" name="editDob" placeholder="Apellido Materno" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">Nombres : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editAge" name="editAge" placeholder="Nombres" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="editClassName" class="col-sm-4 control-label">Sexo : </label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="editClassName" id="editClassName">
                                        <option value="" selected>--Seleccionar--</option>
                                        <option value="">Masculino</option>
                                        <option value="">Femenino</option>

                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="editClassName" class="col-sm-4 control-label">Grado : </label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="editClassName" id="editClassName">
                                        <option value="" selected>--Seleccionar--</option>
                                        <option value="">1°</option>
                                        <option value="">2°</option>
                                        <option value="">3°</option>
                                        <option value="">4°</option>
                                        <option value="">5°</option>
                                        <option value="">6°</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">F. Nac. : </label>
                                <div class="col-sm-8">
                                    <input class="form-control" id="date" name="date" placeholder="dd/mm/aaaa" type="text"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">Teléfono : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editDob" name="editDob" placeholder="Teléfono" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">DNI : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editDob" name="editDob" placeholder="DNI" />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="editAge" class="col-sm-4 control-label">Email : </label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="editDob" name="editDob" placeholder="Email" />
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
                                    <input type="text" class="form-control" id="editDob" name="editDob" placeholder="Dirección" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <div class="col-sm-12">
                            <center>
                                <button type="button" class="btn btn-warning">Limpiar</button>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </center>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var date_input=$('input[name="date"]'); //our date input has the name "date"
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
</script>
</body>
</html>