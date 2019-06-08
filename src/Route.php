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

    		
    		default:
    			return $controller->site404();
    			break;
    	}
    	
    }
    public function postData($data,$key){
    	$controller = new Controller();

    	switch ($key) {
    		case 'submit-timgiasu':
				return $controller->PostSearch($data,'findMaster');
    			break;

    		default:
    			return 'error!';
    			break;
    	}
    }


}

 ?>
