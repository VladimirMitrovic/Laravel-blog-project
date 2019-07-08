<!-- User Info -->
<div class="user-info">
    <div class="image">
        <img src="{{ asset('admin/images/user.png') }}" width="48" height="48" alt="User" />
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $user->name }}  </div>
        <div class="email">{{ $user->email }}</div>
    </div>
</div>
<!-- #User Info -->