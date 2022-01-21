<aside class="sidebar-wrapper ">
    <nav class="sidebar-nav">
        <ul class="metismenu" id="menu1">
            <li>&nbsp;</li>
            <li class="single-nav-wrapper active">
                <a href="{{ route('admin.dashboard') }}" class="menu-item">
                    <span class="left-icon"><i class="fas fa-home"></i></span>
                    <span class="menu-text">home</span>
                </a>
            </li>
            <li class="single-nav-wrapper">
                <a href="{{ route('user.view') }}" class="menu-item">
                    <span class="left-icon"><i class="fas fa-users"></i></span>
                    <span class="menu-text">View Admin User</span>
                </a>
            </li>
            <li class="single-nav-wrapper">
                <a href="{{ route('employee.register') }}" class="menu-item">
                    <span class="left-icon"><i class="fas fa-user"></i></span>
                    <span class="menu-text">Add User</span>
                </a>
            </li>
            <li class="single-nav-wrapper">
                <a href="{{ route('files.view') }}" class="menu-item">
                    <span class="left-icon"><i class="fas fa-file-image"></i></span>
                    <span class="menu-text">View Files</span>
                </a>
            </li>
            <li class="single-nav-wrapper">
                <a class="has-arrow menu-item" href="{{ route('pay.view') }}" aria-expanded="false">
                    <span><i class="fas fa-table"></i></span>
                    <span class="menu-text">View Pay Bill</span>
                </a>

            </li>
        </ul>
    </nav>
</aside>
