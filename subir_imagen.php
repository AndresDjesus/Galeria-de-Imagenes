<?php
require './utils/ErrorDisplayer.php';
include 'cabecera.php';
require 'galeria.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP4 - GALERIA</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
<div>
<div class="dcont" align="center"> <h1>Suba una imagen a su galeria</h1><br /><br />
    <form name="imagenes" method="post" enctype="multipart/form-data" action="validacion.php">
        <table border="1" cellspacing="3" cellpadding="3" align="center" bgcolor="#87ceea" width="400">
            <tr>
                <td align="center" bgcolor="#FFE57E"><b>Imagen:</b></td>
                <td bgcolor="#ffffff"><input name="imagen" type="file"></td>
            </tr>
            <tr>
                <td align="center" bgcolor="#FFE57E"><b>Titulo:</b></td>
                <td bgcolor="#ffffff"><input name="titulo" type="text" placeholder="Título"></td>
            </tr>

            <tr>
                <td align="center" bgcolor="#FFE57E"><b>Descripcion:</b></td>
                <td bgcolor="#ffffff"><input name="descripcion" type="text" placeholder="Descripción"></td>
            </tr>
            <tr bgcolor="#ffee99">
                <td colspan="2" align="center" bgcolor="#cccccc">
                    <input type="submit" value="Guardar">&nbsp;&nbsp;&nbsp;<input type="reset" value="Eliminar">
                    <input type="hidden" name="val" value="2">
                </td>
            </tr>

        </table>
    </form>
</div>
</body>
</html>