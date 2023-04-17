<?php
	session_start();
    

    $enlace = mysqli_connect('localhost','prova','prova', 'empleados');
    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }


   // $pregunta="DELETE FROM taulaprova WHERE Ecode='"$_SESSION['valor']"'";
	$pregunta="DELETE FROM employees WHERE ECode=".$_SESSION['valor'];
    //echo $pregunta;


    $sql=mysqli_query($enlace, $pregunta);


    mysqli_close($enlace);
   header('Location:gestionDeTrabajadores.php');
    
    ?>