<?php 

//Configuring environment variables
$config = [
	'source'=> 'src/',
	'route_root'=>'/index.php',
	'root_admin'=>'/index.php?route=admin',

];

function panel_name(){
	echo base64_decode('TVQgc29jaWFs');
}

/*
If you're using mod_php, you can use apache_get_modules(). 
This will return an array of all enabled modules, so to check if mod_rewrite is enabled
*/
function check_mod_rewrite(){
 if(in_array('mod_rewrite',apache_get_modules())){
 	$res = true;
 }else{
 	$res = false;
 }  
 	return $res;
}

$path = $config['source'];
$RouteRoot = $config['route_root'];

// if(check_mod_rewrite())? $admin_route = 'admin.html' : $admin_route = $config['root_admin'];

function admin_route(){
	echo "".$admin_route;
}

//The function returns the path or file path
function asset($name,$file){
	$exp = explode('.', $file);

	if(count($exp) == 2){
		if($exp[1] == 'eot' || $exp[1] == 'svg' || $exp[1] == 'ttf' || $exp[1] == 'woff'){
			$path = $GLOBALS['path'].'asset/'.$name.'/fonts/'.$file;
			return $path;
		}else if($exp[1] == 'ogg' || $exp[1] == 'mp3'){
			$path = $GLOBALS['path'].'asset/'.$name.'/audio/'.$file;
			return $path;
		}else if($exp[1] == 'jpg' || $exp[1] == 'png' || $exp[1] == 'gif' || $exp[1] == 'bmp'|| $exp[1] == 'tiff'){
			$path = $GLOBALS['path'].'asset/'.$name.'/images/'.$file;
			return $path;
		}else{
			$path = $GLOBALS['path'].'asset/'.$name.'/'.$exp[1].'/'.$file;
			return $path;
		}
	}else if(count($exp) > 2){
		 return $path = $GLOBALS['path'].'asset/'.$name.'/'.array_pop($exp).'/'.$file;

	}else if(count($exp) == 1){
		$path = $GLOBALS['path'].'asset/'.$name.'/'.$file.'/';
		return $path;
	}else{
		return '/';
	}
}


function PostRoute(){
	echo "'".$GLOBALS['RouteRoot']."'";
}

function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP']))
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_X_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if(isset($_SERVER['HTTP_FORWARDED']))
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if(isset($_SERVER['REMOTE_ADDR']))
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

// echo asset('admin','pe-icon-aa.min.css');

 ?>