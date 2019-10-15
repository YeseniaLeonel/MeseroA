<!DOCTYPE html>
<html>
<head>
	<title>iniciar sesión</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
</head>
<body>
	<div class="container">
		<form action="http://localhost/mesero/index.php/persona/login" method="post">
			<div class="form-group">
			    <label>Correo </label>
			    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa email" name="email">
			</div>
			<div class="form-group">
			    <label>Password</label>
			    <input type="password" class="form-control" placeholder="Contraseña" name="password">
			</div>
			<button type="submit" class="btn btn-primary" >Ingresar</button>
		</form>
	</div>
</body>
</html>