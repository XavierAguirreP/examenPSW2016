<?php
   require_once("../clases/conexion.php");
   require_once("../clases/visita.php");
   require_once("../clases/visitaColector.php");

   $alm = new visita();
   $model = new visitaColector();
   $id= 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>CONSULTA VISITA</title>
</head>
<body>
	<div class="pure-g">
		<div class="pure-u-1-12">
			<br>
				<a href="Administrator.php">Regresar</a>
			<br>
			<br>
			<table class="pure-table pure-table-horizontal" border="1">
			   <thead>
			      <tr>
				 <th style="text-align:left;">ID</th>
				 <th style="text-align:left;">DESCRIPCION</th>
			      </tr>
			   </thead>
			   <?php foreach ($model->ReadVisita() as $r): ?>
			      <tr>
				 <td><?php echo $r-> getId();  ?></td>
				 <td><?php echo $r-> getDescripcion(); ?></td>
			      </tr>
			   <?php endforeach; ?>
			</table>
		</div>
	</div>
</body>
</html>
