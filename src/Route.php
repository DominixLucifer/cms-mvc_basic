<?php 
namespace minapp;
use minapp\Controller;


/**
 * summary
 */
class Route 
{
	protected $routeLink;
	protected $method;
    /**
     * summary
     */
    public function __construct($requestLink,$requestMethod)
    {
    	$this->routeLink = $requestLink;
        $this->method = $requestMethod;
    }
    public function showController(){

    	$controllerLink = $this->routeLink;
		$controller = new Controller();
    	switch ($controllerLink) {
    		case 'gioi-thieu':
				return $controller->HomeData();
    			break;
    		case 'thong-tin':
				return $controller->AboutData();
    			break;
    		case 'lien-he':
				return $controller->ContactData();
    			break;

    		case 'tim-gia-su':
				return $controller->findMaster();
    			break;
    		//backend
    		case 'admin':
				return $controller->homeAdmin();
    			break;
    		case 'logout':
				return $controller->adminLogout();
    			break;
    		case 'admin-profile':
				return $controller->adminProfile();
    			break;

    		
    		default:
    			return $controller->site404();
    			break;
    	}
    	
    }
    public function postController($data,$key){
    	$controller = new Controller();

    	switch ($key) {
    		case 'submit-timgiasu':
				return $controller->PostSearch($data,'findMaster');
    			break;
    		case 'submit-contact':
				return $controller->PostContact($data,'contact');
    			break;

    			//backend
    		case 'login':
				return $controller->postLoginUser($data,'userlogin');
    			break;
    		case 'update-user':
				return $controller->postUserUpdate($data,'userlogin');
    			break;

    		default:
    			return 'error!';
    			break;
    	}
    }


}

 ?>
