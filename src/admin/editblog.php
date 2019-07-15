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
    $sql = 'select * from blog where b_id='.$id;
	$dataHome = $home->getRow($sql);
    // var_dump($dataHome);
  
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
                                            	<input type="hidden" name="key" id="key" value="<?php echo $route; ?>" >
                                            
                                            
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="name"><h4>Tiêu đề <strong>*:</strong></h4></label>
                                                    <input type="text" class="form-control" name="title" id="title" value="<?php echo $dataHome->title ?>" title="enter your website name " required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                          
                                                <div class="col-xs-6">
                                                    <label for="linkTW"><h4>User create <strong>*:</strong></h4></label>
                                                    <select name="id_user" id="id_user" class="form-control">
                                                    	<?php for($i=0;$i<count($dataUser);$i++){ 
                                                            if($dataHome->id_user == $dataUser[$i]->u_id){
                                                            ?>
                                                    	<option value="<?php echo $dataUser[$i]->u_id ?>" selected><?php echo $dataUser[$i]->fullname ?></option>
                                                    <?php }else{
                                                    ?>  
                                                    <option value="<?php echo $dataUser[$i]->u_id ?>"><?php echo $dataUser[$i]->fullname ?></option>
                                                    <?php
                                                        }
                                                    }
                                                     ?>
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
                                                    <?php if(isset($dataHome->image)){ ?>
                                                        <img src="<?php echo $dataHome->image; ?>" alt="image" class="img-responsive">
                                                    <?php } ?>
                                                    <input type="file" class="form-control" name="files"  id="files" title="enter your phone " >

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
    tinymce.init({
    selector: "textarea",
    setup: function (editor) {
        editor.on('change', function () {
            editor.save();
        });
    }
});
    $(document).ready(function(){
        $('#submit').on('click',function(e){
            e.preventDefault();
            $("#form-<?php echo $route ?>").validate({
            rules: {
                name: "required",
                user: "required",
                meta: "required",
                body: "required",
                
            },
            messages: {
                name: "Vui lòng nhập tiêu đề",
                user: "Vui lòng chọn user",
                meta: "Vui lòng viết mô tả",
                body: "Vui lòng viết nội dung",
            
                
            }
        });


           if($('#title').val() == '' || $('#title').val() == null){
                 $.notify({
                    icon: '',
                    message: "kiểm tra lại các trường nhập!"

                },{
                    type: 'danger',
                    timer: 2000
                    });
            }else{
                $("#load").html('<img src="https://www.drupal.org/files/issues/throbber_13.gif" width="30" height="30" /> Đang upload ảnh...').fadeIn("slow");
        var file_data = $('#files').prop('files')[0];
        let x = document.getElementById('files');
        var form_data = new FormData();
        if(file_data == null || file_data == undefined || x == null || x == undefined ){
            var type = 'image/png';
            var file_data = { size : 100};
        }else{
            var type = file_data.type;
            console.log(file_data.size);
            var files = x.files;
        
            for (let i = 0; i < files.length; i++) {
                let file = files[i];
                // Add the file to the request.
                form_data.append('files[]', file, file.name);
            }
        }
        
        

        // $('#meta').tinymce().save();
        // $('#body').tinymce().save();

            var title = $('#title').val();
            var meta = $('#meta').val();
            var id_user = $('#id_user').val();
            var body = $('#body').val();
            var key = $('#key').val();
 
            form_data.append('title', title);
            form_data.append('meta', meta);
            form_data.append('id_user', id_user);
            form_data.append('body', body);
            form_data.append('key', key);
            <?php if($route == 'update-blog'){ ?>
            form_data.append('id', <?php echo $id; ?>);

            <?php } ?>
            console.log(form_data);


        var match = ["image/gif", "image/png", "image/jpg","image/jpeg"];
        if ((type == match[0] || type == match[1] || type == match[2] || type == match[3]) && (file_data.size < 2000000 )) {
            

            $.ajax({
                url: <?php PostRoute(); ?>,
                dataType: 'text',
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'POST',
                headers: {
                              "accept": "application/json",
                              "Access-Control-Allow-Origin":"*"
                            },
                success: function (res) {
                    console.log(res);
                    if(res == 1){
                    $("#load").html(' ');
                    $("#load").html('<i class="fas fa-check"></i> Upload thành công').fadeIn("slow");
                    if(res == 1){
                        $.notify({
                              icon: '',
                             message: "<?php if($route == 'update-blog'){echo 'Update blog successfully!'; }else{echo 'Create blog successfully!';}?>"

                            },{
                                type: 'success',
                                timer: 2000
                            });
                        setTimeout(function() {
                                        location.reload();
                                    },2000);
                    }
                }else{
                    $.notify({
                              icon: '',
                             message: "error!"

                            },{
                                type: 'danger',
                                timer: 2000
                            });
                }
                }
            });
        }else if(file_data.size > 2000000 ){
            $.notify({
                icon: '',
                message: "Ảnh quá lớn!"

               },{
                   type: 'danger',
                   timer: 2000
               });
            $("#load").html('<i class="fas fa-times"></i> Ảnh quá lớn').fadeIn("slow");
        } else {
           $.notify({
                icon: '',
                message: "Không phải định dạng ảnh"

               },{
                   type: 'danger',
                   timer: 2000
               });
           $("#load").html('<i class="fas fa-times"></i> Không phải là ảnh').fadeIn("slow");
        }
            }
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