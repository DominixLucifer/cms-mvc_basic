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
$home = new siteModel('banner');
$dataBanner = $home->getAll();
$dataBanner = json_decode($dataBanner,true);
// $dataBanner = $dataBanner->data[0];
$dataBanner = $dataBanner['data']

 ?>

	<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
<!-- container//////////////////////////////////////   -->


      <div class="col-md-12 card">

                <div class="card-header">
                    <h4 id="basic-forms" class="card-title">Banner list</h4>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">
                       <button type="button" class="btn btn-primary" id="create-modal" data-toggle="modal" data-target="#exampleModal">
                            Create banner
                        </button>
                    </div>
                    
                </div>
                <div class="card-content collapse show" aria-expanded="true">
                    <div class="card-body">
                        <hr>
                        

                 <table id="fresh-table" class="table">
                        <thead>
                            <th data-field="id" data-sortable="true">ID</th>
                            <th data-field="name" data-sortable="true">BANNER NAME</th>
                            <th data-field="title" data-sortable="true">BANNER TITLE</th>
                            <th data-field="image" data-sortable="true">BANNER IMAGE</th>
                            <th data-field="create_at">CREATE_AT</th>
                            <th data-field="action">ACTION</th>
                            
                        </thead>
                        <tbody id="data_ajax">
                            <?php for($i=0;$i<count($dataBanner);$i++) {
                                
                             ?>
                            <tr id="sub_<?php echo $dataBanner[$i]['banner_id'] ?>">
                                <td><?php echo $dataBanner[$i]['banner_id'] ?></td>
                                <td><?php echo $dataBanner[$i]['banner_name'] ?></td>
                                <td><?php echo $dataBanner[$i]['banner_title'] ?></td>
                                <td><img style="max-width: 100px" src="<?php echo $dataBanner[$i]['banner_image'] ?>" alt="banner <?php echo $dataBanner[$i]['banner_name'] ?>" class="img-responsive"></td>
                                <td><?php echo $dataBanner[$i]['created_at'] ?></td>

                                <td>
                                <a id="<?php echo $dataBanner[$i]['banner_id'] ?>" href="admin.html" onclick="" class="table-action remove" >
                                    <i class="pe-7s-trash"></i>
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
        <h5 class="modal-title" id="exampleModalLabel">Create banner</h5>
        <button type="button" class="close" id="modal-close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST">
        <div class="form-group">
          <label for="name">Banner name*:</label>
          <input type="text" name="banner_name" id="name" class="form-control" placeholder="Banner name" required>
        </div>
        <div class="form-group">
          <label for="title">Banner title*:</label>
          <input type="text" name="banner_title" id="title" class="form-control" placeholder="Banner title" required>
        </div>
        <div class="form-group">
          <label for="image">Banner image*:</label>
          <input type="file" name="banner_image" id="image" class="form-control" required>
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
            if($('#name').val() == '' || $('#name').val() == null || $('#title').val() == '' || $('#title').val() == null || $('#image').val() == '' || $('#image').val() == null ){
                 $.notify({
                    icon: '',
                    message: "kiểm tra lại các trường nhập!"

                },{
                    type: 'danger',
                    timer: 2000
                    });
            }else{
                         $("#load").html('<img src="https://www.drupal.org/files/issues/throbber_13.gif" width="30" height="30" /> Đang upload ảnh...').fadeIn("slow");

        var file_data = $('#image').prop('files')[0];
        let x = document.getElementById('image');
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
            var title = $('#title').val();
            form_data.append('banner_name', name);
            form_data.append('banner_title', title);
            form_data.append('key', 'add-banner');

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
                    $("#load").html(' ');
                    $("#load").html('<i class="fas fa-check"></i> Upload thành công').fadeIn("slow");
                    if(res == 1){
                        $.notify({
                              icon: '',
                             message: "Create banner success!"

                            },{
                                type: 'success',
                                timer: 2000
                            });
                        setTimeout(function() {
                                        location.reload();
                                    },2000);
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
                    key : 'delete-banner',
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
                            message: "Delete banner successfully!"

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