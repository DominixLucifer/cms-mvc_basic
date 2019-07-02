<?php 
namespace minapp\service;
use minapp\siteModel;

/**
 * summary
 */
class getByMumber
{
    /**
     * summary


     */
    public static function getImage($id){
    	$dataImg = new siteModel('image');
    	$sql= "select * from image where img_id=".$id;
    	return $dataImg->getRow($sql)->url_img;
    }
    public static function getPermission($id){
    	$dataPer = new siteModel('userlogin');
    	$sql= "select * from userlogin where u_id=".$id;
    	$permission = $dataPer->getRow($sql)->permission;
    	if($permission  == 1){
    		return 'admin';
    	}else{
    		return 'user';
    	}
    }
    
}



 ?>