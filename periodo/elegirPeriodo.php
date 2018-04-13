<!DOCTYPE html>
<html lang="es">
<head>
    <?php
    include("..\cabecera.php")
    ?>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body style="background-color: lightgrey">
<div class="container" >
    <div class="modal-body edit-modal" >
        <div class="modal-header" style="background-color: skyblue;">
            <h4 class="modal-title">Seleccionar periodo</h4>
        </div>
        <div role="tabpanel" class="tab-pane" id="profile" style="border: solid 2px skyblue; padding-top: 20px ">
            <form class="form-horizontal" method="post" action="student/updateInfo" id="updateStudentInfoForm">
                <div class="row">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>