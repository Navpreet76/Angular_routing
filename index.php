<!DOCTYPE html>
<html>
<head>
<title>Angular Routing</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
</head>
<body ng-app="myApp">

<h2>Angular routing</h2

>
<p><a href="#/!">Main</a></p>

<a href="#!ferrari">Ferrari</a>
<a href="#!lamborghini">Lamborghini</a>
<a href="#!mercedes">Mercedes</a>
<a href="#!spyker">Spyker</a>
<a href="#!mclaren">Mclaren</a>

<!-- <a href="#!orange"></a>
<a href="#!purple"></a> -->

<div ng-view></div>

<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider){
	$routeProvider
	.when("/", {
		templateUrl : "main.php"
	})
	.when("/ferrari", {
		templateUrl : "ferrari.php"
	})
	.when("/lamborghini", {
		templateUrl : "lamborghini.php"
	})
	.when("/mercedes", {
		templateUrl : "mercedes.php"
	})
	.when("/spyker", {
		templateUrl : "spyker.php"
	})
	.when("/mclaren", {
		templateUrl : "mclaren.php"
	});
});
</script>


</body>
</html>