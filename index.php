<?php
require './utils/ErrorDisplayer.php';
include 'cabecera.php'; 
require 'galeria.php';

$galeria= new Galeria();
$resultado=$galeria->mostrarImagenes();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Galería de imágenes</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style>
        .imagen {
            width: 100%;
            height: 90px;    
            transition: width 0.8s ease-in-out, height 0.8s ease-in-out;
        }
        .imagen:hover{
            cursor: cell;
            width: 300px;
            height: 300px;
        }
        .cuadro{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body background-color="red">

<div class="dcont"><p align="right">
<a href="subir_imagen.php">Subir Imagen</a> | <a href="crear_imagen.php">Crear Imagen</a>
</p>
</div>
<div class="galeria" align="center">
      <table width="320" border="2" align="center">
        <tr>
        <?php
            if(count($resultado) > 0) {
                for ($i=0; $i < count($resultado); $i++) {
                    $imagen_base64 = base64_encode($resultado[$i]['imagen']);
                    echo "<tr>";
                    echo "<td class='cuadro'>";
                    echo "<img class='imagen' src='data:image/png;base64,$imagen_base64' />";
                    echo "</td>";
                    echo "</tr>";
                    echo "<tr>";
                    echo "<td>";
                    echo "<br />";
                    echo "<i>Titulo</i>:". $resultado[$i]['titulo']."<br />";
                    echo "<i>Descripcion</i>:". $resultado[$i]['descripcion']."<br />";
                    echo "</td>";
                    echo "</tr>";
                }
            }
            
        ?>
        </tr> 
      </table>
    </div>
</div>
</body>
</html>
