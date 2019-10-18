<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<a href="guardar" class="btn btn-success">Enviar</a>
		<br><br>

	  	<?php foreach ($BFrias as $key => $p): ?>
	  		<div>
	  			<input type="checkbox" class="custom-control-input" id="<?php $p->ID_Bebida; ?> ">
	      		<label  class="custom-control-label"><?php echo $p->nombre_bebida;?></label>
	  		</div>
	      		
	  	<?php endforeach; ?>	
	</div>
		
</body>

</html>