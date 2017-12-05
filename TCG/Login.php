<!DOCTYPE html>
<html lang="en" ng-app='TCG'>
	<head>
		<meta charset="utf-8">
		<title>The Chef's Guide</title>
		<link rel="stylesheet" type="text/css" href="Style/bootstrap-3.3.7-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="Style/TCG.css">
	</head>
	<body ng-controller='main'>

		<header>
			<nav class="navbar navbar-default navbar-fixed-top m_menu">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Main_menu">
							<span class="sr-only">Menu</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a href="index.php" class="logo_txt"><img class="logo" src="Style/Assets/Chefsito-01.png" alt=""> The Chef's Guide</a>
					</div>
					<div class="collapse navbar-collapse" id="Main_menu">
						<ul class="nav navbar-nav navbar-right m_menu2">
							<li class=""><a href="index.php">Recetas</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Perfil <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="Login.php">Entrar</a></li>
									<li><a href="Register.php">Registrarme</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<div id="Login" class="row">
			<div class="txt_login col-md-offset-5 col-md-2">
				<p>Entrar</p>
			</div>
			<div class="data col-md-offset-3 col-md-6">
				<div class="user_i form-group col-md-6">
					<input class="form-control" type="text" name="email" placeholder="Correo electrónico">
					<input class="form-control" type="password" name="password" placeholder="Contraseña">
					<div class="checkbox asd">
						<label><input type="checkbox" name="">Recuerdame</label>
					</div>
					<a class="btn_db col-md-12 btn_entrar" href="index.php">ENTRAR</a>
				</div>
				<div class="text-justify benefits col-md-6">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel tortor ut lorem rutrum pharetra. Pellentesque egestas mauris diam, non rhoncus massa rutrum sit amet.</p>
					<a class="btn_db1 col-md-12" href="Register.php">REGISTRARME</a>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="JS/jquery.easing.min.js"></script>
		<script src="JS/angular.min.js"></script>
		<script src="Style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
	</body>
</html>