<html>
<body>
 <title>Agenda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<?php
		// Conectando, seleccionando la base de datos
		$link = mysql_connect('localhost', 'root', '');
			//or die('No se pudo conectar: ' . mysql_error());
		//echo 'Connected successfully';
		mysql_select_db('eventsapp') ;//or die('No se pudo seleccionar la base de datos');

		// Realizar una consulta MySQL
		$query = 'SELECT id, name FROM event';
		$result = mysql_query($query);// or die('Consulta fallida: ' . mysql_error());	
	?>
<!-- falta hacer un paner que lo englobe i lo de los dias -->
<div class="container">
  <div class="jumbotron">
    <h1>Agenda de Eventos</h1>
    
  </div>
  <div class="panel panel-primary">
	<div class="panel-heading">INICIO</div>
	<div class="panel-body">
	  <div class="row">
		<div class="col-sm-3 text-center">
			<div class="panel panel-warning">
				<div class="panel-heading"><h3>Lunes <h3 id=dialunes>1</h3></h3></div>
				<div class="panel-body">
					<p>
					<?php

					if(!empty($result)){

						// Imprimir los resultados en HTML
						echo "<table>\n";
						while ($line = mysql_fetch_array($result, MYSQL_NUM)) {
							echo "\t<tr>\n";
							if($line[0]==1){
								echo "\t\t<td>$line[1]</td>\n";							
							}
							echo "\t</tr>\n";
						}
						echo "</table>\n";

						// Liberar resultados
						mysql_free_result($result);

						// Cerrar la conexión
						mysql_close($link);
	
					}else{
						echo "Evento x del dia x usando php"; 
					}
					?>
					
					</p>
				</div>
			</div>
		</div>
		<div class="col-sm-3 text-center">
			<div class="panel panel-warning">
				<div class="panel-heading"> <h3>Martes <h3 id=diamartes>2</h3> </h3></div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div>   
		</div>
		<div class="col-sm-3 text-center">
			<div class="panel panel-warning">
				<div class="panel-heading">  <h3>Miercoles <h3 id=diamiercoles>3</h3></h3>     </div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div> 
		</div>
		<div class="col-sm-3 text-center">
			<div class="panel panel-warning">
				<div class="panel-heading">  <h3>Jueves<h3 id=diajueves>4</h3></h3>     </div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div> 
		</div>
		<div class="col-sm-3 text-center">
			<div class="panel panel-warning">
				<div class="panel-heading"> <h3>Viernes<h3 id=diaviernes>5</h3></h3></div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div> 
		</div>
		<div class="col-sm-3 text-center">
		<div class="panel panel-warning">
				<div class="panel-heading">  <h3>Sabado<h3 id=diasabado>6</h3></h3>     </div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div>       
		</div>
		<div class="col-sm-3 text-center">
		<div class="panel panel-warning">
				<div class="panel-heading">  <h3>Domingo<h3 id=diadomingo>7</h3></h3>     </div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div> 
		  
		  
		</div>
	  </div>
	</div>
	<button type="button" class="btn btn-success center-block">Semana Anterior</button><button type="button" class="btn btn-danger center-block">Semana Siguiente</button>
	</div>

		<?php
			echo "<h4> Mensaje generado por PHP:</h4>";
			echo "<h2> Esto es una demo de una aplicación que se encargaría de almacenar información de eventos y poder consultarlos por dia y por semana </h2>";
		?>
	</div>

</div>

</body>
</html>