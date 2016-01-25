<html>
<body>
 <title>Agenda</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/weeks.js"></script>
</head>
<body>
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
				<div class="panel-heading"><h3>Lunes</h3> <h3 class="dia">1</h3></div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div>
		</div>
		<div class="col-sm-3 text-center">
			<div class="panel panel-warning">
				<div class="panel-heading"> <h3>Martes</h3> <h4 class="dia">2</h4> </div>
				<div class="panel-body">
					<p>evento 2</p>
				</div>
			</div>    
		</div>
		<div class="col-sm-3 text-center">
			<div class="panel panel-warning">
				<div class="panel-heading">  <h3>Miercoles</h3> <h4 class="dia">3</h4></div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div> 
		</div>
		<div class="col-sm-3 text-center">
			<div class="panel panel-warning">
				<div class="panel-heading">  <h3>Jueves</h3><h4 class="dia">4</h4>    </div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div> 
		</div>
		<div class="col-sm-3 text-center">
			<div class="panel panel-warning">
				<div class="panel-heading"> 
					<h3 id="diaviernes">Viernes</h3> <h4 class="dia">5</h4>
				</div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div> 
		</div>
		<div class="col-sm-3 text-center">
		<div class="panel panel-warning">
				<div class="panel-heading">  <h3>Sabado</h3><h4 class="dia">6</h4>     </div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div>       
		</div>
		<div class="col-sm-3 text-center">
		<div class="panel panel-warning">
				<div class="panel-heading">  <h3>Domingo</h3><h4 class="dia">7</h4>     </div>
				<div class="panel-body">
					<p>evento 1</p>
				</div>
			</div> 
		  
		  
		</div>
	  </div>
	</div>
	<button id="previous" type="button" class="btn btn-success center-block">Semana Anterior</button>
	<button id="next" type="button" class="btn btn-danger center-block">Semana Siguiente</button>
	</div>
</div>

</body>
</html>