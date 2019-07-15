<?php 
require __DIR__ . '/vendor/autoload.php';
	
use minapp\Route;
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token');

session_start();
require __DIR__ . '/config.php';



//require data
if(isset($_GET['route'])){

	$url = $_GET['route'];
	$method = 'GET';
	$route = new Route($url,$method);
	if(isset($_GET['id'])){
		$id = str_replace('/[^0-9]/', '', (int)$_GET['id']);
	}
	
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
