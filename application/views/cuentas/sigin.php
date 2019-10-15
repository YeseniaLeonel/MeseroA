<!DOCTYPE html>
<html>
<head>
	<title>Sign In</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<form action="http://localhost/mesero/index.php/persona/guardar">
			<div class="form-group">
			    <label>Nombre</label>
			    <input type="text" class="form-control" name="nombre" >
			</div>
			<div class="form-group">
			    <label>Apellido Paterno</label>
			    <input type="text" class="form-control" name="apellido1" >
			</div>
			<div class="form-group">
			    <label>Apellido Materno</label>
			    <input type="text" class="form-control" name="apellido2" >
			</div>
			<div class="form-group">
			    <label>Fecha Nacimiento</label>
			    <input type="text" class="form-control" placeholder="aaaa-mm-dd" name="fechanacimiento" >
			</div>	

		  <div class="form-group">
		    <label>Correo </label>
		    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa email" name="email">
		  </div>
		  <div class="form-group">
		    <label>Password</label>
		    <input type="password" class="form-control" placeholder="Contraseña" name="password">
		  </div>
		  <div class="form-group form-check">
		    <input type="checkbox" class="form-check-input" id="exampleCheck1">
		    <label class="form-check-label" for="exampleCheck1">Acepto terminos y condiciones</label>
		  </div>
		  <button type="submit" class="btn btn-primary" >Guardar</button>
		</form>
	</div>
</body>
</html>