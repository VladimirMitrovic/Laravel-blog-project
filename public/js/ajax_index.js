$(document).ready(function(){
   var base_url = $("#url").val();

   //show all blog posts
   $.ajax({
          url: base_url+"/api/posts/all",
          method: 'get',
          dataType: 'json',
          success:function(data){
            console.log(data);
            var content="";
            $.each(data.data, function(index,post){
               var dateOld = post.created_at;
               var dateTimeSplit = dateOld.split(" ");
               var dateSplit = dateTimeSplit[0].split("-");
               var date = dateSplit[2];
               var month = dateSplit[1];
               var year = dateSplit[0];
               var myDate = date+"."+month+"."+year;
               content += `
               <div class="row">
                  <div class="col-lg-4 col-md-4 mx-auto">
                  <img class="card-img-top" src="${base_url}/images/${post['featured_image']}" alt="Card image cap">
                  </div>
                  <div class="col-lg-8 col-md-8 mx-auto">
                  <div class="post-preview">
                        <a href="post/${post['id']}">
                           <h2 class="post-title"> ${post['title']} </h2>
                           <h3 class="post-subtitle">
                            ${post['description']} ...
                           </h3>
                        </a>
                        <p class="post-meta">Posted on ${myDate}</p>                        
                     </div>
                  </div>  
                  </div>
                  <hr>
                  `;
                  
               });
                var pagination="";
                pagination += `
                   <a href="${data.links.prev}"> Previous page </a>  &nbsp;
                   <a href="${data.links.next}"> Next page </a>
                   `;
                 
               $('#indexPosts').html(content);
              // $('#pagination').html(data['links']);
               $('#pagination').html(pagination);
          },
          error: function(xhr, statusText, error){
            var status = xhr.status;
            console.log(status);
            }
         });


         //Show all posts from one author

         $('#selectAuthor').change(function(){
            var id = $('#selectAuthor').val();
             $.ajax({
               url: base_url+"/api/author/posts/"+id,
               method: 'get',
               dataType: 'json',
               data:{id:id},
               success:function(data){
                  console.log(data);
                  var content="";
                  $.each(data.author_posts, function(index,post){
                     var dateOld = post.created_at;
                     var dateTimeSplit = dateOld.split(" ");
                     var dateSplit = dateTimeSplit[0].split("-");
                     var date = dateSplit[2];
                     var month = dateSplit[1];
                     var year = dateSplit[0];
                     var myDate = date+"."+month+"."+year;
                     content += `
                     <div class="row">
                        <div class="col-lg-4 col-md-4 mx-auto">
                        <img class="card-img-top" src="${base_url}/images/${post['featured_image']}" alt="Card image cap">
                        </div>
                        <div class="col-lg-8 col-md-8 mx-auto">
                        <div class="post-preview">
                              <a href="post/${post['id']}">
                                 <h2 class="post-title"> ${post['title']} </h2>
                                 <h3 class="post-subtitle">
                                 ${post['description']} ...
                                 </h3>
                              </a>
                              <p class="post-meta">Posted by <a href="#">${post.user['name']}</a> on ${myDate}</p>                              
                           </div>
                        </div>  
                        </div>
                        <hr>`;
                     });
                     $('#indexPosts').html(content)
               },
               error: function(xhr, statusText, error){
                  var status = xhr.status;
                  console.log(status);
                  }
               });

         });

      });

      