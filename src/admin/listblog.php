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
$home = new siteModel('blog');
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
                      <a href="create-blog.html">
                       <button type="button" class="btn btn-primary" >
                            Create blog
                        </button>
                        </a>
                    </div>
                    
                </div>
                <div class="card-content collapse show" aria-expanded="true">
                    <div class="card-body">
                        <hr>
                        

                 <table id="fresh-table" class="table">
                        <thead>
                            <th data-field="id" data-sortable="true">ID</th>
                            <th data-field="name" data-sortable="true">TITLE</th>
                            <th data-field="title" data-sortable="true"style="width:20%">META</th>
                            <th data-field="image" data-sortable="true" style="width:40%">BODY</th>
                            <th data-field="image" data-sortable="true">IMAGE</th>
                            <th data-field="image" data-sortable="true">USER CREATE</th>
                            <th data-field="image" data-sortable="true" >CREATED_AT</th>
                            <th data-field="image" data-sortable="true" >UPDATED_AT</th>
                            <th data-field="action">ACTION</th>
                            
                        </thead>
                        <tbody id="data_ajax">
                            <?php for($i=0;$i<count($dataTeach);$i++) {
                                
                             ?>
                            <tr id="sub_<?php echo $dataTeach[$i]['t_id'] ?>">
                                <td><?php echo $dataTeach[$i]['b_id'] ?></td>
                                <td><?php echo $dataTeach[$i]['title'] ?></td>
                                <td><p id="MetatextArea<?php echo $dataTeach[$i]['b_id'] ?>"></p> <a href="#" id="MetatoggleButton<?php echo $dataTeach[$i]['b_id'] ?>"></a></td>
                                <script>
                                  var statusMeta = "less";
                                  var textMeta="<?php echo $dataTeach[$i]['meta'] ?>";
                                  $("#MetatoggleButton<?php echo $dataTeach[$i]['b_id'] ?>").html("See More");
                                  $("#MetatextArea<?php echo $dataTeach[$i]['b_id'] ?>").html(""+textMeta.slice(0,70));
                                 
                                      $('#MetatoggleButton<?php echo $dataTeach[$i]['b_id'] ?>').on('click',function(e){
                                        e.preventDefault();
                                        if (statusMeta == "less") {
                                                $("#MetatextArea<?php echo $dataTeach[$i]['b_id'] ?>").html(textMeta).fadeIn('slow');
                                               $("#MetatoggleButton<?php echo $dataTeach[$i]['b_id'] ?>").html("See Less");
                                                statusMeta = "more";
                                            } else if (statusMeta == "more") {
                                                $("#MetatextArea<?php echo $dataTeach[$i]['b_id'] ?>").html(""+textMeta.slice(0,70)).fadeIn('slow');
                                                $("#MetatoggleButton<?php echo $dataTeach[$i]['b_id'] ?>").html("See More");
                                                statusMeta = "less";
                                            
                                        }
                                      });
                                            

                                            
                                </script>
                                <td><p id="textArea<?php echo $dataTeach[$i]['b_id'] ?>"></p> <a href="#" id="toggleButton<?php echo $dataTeach[$i]['b_id'] ?>"></a></td>
                                
                                <script>
                                  var status = "less";
                                  var text="<?php echo $dataTeach[$i]['body'] ?>";
                                  $("#toggleButton<?php echo $dataTeach[$i]['b_id'] ?>").html("See More");
                                  $("#textArea<?php echo $dataTeach[$i]['b_id'] ?>").html(""+text.slice(0,70));
                                 
                                      $('#toggleButton<?php echo $dataTeach[$i]['b_id'] ?>').on('click',function(e){
                                        e.preventDefault();
                                        if (status == "less") {
                                                $("#textArea<?php echo $dataTeach[$i]['b_id'] ?>").html(text);
                                                $("#toggleButton<?php echo $dataTeach[$i]['b_id'] ?>").html("See Less");
                                                status = "more";
                                            } else if (status == "more") {
                                                $("#textArea<?php echo $dataTeach[$i]['b_id'] ?>").html(""+text.slice(0,70));
                                                $("#toggleButton<?php echo $dataTeach[$i]['b_id'] ?>").html("See More");
                                                status = "less";
                                            
                                        }
                                      });
                                            

                                            
                                </script>

                                <td><img style="max-width: 100px" src="<?php echo $dataTeach[$i]['image'] ?>" alt=" <?php echo $dataTeach[$i]['title'] ?>" class="img-responsive"></td>
                                <td><?php echo $dataTeach[$i]['id_user'] ?></td>
                                
                                <td><?php echo $dataTeach[$i]['created_at'] ?></td>
                                <td><?php echo $dataTeach[$i]['updated_at'] ?></td>

                                <td>
                                <a id="<?php echo $dataTeach[$i]['b_id'] ?>" href="admin.html" onclick="" class="table-action remove" >
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                                <a href="/index.php?route=blog&id=<?php echo $dataTeach[$i]['b_id'] ?>" onclick="" class="table-action edit" >
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

           

<script>



    $(document).ready(function(){
        // $('#create-modal').on('click',function(){
        //     $('body').removeClass('.modal-backdrop');
        // });

        // $('#modal-close').on('click',function(){
        //     $('exampleModal').hide();
        // });
        $('.remove').on('click',function(e){
            e.preventDefault();
            var _this = this;
            console.log(_this.id);
             swal({
                    title: 'Xác nhận xóa blog?',
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
                    key : 'delete-blog',
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
                            message: "Delete blog successfully!"

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