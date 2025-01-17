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
$home = new siteModel('contact');
$dataHome = $home->getAll();
$dataHome = json_decode($dataHome);
$dataHome = $dataHome->data;

// var_dump($dataHome);
 ?>

	<div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
<!-- container//////////////////////////////////////   -->


         <div class="col-md-12 card">

                <div class="card-header">
                    <h4 id="basic-forms" class="card-title">Liên hệ từ khách</h4>
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
                        <div style="overflow-x:auto;">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" style="width:5%">ID</th>
                                    <th class="text-center" style="width:5%">Họ và tên khách</th>
                                    <th class="text-center" style="width:5%">Email</th>
                                    <th class="text-center" style="width:5%">Số điện thoại</th>
                                    <th class="text-center" style="width:5%">Thể loại</th>
                                    <th class="text-center" style="width:50%">Câu hỏi</th>
                                    <th class="text-center" style="width:5%">Trạng thái</th>
                                    <th class="text-center" style="width:15%">Trạng thái</th>
                                    <th class="text-center" style="width:5%">Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                    <?php foreach ($dataHome as $value) {
                                        if($value->status == 0 || $value->status == 1){
                                    ?>
                                    <tr>

                                        <td class="text-center"><?php echo $value->c_id ?></td>
                                        <td class="text-center"><?php echo $value->fullname ?></td>
                                        <td class="text-center"><a href="mailto:<?php echo $value->email ?>?subject=feedback" ><?php echo $value->email ?></a></td>
                                        <td class="text-center"><a href="tel:+84<?php echo $value->phone ?>"><?php echo $value->phone ?></a></td>
                                        <td class="text-center"><?php echo $value->category ?></td>
                                        <td><?php echo $value->c_ask ?></td>
                                        <td class="text-center"><?php if($value->status == 0){echo '<span class="badge badge-primary">Pending</span>';}else{echo '<span class="badge badge-success">Verify</span>';}?></td>
                                        <td class="text-center"><?php echo $value->created_at ?></td>
                                        <td class="text-center">
                                            <?php if($value->status == 0){ ?>
                                            <a id="1-<?php echo  $value->c_id; ?>" href="#" class="status" title="active"><i class="fa fa-check-circle fa-2x"></i></a>
                                        <?php }else{ ?>
                                            <a id="2-<?php echo  $value->c_id; ?>" href="#" class="status" title="delete"><i class="fa fa-trash fa-2x"></i></a>
                                        <?php } ?>
                                        </td>

                                    <?php

                                            }
                                        } 
                                    ?>
                                    
                                
                            </tbody>
                        </table>
                    </div>


                    </div>
                </div>

            </div>
<script>
    $(document).ready(function(){
        $('.status').on('click',function(e){
            e.preventDefault();
            var _this = this;
            var data = _this.id;
            var data = data.split('-');
            console.log(data[1]);
             swal({
                    title: 'Xác nhận!',
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
                    c_id : data[1],
                    status : data[0],
                    key : 'active-contact'
                },
                headers: {
                    "accept": "application/json",
                    "Access-Control-Allow-Origin":"*"
                },
                success : function(resp){
                    if(resp==1){

                         $.notify({
                                  icon: 'pe-7s-gift',
                                  message: "success"
                                  },{
                                type: 'success',
                                timer: 2000
                            });
                         setTimeout(function() {
                                location.reload();
                            },2000);
                    }else{
                         $.notify({
                                  icon: 'pe-7s-gift',
                                  message: "fail"
                                  },{
                                type: 'danger',
                                timer: 2000
                            });
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
<script>


</script>


</body>
<?php require_once(__DIR__.'/element/script.php'); ?>


</html>