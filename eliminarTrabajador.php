<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Eliminar Registre</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" language="JavaScript"></script>
	</head>
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
  width: 100%;
  border: 2px solid #000;
  outline: none;
  background: none;
  padding: 15px;
  border-radius: 10px;
  font-size: 15px;
  height:40px;
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
  width: 15%;
  background: #FF9652 ;
  color: #fff;
  border: #fff;
  font-family: sans-serif;
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
	border-radius: 10px;
	
}

</style>
   <div class="center">
	<body>
			<h1>Eliminar Registro</h1>
		<table >
			<thead>
				<tr>
					<th>Codigo</th>
					<th>Nombre</th>
					<th>Primer apellido</th>
					<th>Segundo apellido</th>
					<th>E-mail</th>
					<th>Nº Tipo</th>
				</tr>
			</thead>

			<?php
							session_start();
							

							$enlace = mysqli_connect('localhost','prova','prova', 'empleados');
							if (!$enlace) {
								echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
								echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
								echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
								exit;
							}

							$pregunta="SELECT * FROM employees WHERE ECode='".$_POST['clau']."'";
							$_SESSION['valor']=$_POST['clau'];
						   // echo $pregunta;
							

							$sql=mysqli_query($enlace,$pregunta);
							$row=mysqli_fetch_array($sql);
							echo "<tr align='center'>";
								echo "<td>".$row[0]."</td>";
								echo "<td>".$row[1]."</td>";
								echo "<td>".$row[2]."</td>";
								echo "<td>".$row[3]."</td>";
								echo "<td>".$row[4]."</td>";
								echo "<td>".$row[5]."</td>";
							echo "</tr>";
							echo "<br>";
						
							 $sql=mysqli_query($enlace,$pregunta);


							mysqli_close($enlace);
						 							
			?>
		</table>
					<form action="borrar_treballadorf.php">
						<div class="inputbox">
							<button><input type="button" value="OK"></button>
						</div>
					</form>
				
				
					<form action="gestionDeTrabajadores.php">
						<div class="inputbox">
						<button><input type="button" value="Atras"><button>
						</div>
					</form>
	  </div>
	</body>
</html>