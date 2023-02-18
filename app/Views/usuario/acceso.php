<!DOCTYPE html>
<html>
<head>
	<title>La especial</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url(RECURSO_USUARIO_CSS.'style.css')?>">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="favicon.ico">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
</head>
<body>
	<img class="wave" >
	<div class="container">
		<div class="img">
			<img src="<?= base_url(RECURSO_USUARIO_IMG.'Pastel.png') ?>">
		</div>
		<div class="login-content">
			<form action="index.html">
				<img src="<?= base_url(RECURSO_USUARIO_IMG.'Usuario.png') ?>">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Nombre de Usuario</h5>
           		   		<input type="text" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input">
            	   </div>
            	</div>
            	<a href="#">Recordar Contraseña?</a>
            	<input type="submit" class="btn" value="Ingresar">
				<input type="submit" class="btn" value="Registrarse">
            </form>
        </div>
    </div>
	<script type="text/javascript" src="js/main.js"></script>
    
</body>
</html>