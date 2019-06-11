<?php 
use minapp\siteModel;

$home = new siteModel('banner');
$dataBanner = $home->getAll();
$dataBanner = json_decode($dataBanner,true);
// $dataBanner = $dataBanner->data[0];
$dataBanner = $dataBanner['data']
// var_dump($dataBanner['data']);

 ?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<?php require_once __DIR__.'/element/head.php'; ?>


<body class="vertical-layout vertical-menu 2-columns  fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">

        

    <!-- fixed-top-->
   <?php require_once __DIR__.'/element/navbar.php'; ?>       
    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <!-- main menu-->
    <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <!-- main menu header-->
    <!-- / main menu header-->
    <!-- main menu content-->
  <?php require_once __DIR__.'/element/menu.php'; ?>
    <!-- /main menu content-->
    <!-- main menu footer-->
    <!-- main menu footer-->
</div>
    <div class="app-content content">
    <div class="content-wrapper">
        <div class="content-header row">
            <div class="content-header-left col-md-6 col-12 mb-1">
                <h2 class="content-header-title">Banner list</h2>
            </div>

            
             <!-- breadcrumb -->
            <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-12">
                <div class="breadcrumb-wrapper col-12">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item active"><a href="index.php?route=admin">Home</a>
                        </li>
                        <li class="breadcrumb-item active"><a href="#">Banner list</a>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        
            <!-- end breadcrumb -->
        <div class="content-body">
            <!-- Overview -->
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
                                <td><img style="max-width: 100px" src="src/website/element/images/<?php echo $dataBanner[$i]['banner_image'] ?>" alt="banner <?php echo $dataBanner[$i]['banner_name'] ?>" class="img-responsive"></td>
                                <td><?php echo $dataBanner[$i]['created_at'] ?></td>

                                <td>
                                <a data-id="<?php echo $dataBanner[$i]['banner_id'] ?>" onclick="function a(){
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
                                }" class="table-action remove" >
                                    <i class="fa fa-remove"></i>
                                </a>
                            </td>
                            </tr>
                        <?php } ?>
                                                       
                        </tbody>
                    </table>



                              
                           
 



                    </div>
                </div>

            </div>

            
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->
    <script>


            var $table = $('#fresh-table'),
        $alertBtn = $('#alertBtn'),
        full_screen = false;

    $().ready(function(){
        $table.bootstrapTable({
            toolbar: ".toolbar",

            showRefresh: true,
            search: true,
            showToggle: true,
            showColumns: true,
            pagination: true,
            striped: true,
            pageSize: 8,
            pageList: [8,10,25,50,100],

            formatShowingRows: function(pageFrom, pageTo, totalRows){
                //do nothing here, we don't want to show the text "showing x of y from..."
            },
            formatRecordsPerPage: function(pageNumber){
                return pageNumber + " rows visible";
            },
            icons: {
                refresh: 'fa fa-refresh',
                toggle: 'fa fa-th-list',
                columns: 'fa fa-columns',
                detailOpen: 'fa fa-plus-circle',
                detailClose: 'fa fa-minus-circle'
            }
        });
    });



        $(window).resize(function () {
            $table.bootstrapTable('resetView');
        });

    </script>   

    

  <?php require_once __DIR__.'/element/js.php'; ?>    
    
</body>

</html>