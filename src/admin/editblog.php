<!doctype html>
<html lang="en">
<?php require_once(__DIR__.'/element/head.php'); ?>
<body>

<div class="wrapper">
<?php require_once(__DIR__.'/element/navbar.php'); ?>

    <div class="main-panel">
        
<?php require_once(__DIR__.'/element/menu.php'); ?>


<?php 
use minapp\siteModel;
if(isset($id)){
	$route = 'update-blog';
	$title = ' Update blog';
	$home = new siteModel('blog');
	$dataHome = $home->getAll();
	$dataHome = json_decode($dataHome);
	$dataHome = $dataHome->data[0];
  
}else{
	$route = 'create-blog';
	$title = ' Create blog';
	
}

	$user = new siteModel('userlogin');
	$dataUser = $user->getAll();
	$dataUser = json_decode($dataUser);
	$dataUser = $dataUser->data;


 ?>

	<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
<!-- container//////////////////////////////////////   -->


         <div class="col-md-12 card">

                <div class="card-header">
                    <h4 id="basic-forms" class="card-title"><?php echo $title ?></h4>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show" aria-expanded="true">
                    <div class="card-body">
                        <hr>
                        <div class="container bootstrap snippet">
                             <div class="row">
                                 <div class="col-sm-8">
                                    <div class="tab-content">
                                        <div class="tab-pane active">
                                            <form action="index.php" method="POST" id="form-<?php echo $route ?>" enctype="multipart/form-data">
                                            	<input type="hidden" name="key" value="<?php echo $route; ?>" >
                                             <input type="hidden" name="key" value="home-update" >
                                            
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="name"><h4>Tiêu đề <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $dataHome->title ?>" title="enter your website name " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="linkTW"><h4>User create <strong>*:</strong></h4></label>
                                                    <select name="user" class="form-control">
                                                    	<?php for($i=0;$i<count($dataUser);$i++){ ?>
                                                    	<option value="<?php echo $dataUser[$i]->u_id ?>"><?php echo $dataUser[$i]->fullname ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="contentText"><h4>Meta <strong>*:</strong></h4></label>
                                                    <textarea name="meta" id="meta"><?php echo $dataHome->meta ?></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group col-md-12">
                          
                                                
                                                    <label for="keyword"><h4>Content <strong>*:</strong></h4></label>
                                                    <textarea name="body" id="body"><?php echo $dataHome->body ?></textarea>
                                                
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="phone"><h4>Image <strong>*:</strong></h4></label>
                                                    <input type="file" class="form-control" name="image"  id="image" title="enter your phone " required>
                                                </div>
                                            </div>
                                            
                                            
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <input type="submit" class="btn btn-success" id="submit"  value="<?php if($route == 'create-blog'){echo 'create';}else{echo 'update';} ?>">
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>

                                 </div>
                             </div>
                        </div>



                    </div>
                </div>

            </div>

            



<!-- container//////////////////////////////////////   -->
        </div>
            		
      </div>

    </div>
	</div>
<script>
    $(document).ready(function(){
        $('#submit').on('click',function(e){
            e.preventDefault();
            $("#form-<?php echo $route ?>").validate({
            rules: {
                name: "required",
                user: "required",
                meta: "required",
                body: "required",
                image: "required",
            },
            messages: {
                name: "Vui lòng nhập tiêu đề",
                user: "Vui lòng chọn user",
                meta: "Vui lòng viết mô tả",
                body: "Vui lòng viết nội dung",
                image: "Vui lòng không để trống",
                
            }
        });
    });

        
    });
</script>


<?php require_once(__DIR__.'/element/footer.php'); ?>



    </div>
</div>
<script>


</script>


</body>
<?php require_once(__DIR__.'/element/script.php'); ?>


</html>