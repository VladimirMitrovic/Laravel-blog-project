<div class="row">

    <div class="col-md-8 col-md-offset-2">

        <p class="lead">Edit Blog Post</p>

        <form action="{{ route('administrator.update', ['id' => $post->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value ="PUT">
            <div class="form-group">
            <label for="title">Blog Title</label>
                <div class="form-line">
                    <input name="title" type="text" value="{{ $post->title }}" class="form-control" placeholder="Title">
                </div>
            </div>

            <div class="form-group">
            <label for="content">Blog Content</label>
                <div class="form-line">
                    <textarea class="form-control" name="content" id="content" placeholder="Blog Post Content">{{ $post->content }}</textarea>
                </div>
            </div>

            <div class="form-group">
            <label for="description">Blog short description</label>
                <div class="form-line">
                    <textarea class="form-control" name="description"  placeholder="Blog Post Description">{{ $post->description }}</textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="slika">Blog Post Picture</label>
                    <input id="slika" name="picture" type="file" value="" class="form-control">
                    <br>
                    <img class="img thumbnail" height="200px" src="{{ asset('/images/'.$post->featured_image) }}" alt="{{ $post->alt }}">
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary waves-amber" value="Edit">
                <a href="{{ route('administrator.index') }}" class="btn btn-warning waves-effect">Cancel</a>
            </div>

        </form>

    </div>

</div>