@php
$user = Auth::user();
        $id = $user->id;
@endphp
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <p class="lead">Add New Blog Post</p>
        <form id="insertForm">
            <div class="form-group">
                <div class="form-line">
                    <input name="title" type="text" class="form-control title" placeholder="Title">
                    <input type="hidden" class="user_id" name="user_id" id="user_id" value="{{$id}}">
                </div>
            </div>

            <div class="form-group">
                <textarea class="form-control content" name="content" id="content" placeholder="Blog Post Content"></textarea>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <textarea class="form-control description" name="description" placeholder="Blog Post Description"></textarea>
                </div>
            </div>

            <div class="form-group">
                <div class="form-line">
                    <label for="slika">Blog Post Picture</label>
                    <input id="file" name="picture" id="picture" type="file"  class="form-control">
                </div>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary waves-amber upload_form" name="upload_form" id="upload_form" value="Add">
                <!-- <a href="javascript:void(0)" class="btn btn-primary waves-amber upload_form" name="upload_form" value="Add">ADD</a> -->
                <a href="{{ route('administrator.index') }}" class="btn btn-warning waves-effect">Cancel</a>

            </div>
            <div class="form-group">
                <div class="messages"></div>
            </div>
       
       </form>
    </div>
</div>