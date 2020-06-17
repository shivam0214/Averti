$('#createzoom').click(function(){
    
    $.ajax({
        url:'/create/zoom',
        type:'GET',
        success: function (response) {
         $("#modal-right").html(response);
          }
      });
});