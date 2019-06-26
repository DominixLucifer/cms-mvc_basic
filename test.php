<?php 
// require __DIR__ . '/index.php';
require __DIR__ . '/config.php';



$path = 'sdsda.asdasdadsa.sadasd.woff';
echo asset('admin',$path);
echo '<br/>';
echo base64_encode('MT social');
echo '<br/>';
function check_mod_rewrite(){
 if(in_array('mod_rewrite',apache_get_modules())){
 	$res = true;
 }else{
 	$res = false;
 }  
 	return $res;
}

echo check_mod_rewrite();


 ?>