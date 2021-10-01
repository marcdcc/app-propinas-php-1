<?php 
if(isset($_POST['submit'])){
    $cuenta = $_POST['cuenta'];
    $servicio = $_POST['servicio'];
    $personas = $_POST['personas'];
    echo $cuenta;
    echo $servicio;
    echo $personas;
    $formula=((float)$cuenta*(float)$servicio)/(float)$personas;
    /* continuación del desarrollo */
    if (is_nan($formula)) {
        header("Location:../index.php");
    }else{
        header("Location:../index.php?res=".$formula);
    }
}else{
    header("Location:../index.php");
}

?>