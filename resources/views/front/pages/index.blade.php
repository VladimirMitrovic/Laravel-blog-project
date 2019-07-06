@extends("layouts.front")

@section("title")
    Home page
@endsection

@section("content")
@include("front.components.index_header")

<!-- Main Content -->
<div class="container">
    <div class="row">
      <div class="col-lg-9 col-md-9 mx-auto" id="indexPosts">
        
      @include("front.components.indexPosts")

      </div>
      @include("front.components.sidebar")      

    </div>
  </div>

  <hr>

@endsection