$(document).ready(function(){
    var base_url = $("#url").val();

    $('.upload_form').click(function(){
      $('#insertForm').on('submit', function(e){
        e.preventDefault();
        $.ajax({
          url: base_url+"/api/post",
          method: 'post',
          data:new FormData(this),
          contentType: false,
          cache:false,
          processData: false,
          dataType: 'json',
        success:function(data)
        {
          console.log(data);
          clearForm();
          var messages = $('.messages');
  
          var successHtml = '<div class="alert alert-success">'+
          '<button type="button" class="close" data-dismiss="alert">&times;</button>'+
          '<strong><i class="glyphicon glyphicon-ok-sign push-5-r"></</strong> '+ data.message +
          '</div>';
  
          $(messages).html(successHtml);
        },
        error: function(xhr, statusText, error){
          var status = xhr.status;
          console.log(status);
          }
       })

      })


    function clearForm(){
      $('.title').val('');
      $('textarea.content').html('');
      $('.description').val('');
    }
    
    });
   });