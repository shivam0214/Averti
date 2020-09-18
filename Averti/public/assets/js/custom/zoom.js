$('#createzoom,#createzoom2').click(function(){
        $.ajax({
        url:'/create/zoom',
        type:'GET',
        success: function (response) {
         $("#modal-right").html(response);
          }
      });
});

$('.invite').click(function(){
    mid= $(this).attr('role');
    $('#invite').modal('show');
  $.ajax({
      url:'/invite/'+mid,
      type:'GET',
      success: function (response) {
      $("#invitecontent").html(response);
        }
    }); 
});

$('#create_meetingform').submit(function(e) {
    e.preventDefault();
    var inputData = new FormData($(this)[0]);
    $.ajax({
            url:'/post/zoom',
            type:'POST',
            dataType: 'json',
            data:inputData,
            processData:false,
            contentType:false,
             beforeSend: function () {
                $('.backloader').show();
              },
              complete: function () {
                $('.backloader').hide();
              },
            success: function (response) {
              if(response.status==1){
                $('#invite').modal('hide');
                toastr.success(response.msg);
                setTimeout(function(){ window.location.href = "/getmeeting"; }, 3000);
              }else{
                toastr.error(response.msg);
              }
             
            }
      });
  });

$('.add_user_to_groups').click(function(){
  group_users_id= $(this).attr('role');
    $('#myModal2').modal('show');
 $.ajax({
  url:'/add_to_group_users/'+group_users_id,
  type:'GET',
  success: function (response) {
    $(".user_list").html(response);
    }
 });
});

// *****Food Template*****//
$(document).ready(function(){
  $('#clone_btn').click(function(){
    $("#food_parent").append($("#food_image").clone());
  });
});
 