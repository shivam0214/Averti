$('#createzoom').click(function(){
    
    $.ajax({
        url:'/create/zoom',
        type:'GET',
        success: function (response) {
         $("#modal-right").html(response);
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
                $('#modal-right').modal('hide');
                toastr.success(response.message);
                setTimeout(function(){ window.location.href = "/getmeeting"; }, 3000);
              }else{
                toastr.error(response.message);
              }
             
            }
      });
  });
