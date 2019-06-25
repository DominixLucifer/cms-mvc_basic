<?php 
$config = [
	'source'=> 'src/',
	'route_root'=>'/index.php',
];
$path = $config['source'];
$RouteRoot = $config['route_root'];

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

// echo asset('admin','pe-icon-aa.min.css');

 ?>