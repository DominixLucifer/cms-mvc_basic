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

<script>
    function a(){
        $.ajax({
            url: 'index.php',
            method : 'POST',
            data : {
                key : 'delete-banner',
                id : '<?php echo $dataBanner[$i]['banner_id'] ?>'
            },
            success : function(resp){
                if(resp == true){
                    location.reload();
                }else{
                    alert('exception!')
                }
            }
        });
    }


    $(document).ready(function(){
       $('.remove').on('click',function(e){
            e.preventDefault();
            var _this = this;
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
                success : function(resp){
                    console.log(resp)
                    // if(resp == true){
                    //     location.reload();
                    // }else{
                    //     alert('exception!')
                    // }
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