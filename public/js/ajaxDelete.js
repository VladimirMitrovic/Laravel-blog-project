$(document).ready(function(){
   var base_url = $("#url").val();

    $(".postDelete").click(function(e){
      e.preventDefault();
      var id = $(this).data('id');

      $.ajax({
         url: base_url+'/api/post/'+id,
         method:'delete',
         dataType: 'json',
         data:{id:id},
         success:function(data){
            console.log(data);
  //          clearPosts();
            getPosts();

         },
         error: function(xhr, statusText, error){
          var status = xhr.status;
          console.log(status);
          }
      });
  });

  function clearPosts(){
   var content="";
   content += ``;
   $('.card').html(content);
  }
  function getPosts(){
   $.ajax({
      url: base_url+"/api/post",
      method: 'get',
      dataType: 'json',
      success:function(data){
        console.log(data);
        var content="";
        $.each(data.posts, function(index,post){
           var dateOld = post.created_at;
           var dateTimeSplit = dateOld.split(" ");
           var dateSplit = dateTimeSplit[0].split("-");
           var date = dateSplit[2];
           var month = dateSplit[1];
           var year = dateSplit[0];
           var myDate = date+"."+month+"."+year;
           content += `
         <div class="header">
            <h2> ${post['title']} </h2>
            <ul class="header-dropdown m-r--5">
               <li class="dropdown">
                     <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">more_vert</i>
                     </a>
                     <ul class="dropdown-menu pull-right">

                     <li><a href="{{ route('post.show', ['id' => $post->id]) }}">Edit</a></li>
                     <li><a href="javascript:void(0)" class="postDelete" data-id="${post['id']}">Delete</a></li>

                     </ul>
               </li>
            </ul>
         </div>
         <div class="body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
               <li role="presentation" class="active"><a href="#home${post['id']}" data-toggle="tab">Content</a></li>
               <li role="presentation"><a href="#profile${post['id']}" data-toggle="tab">Picture</a></li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
               <div role="tabpanel" class="tab-pane fade in active" id="home${post['id']}">
                     <b>Content</b>
                     <p>
                        ${post['content']}
                     </p>
               </div>
            <div role="tabpanel" class="tab-pane fade" id="profile${post['id']}">
                     <img src="${base_url}/images/${post['featured_image']}" alt="${post['title']}">
               </div>
            </div>
         </div>
         `;
      });
      $('.card').html(content);
      },
      error: function(xhr, statusText, error){
        var status = xhr.status;
        console.log(status);
        }
     });
   }


});
