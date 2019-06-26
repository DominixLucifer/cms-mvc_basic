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
        $template= __DIR__.'/../404.php';
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
    public function adminEditHome(){
        
        if(isset($_SESSION['user'])){
            $template = __DIR__.'/admin/homeedit.php';
        return $template;
        }else{
            return $this->loginAdmin();
        }

    }
    public function adminLogout(){
        if(isset($_SESSION['user'])){
            unset($_SESSION['user']);
            $this->loginAdmin();
        }else{
            return $this->loginAdmin();
        }
    }
    public function adminProfile(){
        if(isset($_SESSION['user'])){
            $template = __DIR__.'/admin/profile.php';
            return $template;
        }else{
            return $this->loginAdmin();
        }
    }
    public function adminBannerAdd(){
        if(isset($_SESSION['user'])){
            $template = __DIR__.'/admin/banneradd.php';
            return $template;
        }else{
            return $this->loginAdmin();
        }
    }
    public function adminListBanner(){
        if(isset($_SESSION['user'])){
            $template = __DIR__.'/admin/bannerlist.php';
            return $template;
        }else{
            return $this->loginAdmin();
        }
    }
    public function adminListTeach(){
        if(isset($_SESSION['user'])){
            $template = __DIR__.'/admin/teachlist.php';
            return $template;
        }else{
            return $this->loginAdmin();
        }
    }

    public function adminTeach(){
        if(isset($_SESSION['user'])){
            $template = __DIR__.'/admin/teach.php';
            return $template;
        }else{
            return $this->loginAdmin();
        }
    }







    //post request


    public function PostSearch($data,$table){
        $date = getdate();
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
        $data['created_at'] = $date['year'].'-'.$date['mon'].'-'.$date['mday'].' | '.$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
        $actor = new siteModel($table);
        $result = $actor->insert($data);
        if($result){
            return 1;
        }else{
            return 0;
        }

        
    }

    }
    public function PostContact($data,$table){
        $data = (array) $data;
        $date = getdate();
        if($data['fullname'] == '' ||  $data['phone'] == '' || $data['email'] == ''){
            return 0;
        }else{
            unset($data['key']);
            $data['created_at'] = $date['year'].'-'.$date['mon'].'-'.$date['mday'].' | '.$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
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
                    $_SESSION['email'] = $result->email;
                    $_SESSION['name'] = $result->fullname;
                    // $url = '<script>window.location.href = "index.php?route=admin"</script>';
                    return true;
                }else{
                    return false;
                }

            }else{
                return false;
            }


        // return $data;

    }

    public function postUserUpdate($data,$table){
        if(isset($_SESSION['user'])){
            $username = $_SESSION['user'];
            $where = 'username="'.$username.'"';
            $actor = new siteModel($table);

             if(isset($data['image']) && $data['image'] != ''){
                    $image = $this->imageUpload($data['image']);
                }else{
                    $image = false;
                }

            if(($data['password'] == $data['password_confirmation']) && $data['password'] != null){
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

                
                if($image == false){
                    unset($data['image']);
                    unset($data['key']);
                    unset($data['password_confirmation']);
                    $result = $actor->update($data,$where);
                    return $result;
                }else{
                    unset($data['key']);
                    unset($data['password_confirmation']);
                    $result = $actor->update($data,$where);
                    return $result;
            }

            }else{

                 if($image == false){
                    unset($data['image']);
                    unset($data['key']);
                    unset($data['password']);
                    unset($data['password_confirmation']);
                    $result = $actor->update($data,$where);
                    return $result;
                }else{
                // $sql = 'UPDATE '.$table.' SET password="'.$data['password'].'", fullname="'..'" WHERE username="'.$_SESSION['user'].'"';
                // mysqli_query()
                    unset($data['key']);
                    unset($data['password']);
                     unset($data['password_confirmation']);
                    $result = $actor->update($data,$where);
                    return $result;
            }
            }
            
            // $sql = 'UPDATE '.$table.' SET '

        }else{
            return false;
        }
        

    }

    public function postHomeUpdate($data,$table,$file){
        if(isset($_SESSION['user'])){
            $where = 'id=1';
            $actor = new siteModel($table);
            $data['mapIframe'] = htmlspecialchars($data['mapIframe']);
            if($file['image']['name'] != ''){
                unset($data['key']);
                $result = $this->imageUpload($file);
                if($result){
                    $data['logoSite'] =  $result;
                    $reponsive = $actor->update($data,$where);
                    return '<html><script>window.location = "index.php?route=admin-home";</script></html>';
                }else{

                    return '<html><script>window.location = "index.php?route=admin-home";</script></html>';
                }
            }else{
                unset($data['key']);
                $reponsive = $actor->update($data,$where);
                return '<html><script>window.location = "index.php?route=admin-home";</script></html>';
            }
        }else{
            return '<html><script>window.location = "index.php?route=admin";</script></html>';
        }
    }
    public function postAddBanner($data,$table,$file){
        if(isset($_SESSION['user'])){
            $date = getdate();
            $actor = new siteModel($table);
            unset($data['key']);
            $data['created_at'] = $date['year'].'-'.$date['mon'].'-'.$date['mday'].' | '.$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
            if($file['image']['name'] != ''){
                $result = $this->imageUpload($file);
                if($result){
                    $data['banner_image'] =  $result;
                    $reponsive = $actor->insert($data);
                    return '<html><script>window.location = "index.php?route=admin-list-banner";</script></html>';
                }else{

                    return '<html><script>window.location = "index.php?route=admin-home";</script></html>';
                }
            }else{
                
                $reponsive = $actor->insert($data);
                return '<html><script>window.location = "index.php?route=admin-list-banner";</script></html>';
            }
        }
    }
    public function postDelBanner($data,$table){
        if(isset($_SESSION['user'])){
            $actor = new siteModel($table);
            $id = $data['id'];
            $where = 'banner_id = '.$id;
            $reponsive = $actor->remove();
            if($reponsive){
                return true;
            }else{
                return false;
            }

        }
    }

    public function postImage($data,$table){
        if(isset($_SESSION['user'])){
            $ins = [];
            $date = getdate();
            $date_time = $date['year'].'-'.$date['mon'].'-'.$date['mday'].' | '.$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
            $path_img = $this->imageUpload($data);
            if($path_img){
                $ins = [
                    "url_img"=>$path_img,
                    "created_at"=>$date_time
                ];
                $actor = new siteModel($table);
                $result = $actor->insert($ins);
                $sql = "select * from ".$table." where url_img='".$path_img."'";
                $select = $actor->getRow($sql);


                if($result){
                    $user = new siteModel('userlogin');
                    $av = [
                        'image'=>$select->img_id,
                    ];
                    $where = "username='".$_SESSION['user']."'";
                    $up = $user->update($av,$where);
                    return 1;
                }else{
                    return 0;
                }
            
            }else{
                return 0;
            }
        }else{
            return 0;
        }

    }



    //service
    private function imageUpload($data){
        $target_dir = __DIR__."/../src/asset/upload";
        $uploadedFile ;
if(!empty($data["files"]["type"])){
        $fileName = 'mtsocial_'.time().'_'.$data['files']['name'][0];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $data["files"]["name"][0]);
        $file_extension = end($temporary);
        if((($data["files"]["type"][0] == "image/png") || ($data["files"]["type"][0] == "image/jpg") || ($data["files"]["type"][0] == "image/jpeg")) && ($file_extension == $valid_extensions[0] || $file_extension == $valid_extensions[1] || $file_extension == $valid_extensions[2])){
            $sourcePath = $data['files']['tmp_name'][0];
            $targetPath = $target_dir."/".$fileName;
            if(move_uploaded_file($sourcePath,$targetPath)){
                $uploadedFile = $targetPath;
                return $uploadedFile;
            }else{
                return 0;
            }
        }else{
            return 0;
        }

    }else{
        return 0;
    }

    // return $uploadedFile;




}


}

 ?>