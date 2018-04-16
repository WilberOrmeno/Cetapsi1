<!DOCTYPE html>
<html lang="es">
<?php
    include("../cabecera.php");
    session_start();
    include ("../bloqueDeSeguridad.php");
?>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .uploader {
            position:relative;
            overflow:hidden;
            width:200px;
            height:250px;
            background:#f3f3f3;
            border:2px dashed #e8e8e8;
        }

        #filePhoto{
            position:absolute;
            width:200px;
            height:250px;
            top:0px;
            left:0;
            z-index:2;
            opacity:0;
            cursor:pointer;
        }

        .uploader img{
            position:absolute;
            width:200px;
            height:250px;
            top:-1px;
            left:-1px;
            z-index:1;
            border:none;
        }
    </style>
</head>

<body style="background-color: lightgrey">
<div class="uploader" onclick="$('#filePhoto').click()">
    click here or drag here your images for preview and set userprofile_picture data
    <img src=""/>
    <input type="file" name="userprofile_picture"  id="filePhoto" />
</div>
</body>
<script type="application/javascript">
    var imageLoader = document.getElementById('filePhoto');
    imageLoader.addEventListener('change', handleImage, false);

    function handleImage(e) {
        var reader = new FileReader();
        reader.onload = function (event) {
            $('.uploader img').attr('src',event.target.result);
        }
        reader.readAsDataURL(e.target.files[0]);
    }
</script>
</html>