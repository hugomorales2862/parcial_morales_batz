<?php
require '../parcial_morales_batz/conexion/cursos.php';

try {
    $curso = new Curso ($_POST);
    $resultado = $producto-> guardar();
    $error = "NO SE GUARDARON LOS DATOS";

} catch (PDOException $e) {
    $error = $e->getMessage();
}catch (Exception $e2){
    $error = $e2->getMessage();
}
?>


