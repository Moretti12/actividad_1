<?php

if( isset($_POST['submit']) && !empty($_POST['submit'])){
    $estudiante = $_POST['nombre'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];
    $nota4 = $_POST['nota4'];
    
    $promedio = ($nota1 + $nota2+ $nota3 + $nota4)/4;

    echo "<br>El estudiante <br>" .$estudiante. "<br>";
    echo "<br>La asignatura es: Desarrollo de Sistemas Web Dinámicos";
    echo "<br>El promedio es:" .$promedio. "<br>";

    if($promedio > 3.9){
        echo "Has APROBADO la asignatura";
    }else{
        echo "Has REPROBADO la asignatura";
        echo '<script language="javascript">alert("REPROBADO");</script>';
    }

}