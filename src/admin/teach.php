<!doctype html>
<html lang="en">
<?php require_once(__DIR__.'/element/head.php'); ?>
<style>
    .modal-backdrop {
  z-index: -1;
}
</style>
<body>

<div class="wrapper">
<?php require_once(__DIR__.'/element/navbar.php'); ?>

    <div class="main-panel">
        
<?php require_once(__DIR__.'/element/menu.php'); ?>


<?php 
use minapp\siteModel;
$home = new siteModel('teach');
$dataTeach = $home->getAll();
$dataTeach = json_decode($dataTeach,true);
// $dataBanner = $dataBanner->data[0];
$dataTeach = $dataTeach['data'];
// var_dump($dataTeach);
 ?>

	<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
<!-- container//////////////////////////////////////   -->


      <div class="col-md-12 card">

                <div class="card-header">
                    <h4 id="basic-forms" class="card-title">Teach list</h4>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                       <button type="button" class="btn btn-primary" id="create-modal" data-toggle="modal" data-target="#exampleModal">
                            Create teach
                        </button>
                    </div>
                    
                </div>
                <div class="card-content collapse show" aria-expanded="true">
                    <div class="card-body">
                        <hr>
                        

                 <table id="fresh-table" class="table">
                        <thead>
                            <th data-field="id" data-sortable="true">ID</th>
                            <th data-field="name" data-sortable="true">NAME</th>
                            <th data-field="title" data-sortable="true">email</th>
                            <th data-field="image" data-sortable="true">PHONE</th>
                            <th data-field="image" data-sortable="true">SOCIAL</th>
                            <th data-field="image" data-sortable="true" style="width:50%">DESCRIPTIONS</th>
                            <th data-field="image" data-sortable="true">AVATAR</th>
                            <th data-field="create_at">CREATE_AT</th>
                            <th data-field="action">ACTION</th>
                            
                        </thead>
                        <tbody id="data_ajax">
                            <?php for($i=0;$i<count($dataTeach);$i++) {
                                
                             ?>
                            <tr id="sub_<?php echo $dataTeach[$i]['t_id'] ?>">
                                <td><?php echo $dataTeach[$i]['t_id'] ?></td>
                                <td><?php echo $dataTeach[$i]['name'] ?></td>
                                <td><a href="mailto:<?php echo $dataTeach[$i]['email'] ?>" data-toggle="tooltip" data-placement="top" title=""><i class="fa fa-envelope" aria-hidden="true"></i></a> <?php echo $dataTeach[$i]['email'] ?></td>
                                <td><a href="tel:<?php echo $dataTeach[$i]['phone'] ?>" data-toggle="tooltip" data-placement="top" title="Liên hệ "><i class="fa fa-phone" aria-hidden="true"></i></a> <?php echo $dataTeach[$i]['phone'] ?></td>
                                <td><a href="<?php echo $dataTeach[$i]['facebook'] ?>" title="facebook"><i class="fab fa-facebook"></i></a> | <a href="skype:live:<?php echo $dataTeach[$i]['skype'] ?>?chat" title="skype"><i class="fab fa-skype"></i></a></td>
                                <td style="width:50%"><?php echo $dataTeach[$i]['description'] ?></td>
                                <td><img style="max-width: 100px" src="<?php echo $dataTeach[$i]['avatar'] ?>" alt="banner <?php echo $dataTeach[$i]['name'] ?>" class="img-responsive"></td>
                                <td><?php echo $dataTeach[$i]['created_at'] ?></td>

                                <td>
                                <a id="<?php echo $dataTeach[$i]['t_id'] ?>" href="admin.html" onclick="" class="table-action remove" >
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <a id="<?php echo $dataTeach[$i]['t_id'] ?>" href="admin.html" onclick="" class="table-action edit" >
                                   <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            </tr>
                        <?php } ?>
                                                       
                        </tbody>
                    </table>



                              
                           
 



                    </div>
                </div>

            </div>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Teach</h5>
        <button type="button" class="close" id="modal-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
        <div class="form-group">
          <label for="name">Teach name*:</label>
          <input type="text" name="Teach_namee" id="name" class="form-control" placeholder="Teach name" required>
        </div>
        <div class="form-group">
          <label for="title">Teach phone*:</label>
          <input type="text" name="Teach_phone" id="phone" class="form-control" placeholder="Teach phone" placeholder="Banner title" required>
        </div>
        <div class="form-group">
          <label for="image">Teach email*:</label>
          <input type="text" name="Teach_email" id="email" class="form-control" placeholder="Teach email" required>
        </div>
        <div class="form-group">
          <label for="image">Teach facebook*:</label>
          <input type="text" name="Teach_facebook" id="facebook" class="form-control" placeholder="Teach facebook" required>
        </div>
        <div class="form-group">
          <label for="image">Teach skype*:</label>
          <input type="text" name="Teach_skype" id="skype" class="form-control" placeholder="Teach skype" required>
        </div>
        <div class="form-group">
          <label for="image">Teach description*:</label>
          <textarea name="" class="form-control" id="description" required>Teach description</textarea>
        </div>
        <div class="form-group">
          <label for="image">Teach avatar*:</label>
          <input type="file" name="Teach_avatar" id="avatar" class="form-control" required>
        </div>
        </form>
      </div>
      <div id="load"></div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="save">Saves</button>
      </div>
    </div>
  </div>
