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
    		case 'home':
				return $controller->HomeData();
    			break;
    		case 'about':
				return $controller->AboutData();
    			break;
    		case 'contact':
				return $controller->ContactData();
    			break;

    		
    		default:
    			// return $controller->HomeData();
    			break;
    	}
    	
    }


}

 ?>
