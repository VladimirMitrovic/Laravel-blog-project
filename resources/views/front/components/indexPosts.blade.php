@isset($posts)
  @foreach($posts as $post)
  <div class="row">

    <div class="col-lg-4 col-md-4 mx-auto">
    <img class="card-img-top" src="{{ asset('/images/'.$post->featured_image) }}" alt="Card image cap">
    </div>
    <div class="col-lg-8 col-md-8 mx-auto">
    <div class="post-preview">
          <a href="post/{{$post->id}}">
            <h2 class="post-title"> {{ $post->title }} </h2>
            <h3 class="post-subtitle">
            {{ substr($post->description, 0, 100) }} ...
            </h3>
          </a>
          <p class="post-meta">Posted by <a href="#">{{ $post->user->name }}</a> on {{ date('d.m.Y',strtotime($post->created_at)) }}</p>
        <!-- /  <a href="javascript:void(0)" class="postDelete" data-id="{{$post->id}}">Delete</a> -->
          <button class="postDelete btn btn-warning" data-id="{{$post->id}}">Delete</button>
        </div>
    </div>
  </div> 
        <hr>
  @endforeach
@endisset

