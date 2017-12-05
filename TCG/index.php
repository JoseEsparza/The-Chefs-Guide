<!DOCTYPE html>
<html lang="en" ng-app='TCG'>
	<head>
		<meta charset="utf-8">
		<title>The Chef's Guide</title>
		<link rel="stylesheet" type="text/css" href="Style/bootstrap-3.3.7-dist/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="Style/TCG.css">
		<link rel="stylesheet" type="text/css" href="Style/font-awesome-4.7.0/css/font-awesome.min.css">
	</head>
	<body ng-controller="main">

		<!-- Menú -->
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

		<!-- Filtros -->
		<div class="container" id="Filtros">
			<div class="container-fluid">
				<div class="dropdown col-xs-6 col-md-2 co_min">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Costo Mínimo
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">$100</a></li>
					    <li><a href="#">$200</a></li>
					    <li><a href="#">$300</a></li>
					</ul>
				</div>

				<div class="dropdown col-xs-6 col-md-2 co_max">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Costo Máximo
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">$100</a></li>
					    <li><a href="#">$200</a></li>
					    <li><a href="#">$300</a></li>
					</ul>
				</div>

				<div class="dropdown col-xs-12 col-md-4 col-md-offset-4 ingredientes">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Ingredientes
					<span class="caret"></span></button>
					<ul class="dropdown-menu">
						<li><a href="#">$100</a></li>
					    <li><a href="#">$200</a></li>
					    <li><a href="#">$300</a></li>
					</ul>
				</div>
			</div>
		</div>

		<!-- Recetas más recientes -->
		<div  class="container" id="Cartas_recetas">
			<div class=" col-xs-10 col-md-4 carta_receta" ng-repeat="(key, nombre) in meals">
				<img ng-src="http://localhost/TCG/Style/Assets/{{nombre.foto}}" alt="{{nombre.nombre_receta}}" class="img-responsive">
				<div class="nombre_receta">
					<a href="receta.php?id={{nombre.idrecetas}}" ng-click=""><span>{{nombre.nombre_receta}}</span></a><a href="" class="favorito"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
				</div>
			</div>
		</div>

		<br>
		<br>
		<br>
		<br>
		<div class="container col-md-offset-4 col-md-4 Filtros">
		    <ul class="pagination pagination-lg">
		        <li class="disabled"><a href="#">Previous</a></li>
		        <li class="disabled"><a href="#">1</a></li>
		        <li class="disabled"><a href="#">2</a></li>
		        <li class="disabled"><a href="#">3</a></li>
		        <li class="disabled"><a href="#">4</a></li>
		        <li class="disabled"><a href="#">5</a></li>
		        <li class="disabled"><a href="#">Next</a></li>
		    </ul>
		</div>


		<!-- Footer -->
		<!-- <footer class="footer">
			<div class="container">
				<div class="text-center">
					<small>Copyright © Your Website 2017</small>
				</div>
			</div>
		</footer> -->


		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="JS/jquery.easing.min.js"></script>
		<script src="JS/angular.min.js"></script>
		<script src="Style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

		<script>
			var app = angular.module('TCG', [])

			app.controller('main', ['$scope', '$http', function($scope, $http,  $log){

			    $scope.meals = [];

			    $http({
					  method: 'GET',
					   url: 'http://localhost/api/api.php/recetas' //'http://thechefsguides.org/api/api.php/recetas'
					}).then(function successCallback(response) {
					    // this callback will be called asynchronously
					    // when the response is available

					    $scope.meals = response.data;
					    console.log($scope.meals);

					    }, function errorCallback(response) {
					    // called asynchronously if an error occurs
					    // or server returns response with an error status.
					    console.log('Hubo un error!!!! NOOOOOOOOOOO')
					});
			}])
		</script>

	</body>
</html>