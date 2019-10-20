<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Login</title>
        <meta charset="utf-8" />
        
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css" />
        
	</head>
  <body>
    <nav class="navbar navbar-dark bg-primary">
        <span class="navbar-brand mb-0 h1">UTSC</span>
    </nav>
    <div class="container">
        <h1 class="page-header">Iniciar sesion</h1>
        
        
<form id="frm-login" action="?c=login&a=checkLogin" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Usuario</label>
        <input type="text" name="user" value="" class="form-control" placeholder="Usuario" required>
    </div>
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" name="contra" value="" class="form-control" placeholder="Contraseña" required>
    </div>
    <hr />    
    <div class="text-right">
        <button class="btn btn-primary">Ingresar</button>
    </div>
</form>
</body>
</html>
