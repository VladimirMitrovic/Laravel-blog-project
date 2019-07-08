$(document).ready(function(){
    var base_url = $("#url").val();

    $('.upload_form').click(function(e){
     e.preventDefault();

     var title = $('.title').val();
     var content = $('.content').html();
     var description = $('.description').val();
     var user_id = $('.id').val();

     
     $.ajax({
        url: base_url+"/api/post",
        method: 'post',
        dataType: 'json',
      data:{
          title: title,
          content: content,
          description: description,
          user_id: user_id
        },    
      success:function(data)
      {
        var content = $('.content').val(JSON.stringify(data));
        console.log(data);

        // var content="";
        //       $.each(data.posts, function(index,post){
        //          var dateOld = post.created_at;
        //          var dateTimeSplit = dateOld.split(" ");
        //          var dateSplit = dateTimeSplit[0].split("-");
        //          var date = dateSplit[2];
        //          var month = dateSplit[1];
        //          var year = dateSplit[0];
        //          var myDate = date+"."+month+"."+year;
        //          content += `
        //          <div class="row">
        //             <div class="col-lg-4 col-md-4 mx-auto">
        //             <img class="card-img-top" src="${base_url}/images/${post['featured_image']}" alt="Card image cap">
        //             </div>
        //             <div class="col-lg-8 col-md-8 mx-auto">
        //             <div class="post-preview">
        //                   <a href="post/${post['id']}">
        //                      <h2 class="post-title"> ${post['title']} </h2>
        //                      <h3 class="post-subtitle">
        //                       ${post['description']} ...
        //                      </h3>
        //                   </a>
        //                   <p class="post-meta">Posted by <a href="#">${post.user['name']}</a> on ${myDate}</p>                        
        //                </div>
        //             </div>  
        //             </div>
        //             <hr>`;
        //          });
        //          $('.body').html(content)
      },
      error: function(xhr, statusText, error){
        var status = xhr.status;
        console.log(status);
        }
     })
    });

   
   });