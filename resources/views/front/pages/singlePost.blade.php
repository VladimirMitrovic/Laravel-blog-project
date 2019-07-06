@extends("layouts.front")

@section("title")
    {{ $post->title }} - Single post
@endsection

@section("content")
@include("front.components.post.post_header")

<!-- Post Content -->
<article>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 mx-auto">
      <div class="post-heading">
            <h1>{{ $post->title }}</h1>
            <h2 class="subheading">{{ $post->description }}</h2>
            <span class="meta">Posted by <a href="#">{{ $post->user->name }}</a> on {{ date('d-M-Y',strtotime($post->created_at)) }}</span>
          </div>
      {!! $post->content !!}
      </div>
      @include("front.components.sidebar")      

    </div>
  </div>
</article>
  <hr>

@endsection
@section("appendScripts")