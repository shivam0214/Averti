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
                $('.loader').show();
              },
              complete: function () {
                $('.loader').hide();
              },
            success: function (response) {
              
             
            }
      });
  });
