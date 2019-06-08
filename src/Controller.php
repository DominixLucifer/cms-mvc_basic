<?php 
namespace minapp;
use minapp\siteModel;

/**
 * summary
 */
class Controller 
{
    /**
     * summary
     */
    public function HomeData(){
    	$template= __DIR__.'/website/index.php';
    	return $template;
    }
    public function AboutData(){
    	$template= __DIR__.'/website/about.php';
    	return $template;
    }
    public function ContactData(){
        $template= __DIR__.'/website/contact.php';
        return $template;
    }
    public function findMaster(){
        $template= __DIR__.'/website/findMaster.php';
        return $template;
    }
    public function site404(){
        $template= __DIR__.'/website/element/404.html';
        return $template;
    }

    //backend
    public function loginAdmin(){
        $template = __DIR__.'/admin/login.php';
        return $template;
    }

    public function homeAdmin(){
        
        if(isset($_SESSION['user'])){
            $template = __DIR__.'/admin/home.php';
        return $template;
        }else{
            return $this->loginAdmin();
        }

    }


    //post request


    public function PostSearch($data,$table){
        $data['subject'] = '';
        $data = (object) $data;
        if($data->fullname == '' ||  $data->phone == '' || $data->email == ''){
            return 0;
        }else{
        $subject = ''.$data->tieuhoc.'|'.$data->toan.'|'.$data->tiengviet.'|'.$data->toeic.'|'.$data->vatly.'|'.$data->tienganh.'|'.$data->laptrinh.'|'.$data->monkhac;
        $data->subject = $subject;
        $data = (array) $data;
        array_splice($data, 8, 8);
        unset($data['key']);
        $data = (object) $data;
        $actor = new siteModel($table);
        $result = $actor->insert($data);

        return $result;
    }

    }
    public function PostContact($data,$table){
        $data = (array) $data;
        if($data['fullname'] == '' ||  $data['phone'] == '' || $data['email'] == ''){
            return 0;
        }else{
            unset($data['key']);
            $data = (object) $data;
            $actor = new siteModel($table);
            $result = $actor->insert($data);

            return $result;
        }
    
    }

    //backend

     public function postLoginUser($data,$table){
            $actor = new siteModel($table);
            $sql = 'select * from '.$table.' where username="'.$data['username'].'"';
            // return $sql;
            $result = $actor->getRow($sql);
            if($result){
                if(password_verify($data['password'],$result->password)){
                    $_SESSION['user'] = $data['username'];
                    $url = '<script>window.location.href = "index.php?route=admin"</script>';
                    return $url;
                }else{
                    return 'Sai username hoặc password';
                }

            }else{
                return 'Lỗi không xác định';
            }


        // return $data;

    }
}

 ?>