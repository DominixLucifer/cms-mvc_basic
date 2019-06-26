<!doctype html>
<html lang="en">
<?php require_once(__DIR__.'/element/head.php'); ?>
<body>

<div class="wrapper">
<?php require_once(__DIR__.'/element/navbar.php'); ?>

    <div class="main-panel">
        
<?php require_once(__DIR__.'/element/menu.php'); ?>

<?php 
$style = 'background-image:    url('.asset('admin','images').'mainbg4.jpg);
    background-size:     cover;                      /* <------ */
    background-repeat:   no-repeat;
    background-position: center center;
    -moz-box-shadow:    0px 0px 5px 2px #282a2d;
    -webkit-box-shadow: 0px 0px 5px 2px #282a2d;
    color:white;
    '

 ?>


	<div class="content" style="<?php echo $style; ?>">
            <div class="container-fluid">
            	<div class="row">
            		<div class="col-md-12">

    <div class="row">
  		<div class="col-sm-10"><h1><?php echo $datauser->username; ?></h1></div>

    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img id="myImg" src="https://www.w3schools.com/howto/img_snow.jpg" alt="Snow" class="avatar">

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- The Close Button -->
  <span class="close">&times;</span>

  <!-- Modal Content (The Image) -->
  <img class="modal-content" id="img01">

  <!-- Modal Caption (Image Text) -->
  <div id="caption"></div>
</div>
        <h6>Upload a different photo...</h6>
        <form>
        	 <input type="file" id="imgUpload" name="image" class="form-control">
        	 <div id="load">
      		</div>
        </form>
       

      </div></hr><br>

               
          <div class="panel panel-default">
            <div class="panel-heading">Website <i class="fa fa-link fa-1x"></i></div>
            <div class="panel-body"><a href="http://bootnipets.com">bootnipets.com</a></div>
          </div>
          
          
          <ul class="list-group" style="color: black">
            <li class="list-group-item text-muted">Activity <i class="fa fa-dashboard fa-1x"></i></li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Shares</strong></span> 125</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Likes</strong></span> 13</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Posts</strong></span> 37</li>
            <li class="list-group-item text-right"><span class="pull-left"><strong>Followers</strong></span> 78</li>
          </ul> 
               
          <div class="panel panel-default" style="color: black">
            <div class="panel-heading">Social Media</div>
            <div class="panel-body">
            	<i class="fab fa-facebook fa-2x"></i> <i class="fab fa-youtube fa-2x"></i> <i class="fab fa-twitter fa-2x"></i> <i class="fab fa-pinterest fa-2x"></i> <i class="fab fa-google-plus fa-2x"></i>
            </div>
          </div>
          
        </div><!--/col-3-->
    	<div class="col-sm-9">


              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="fas fa-check"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="fas fa-sync-alt"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->

               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->



            		</div>
            		
            	</div>

            </div>
	</div>



<?php require_once(__DIR__.'/element/footer.php'); ?>



    </div>
</div>
<script>
	var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
} 


$(document).ready(function(){
	$("#load").hide();
	$('#imgUpload').on('change',function(){
		 $("#load").html('<img src="https://www.drupal.org/files/issues/throbber_13.gif" width="30" height="30" /> Đang upload ảnh...').fadeIn("slow");

		var file_data = $('#imgUpload').prop('files')[0];
		let x = document.getElementById('imgUpload');
        var type = file_data.type;
        console.log(file_data.size);
        var files = x.files;
        var form_data = new FormData();
        for (let i = 0; i < files.length; i++) {
                let file = files[i];
                // Add the file to the request.
                form_data.append('files[]', file, file.name);
            }
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
                success: function (res) {
                	console.log(res);
                    $("#load").html(' ');
                    $("#load").html('<i class="fas fa-check"></i> Upload thành công').fadeIn("slow");
                    if(res == 1){
                    	$.notify({
                              icon: '',
                             message: "update avatar success!"

                            },{
                                type: 'success',
                                timer: 2000
                            });
                    	setTimeout(function() {
                                        eval('window.location.href = "admin-profile.html"');
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
        return false;

	});
});

</script>


</body>
<?php require_once(__DIR__.'/element/script.php'); ?>


</html>