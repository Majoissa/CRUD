<?php
	session_start();
    

    $enlace = mysqli_connect('localhost','prova','prova', 'empleados');
    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }
	mysqli_query($enlace, "SELECT * FROM employees");
	
	$pregunta="UPDATE employees SET ECode='".$_POST['ECode']."',EName='".$_POST['EName']."',ESurname1='".$_POST['ESurname1']."',ESurname2='".$_POST['ESurname2']."',EEmail='".$_POST['EEmail']."',EType='".$_POST['EType']."' WHERE ECode=".$_SESSION['valor'];
	
	
	
	if (mysqli_query($enlace, $pregunta)) {
		  echo "Record updated successfully";
		} else {
		  echo "Error updating record: " . mysqli_error($conn);
		}

 


    mysqli_close($enlace);
   header('Location:gestionDeTrabajadores.php');
    
    ?>