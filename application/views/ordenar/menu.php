<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<br><br>
		
		<br><br>
		<h2> <?php echo "$titulo" ?></h2>
	  	<?php foreach ($menuArray as $key => $p): ?>
	  		<div>
	  			<input type="checkbox" class="custom-control-input" id="1">
	      		<label  class="custom-control-label">
	      			<?php if(isset($p->nombre_b)){ 
	      					 echo "$p->nombre_b";
	      			 }else{
	      			 	echo "$p->nombre_platillo";
	      			 }?>			
	      		</label>
	  		</div>	      		
	  	<?php endforeach; ?>	
	  	<br><br>
	  	
	</div>
	<a href="guardar" class="btn btn-success">Enviar</a>
</body>

</html>