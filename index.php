<?php 
require __DIR__ . '/vendor/autoload.php';
	
use minapp\Route;

session_start();
require __DIR__ . '/config.php';



//require data
if(isset($_GET['route'])){

	$url = $_GET['route'];
	$method = 'GET';
	$route = new Route($url,$method);
	$route->showController();
	require_once($route->showController());

}else if(isset($_POST) && isset($_POST['key'])){

	$route = new Route('/','POST');
	if(!empty($_FILES)){
		echo $route->postController($_POST,$_POST['key'],$_FILES);
		// var_dump($_POST);
	}else{
		echo $route->postController($_POST,$_POST['key'],'');
		// var_dump($_POST);
	}

}else if(isset($_POST) && !empty($_FILES)){

	$route = new Route('/','POST');
	echo $route->postController('','upload-image',$_FILES);

}else{
	$route = new Route('gioi-thieu','GET');
	$route->showController();
	require_once($route->showController());
}






 ?>
