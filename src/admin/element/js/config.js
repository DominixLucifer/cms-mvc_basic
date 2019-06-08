$(document).ready(function(){
   $('#email_user').on( "click",function(){
   	$('#result_email').text('You cannot change email. Please contact the administrator');
   });


   $('#myImg').click(function(){
	$('#myModal').css("display", "block");
	var img = $(this).attr('src');
	var alt = $(this).attr('alt');
	$('#img01').attr('src',img);
	$('#caption').html(alt);
});

$('.close').click(function(){
	$('#myModal').css("display",'none');
});



});