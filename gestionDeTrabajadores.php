<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Datos de trabajadores</title>
    <style>
	@import url("https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap");
body {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background: linear-gradient(45deg,  #FFA152, #FFF252 );
  font-family: "Sansita Swashed", cursive;
}
.center {
  position: relative;
  padding: 50px 50px;
  background: #fff;
  border-radius: 10px;
}
.center h1 {
  font-size: 2em;
  text-align: center;
  border-left: 5px solid #FFA152;
  padding: 10px;
  color: #000;
  letter-spacing: 5px;
  margin-bottom: 60px;
  font-weight: bold;
  padding-left: 10px;
}
.center .inputbox {
  position: relative;
  width: 500px;
  height: 50px;
  margin-bottom: 10px;
}
.center .inputbox input {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 15px;
  border-radius: 10px;
  font-size: 1.2em;
}
.center .inputbox:last-child {
  margin-bottom: 0;
}
.center .inputbox span {
  position: absolute;
  top: 5px;
  left: 20px;
  font-size: 1em;
  transition: 0.6s;
  font-family: sans-serif;
}
.center .inputbox input:focus ~ span,
.center .inputbox input:valid ~ span {
  font-size: 1em;
}
.center .inputbox [type="button"] {
  width: 30%;
  background: #FF9652 ;
  color: #fff;
  border: #fff;
}
.center .inputbox:hover [type="button"] {
  background: linear-gradient(45deg,  #FFA152, #FFF252);
}
button{
border: none;
}
table, thead, tr, th{
	border: 2px solid #000;
	font-family: sans-serif;
	padding: 10px;
	
	
}

	</style>
		  
	</head>

	<body>
	<div class="center">
		<div>
			<h1>Gestion de trabajadores</h1>
		</div>
		<form action="agregarTrabajador.html">
			<div class="inputbox">
				<button><input type="button" value="Crear registro"></button>
			</div>
		</form>
		<table>
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Primer apellido</th>
					<th>Segundo apellido</th>
					<th>E-mail</th>
					<th>Nº Tipo</th>
					<th>Eliminar</th>
					<th>Editar</colgroup></th>
				</tr>
			</thead>

			<?php
						$enlace = mysqli_connect('localhost','prova','prova', 'empleados');
						session_start();

						if (!$enlace) {
							echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
							echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
							echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
							exit;
						}

						
						$sql= mysqli_query($enlace, "SELECT * FROM employees");

						while ($row = mysqli_fetch_array($sql)){
							
								echo "<tr>";
										echo "<td>".$row[0]."</td>";
										echo "<td>".$row[1]."</td>";
										echo "<td>".$row[2]."</td>";
										echo "<td>".$row[3]."</td>";
										echo "<td>".$row[4]."</td>";
										echo "<td>".$row[5]."</td>";

													//Preparem el botó de baixa.


										echo "<td>";
										echo "<form action= 'eliminarTrabajador.php?clau=$row[0]' method='POST'><button type='button' ><input type = submit class='button' value=Eliminar 
	class='button'><input type='hidden' name='clau' value='$row[0]'></button></form>";
										
										echo "</td>";

													 //Preparem el botó de editar.
										echo "<td>";
										echo "<form action= 'editarTrabajador.php?clau=$row[0]' method='POST'><button><input type = 'button' class='button' value=Editar><input type='hidden' name='clau' value='$row[0]'></button></form>";
										
										echo "</td>";


													 
								echo "</tr>";					
							
						}

						mysqli_close($enlace);
			?>
		</table>
		</div>
	</body>
</html>