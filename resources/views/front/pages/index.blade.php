@extends("layouts.front")

@section("title")
    Home page
@endsection

@section("content")
@include("front.components.index_header")

<!-- Main Content -->
<div class="container">
    <div class="row">
  @isset($users)

    <div class="col-lg-3">
        <div class="form-group selectJob">
            <label for="sel1">Choose author:</label>
                <select class="form-control" id="selectAuthor">
                  <option selected="" value="0">All posts</option>
                  @foreach($users as $user)
                  <option value="<?= $user->id ?>"><?= $user->name ?></option>
                  @endforeach
                </select>
            </div>
        </div>
        <div class="col-lg-9"></div>
       
  @endisset

      <div class="col-lg-9 col-md-9 mx-auto" id="indexPosts">

      </div>
      @include("front.components.sidebar")      

    </div>
  </div>

  <hr>

@endsection