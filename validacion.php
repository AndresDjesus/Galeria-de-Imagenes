<?php 
require './utils/ErrorDisplayer.php'; 
require './utils/Blob.php';
require 'galeria.php';
    
$galeria= new Galeria();

    if(isset($_POST['val'])) {
      switch ($_POST['val']){

            case 1: //Creacion de Imagenes
            $blob = new Blob(file_get_contents($_FILES['imagen']['tmp_name']));
            $resultado=$galeria->crearImagenes($_POST['titulo'],$_POST['descripcion'], $blob->getData()); 
                if($resultado) {
            echo "<script>
            function redireccionar() {
            window.location.href = 'index.php';
            }

            window.alert('Su Imagen se creo exitosamente');
            setTimeout(redireccionar, 1000);
            </script>";
                    
            }
        
                
             
    break; 

            case 2: //Subir Imagenes 
            $blob = new Blob(file_get_contents($_FILES['imagen']['tmp_name']));
            $resultado=$galeria->crearImagenes($_POST['titulo'],$_POST['descripcion'], $blob->getData());
            if($resultado) {
                echo "<script>
            function redireccionar() {
            window.location.href = 'index.php';
            }

            window.alert('Su Imagen se subio exitosamente');
            setTimeout(redireccionar, 1000);
            </script>";
            
    break;
    
}
}    
}