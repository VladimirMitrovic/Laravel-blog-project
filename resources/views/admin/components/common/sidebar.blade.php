<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
@include("admin.components.common.user_info")
<!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li>
                <a href="{{ url('/') }}">
                    <i class="material-icons">home</i>
                    <span>Back to website</span>
                </a>
            </li>
            <li class="active">
                <a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">border_color</i>
                    <span>Posts</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="{{ route ('administrator.create') }}">Add</a>
                    </li>
                    <li>
                        <a href="{{ route ('administrator.index') }}">Show</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
   
</aside>
<!-- #END# Left Sidebar -->
