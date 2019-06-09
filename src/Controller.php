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
            $actor = new siteModel($table);
            if(($data['password'] == $data['password_confirmation']) && $data['password'] != null){
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);
                $image = imageUpload($data['image']);
                if($image == false){
                    unset($data['image']);
                    unset($data['key']);
                    unset($data['password_confirmation']);
                    $result = $actor->insert($data);
                    return $result;
                }else{
                // $sql = 'UPDATE '.$table.' SET password="'.$data['password'].'", fullname="'..'" WHERE username="'.$_SESSION['user'].'"';
                // mysqli_query()
                    unset($data['key']);
                    unset($data['password_confirmation']);
                    $result = $actor->insert($data);
                    return $result;
            }

            }else{
                $image = imageUpload($data['image']);
                 if($image == false){
                    unset($data['image']);
                    unset($data['key']);
                    unset($data['password']);
                    unset($data['password_confirmation']);
                    $result = $actor->insert($data);
                    return $result;
                }else{
                // $sql = 'UPDATE '.$table.' SET password="'.$data['password'].'", fullname="'..'" WHERE username="'.$_SESSION['user'].'"';
                // mysqli_query()
                    unset($data['key']);
                    unset($data['password']);
                     unset($data['password_confirmation']);
                    $result = $actor->insert($data);
                    return $result;
            }
            }
            
            // $sql = 'UPDATE '.$table.' SET '

        }else{
            return false;
        }
        

    }

    //service
    private function imageUpload($data){
        $target_dir = "src/admin/element/images/uploads/";
$target_file = $target_dir . basename($data["image"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

    $check = getimagesize($data["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        $uploadOk = 0;
        }



    if ($uploadOk == 0) {
        return false;
// if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($data["image"]["tmp_name"], $target_file)) {
         return basename( $data["image"]["name"]);
    } else {
        return false;
    }
}

    }




}

 ?>