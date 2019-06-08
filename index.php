<?php 
require __DIR__ . '/vendor/autoload.php';
	
use minapp\Route;

if(isset($_GET['route'])){
	$url = $_GET['route'];
	$method = 'GET';
	$route = new Route($url,$method);
	$route->showController();
	require_once($route->showController());
}else 
if(isset($_POST)){
	$route = new Route('/','POST');
	echo $route->postData($_POST,$_POST['key']);
}else{
	$route = new Route('home','GET');
	$route->showController();
	require_once($route->showController());
}






 ?>
