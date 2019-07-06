<!-- Sidebar Widgets Column -->
<div class="col-md-3">
    <!-- Search Widget -->
  <div class="card my-4">
      <h5 class="card-header">Login here:</h5>
    <div class="card-body">
      <form action="" method="post">
          {{ csrf_field() }}
          <div class="form-group">
              <input type="text" class="form-control" name="username"  placeholder="Username">
          </div>
          <div class="form-group">
              <input type="password" class="form-control" name="password"  placeholder="Password">
          </div>
          <div class="form-group">
              <button type="submit" class="btn btn-outline-dark loginBtn" name="button">Login</button>
          </div>
       </form>
      </div>
  </div>
</div>