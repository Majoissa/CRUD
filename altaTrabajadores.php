<?php

    session_start();

    $enlace = mysqli_connect('localhost','prova','prova', 'empleados');
            if (!$enlace) {
                    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
                    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
                    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
                    exit;
                }


    $pregunta="INSERT INTO employees(ECode, EName, ESurname1, ESurname2, EEmail, EType) VALUES ('".$_POST['ECode']."','".$_POST['EName']."','".$_POST['ESurname1']."','".$_POST['ESurname2']."','".$_POST['EEmail']."','".$_POST['EType']."')";
    //echo $pregunta;
										

    $sql=mysqli_query($enlace, $pregunta);


    mysqli_close($enlace);
	header('Location:gestionDeTrabajadores.php');
    
    ?>