</div>
           

<script>



    $(document).ready(function(){
        // $('#create-modal').on('click',function(){
        //     $('body').removeClass('.modal-backdrop');
        // });

        // $('#modal-close').on('click',function(){
        //     $('exampleModal').hide();
        // });
        $('#save').on('click',function(e){
            e.preventDefault();
            if($('#name').val() == '' || $('#name').val() == null || $('#phone').val() == '' || $('#phone').val() == null || $('#avatar').val() == '' || $('#avatar').val() == null || $('#email').val() == '' || $('#email').val() == null || $('#facebook').val() == '' || $('#facebook').val() == null || $('#skype').val() == '' || $('#skype').val() == null || $('#description').val() == '' || $('#description').val() == null){
                 $.notify({
                    icon: '',
                    message: "kiểm tra lại các trường nhập!"

                },{
                    type: 'danger',
                    timer: 2000
                    });
            }else{
                         $("#load").html('<img src="https://www.drupal.org/files/issues/throbber_13.gif" width="30" height="30" /> Đang upload ảnh...').fadeIn("slow");

        var file_data = $('#avatar').prop('files')[0];
        let x = document.getElementById('avatar');
        var type = file_data.type;
        console.log(file_data.size);
        var files = x.files;
        var form_data = new FormData();
        for (let i = 0; i < files.length; i++) {
                let file = files[i];
                // Add the file to the request.
                form_data.append('files[]', file, file.name);
            }
            var name = $('#name').val();
            var phone = $('#phone').val();
            var email = $('#email').val();
            var facebook = $('#facebook').val();
            var skype = $('#skype').val();
            var description = $('#description').val();
            form_data.append('name', name);
            form_data.append('phone', phone);
            form_data.append('email', email);
            form_data.append('facebook', facebook);
            form_data.append('skype', skype);
            form_data.append('description', description);
            form_data.append('key', 'add-teach');

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
                             message: "Create teach success!"

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

       $('.remove').on('click',function(e){
            e.preventDefault();
            var _this = this;
            console.log(_this.id);
             swal({
                    title: 'Xác nhận xóa?',
                    text: "",
                    type: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Có',
                    cancelButtonText: 'Không',
                    confirmButtonClass: 'btn btn-success',
                    cancelButtonClass: 'btn btn-danger',
                    buttonsStyling: false
                }).then(function (confirmed) {
                     if (!confirmed.dismiss)
            $.ajax({
                url: <?php PostRoute(); ?>,
                method : 'POST',
                data : {
                    key : 'delete-teach',
                    id : _this.id,
                },
                headers: {
                    "accept": "application/json",
                    "Access-Control-Allow-Origin":"*"
                },
                success : function(resp){
                    console.log(resp)
                    if(resp == true){
                        $.notify({
                            icon: '',
                            message: "Delete teach successfully!"

                        },{
                            type: 'success',
                            timer: 2000
                         });
                            setTimeout(function() {
                                location.reload();
                            },2000);
                        
                    }else{
                        alert('exception!')
                    }
                }
            });
        }, function (dismiss) {

                });
       });
            

    });
</script>



<!-- container//////////////////////////////////////   -->
        </div>
            		
      </div>

    </div>
	</div>



<?php require_once(__DIR__.'/element/footer.php'); ?>



    </div>
</div>



</body>
<?php require_once(__DIR__.'/element/script.php'); ?>


</html>