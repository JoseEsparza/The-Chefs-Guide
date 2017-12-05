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

		<div class="container">
			<div class="col-md-10 col-md-offset-1">
				<div class="carta_receta">
					<img ng-src="http://localhost/TCG/Style/Assets/{{o_recetas[id_url].foto}}" alt="{{o_recetas[id_url].nombre_receta}}" class="img-responsive">
					<div class="nombre_receta">
						<a href="receta.php?id={{o_recetas[id_url].idrecetas}}" ng-click=""><span>{{o_recetas[id_url].nombre_receta}}</span></a><a href="" class="favorito"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="col-md-10 col-md-offset-1 text-justify" ng-repeat="(key, paso) in pasos">
				<br>
				<h3>Paso {{paso.num_paso}}</h3>
				<p >{{paso.pasos}}</p>
				<img ng-src="http://localhost/TCG/Images/Receta_Brownie_id1/{{paso.ruta_foto}}" alt="{{paso.num_paso}}" class="img-responsive center-block">
				<br>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.js"></script>
		<script src="JS/jquery.easing.min.js"></script>
		<script src="JS/angular.min.js"></script>
		<script src="Style/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
		<script>

			function getParameterByName(name, url) {
	    		if (!url) url = window.location.href;
	    		name = name.replace(/[\[\]]/g, "\\$&");
			    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
			        results = regex.exec(url);
			    if (!results) return null;
			    if (!results[2]) return '';
			    return decodeURIComponent(results[2].replace(/\+/g, " "));
			}

			var idreceta = getParameterByName('id');

			var app = angular.module('TCG', [])


			app.controller('main', ['$scope', '$http',function($scope, $http){


				$scope.o_recetas = [];

				$scope.pasos = [];

				$scope.pasos_show = [];

				$scope.id_url = idreceta-1;

				$scope.id_uri = idreceta;

				$scope.ingredientes = [];
				// console.log($scope.id_url);

				$http({
				  method: 'GET',
				  url: 'http://localhost/api/api.php/recetas' //'http://thechefsguides.org/api/api.php/recetas'
				}).then(function successCallback(response) {
				    // this callback will be called asynchronously
				    // when the response is available

				    $scope.o_recetas = response.data
				    console.log($scope.o_recetas);

				    }, function errorCallback(response) {
				    // called asynchronously if an error occurs
				    // or server returns response with an error status.
				    console.log('Hubo un error!!!! NOOOOOOOOOOO')
				});

				$http({
				  method: 'GET',
				  url:'http://localhost/api/api.php/pasos_receta' //'http://thechefsguides.org/api/api.php/pasos_receta'
				}).then(function successCallback(response) {
				    // this callback will be called asynchronously
				    // when the response is available

				    console.log(response)

				    $scope.pasos = response.data;
				    // function pasosRecetas(id, paso, num_paso){
				    // 	this.id = id;
				    // 	this.paso = paso;
				    // 	this.num_paso = num_paso;
				    // }
				    // Object.keys(response.data).forEach(function (key) {

   					// 	if($scope.id_uri == response.data[key].id_receta){
   					// 		$scope.pasos_show = new pasosRecetas(response.data[key].id_receta, response.data[key].pasos, response.data[key].num_paso)
   					// 		// $scope.pasos_show.push("id : " + response.data[key].id_receta, "paso : " + response.data[key].pasos, "num_paso : " + response.data[key].num_paso);
   					// 		 }
   					// 	});
				    // console.log($scope.pasos_show)


				    }, function errorCallback(response) {
				    // called asynchronously if an error occurs
				    // or server returns response with an error status.
				    console.log('Hubo un error!!!! NOOOOOOOOOOO')
				});
				console.log($scope.pasos_show)

				//'http://thechefsguides.org/api/api.php/pasos_receta'
				$http({
						method: 'GET',
						url: 'http://localhost/api/api.php/ingredientes'//'http://thechefsguides.org/api/api.php/ingredientes'
					}).then(function successCallback(response) {
				    // this callback will be called asynchronously
				    // when the response is available

				    $scope.ingredientes = response.data
				    console.log($scope.ingredientes);

				    }, function errorCallback(response) {
				    // called asynchronously if an error occurs
				    // or server returns response with an error status.
				    console.log('Hubo un error!!!! NOOOOOOOOOOO')
				});
			}])

		</script>

	</body>
</html>