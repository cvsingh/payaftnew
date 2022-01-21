@php

$user = Auth::guard()->user();

@endphp
<header class="header_area">
    <!-- logo -->
    <div class="sidebar_logo">
        <a href="{{ route('admin.dashboard') }}">
            <img src="{{ asset('panel/assets/images/logo.png') }}" alt="" class="img-fluid logo1">
            <img src="{{ asset('panel/assets/images/logo_small.png') }}" alt="" class="img-fluid logo2">
        </a>
    </div>
    <div class="sidebar_btn">
        <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
    </div>
    <ul class="header_menu">
        <li><a data-toggle="dropdown" href="#"><i class="far fa-envelope"></i><span></span></a>
            <div class="dropdown_wrapper messages_item dropdown-menu dropdown-menu-right">
                <div class="dropdown_header">
                    <p>you have messages</p>
                </div>
                <ul class="dropdown_body nice_scroll scrollbar">
                    <li>
                        <a href="#">
                            <div class="text-part">
                                <h6> <span><i class="far fa-clock"></i> </span></h6>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="dropdown_footer">
                    <a href="#">To See All Messages Click Inbox</a>
                </div>
            </div>
        </li>
        <li><a href="#" data-toggle="dropdown"><i class="far fa-bell"></i><span></span></a>
            <div class="dropdown_wrapper notification_item dropdown-menu dropdown-menu-right">
                <div class="dropdown_header">
                    <p></p>
                </div>
                <ul class="dropdown_body scrollbar nice_scroll">
                    <li>
                        <a href="#">
                            <div class="img-part">
                                <span class="text-success"><i class="fas fa-users"></i></span>
                            </div>
                            <div class="text-part">
                                <p></p>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="dropdown_footer">
                    <a href="#">view All</a>
                </div>
            </div>
        </li>
        <li><a data-toggle="dropdown" href="#"><i class="far fa-user"></i>
            </a>
            <div class="user_item dropdown-menu dropdown-menu-right">
                <ul>

                    <li><a href="#"><span><i class="fas fa-user"></i></span> User Profile</a></li>
                    <li><a href=" "><span><i class="fas fa-cogs"></i></span> Password Change</a></li>
                    <li>

                        <a href="{{ route('admin.logout') }} "><span><i class="fas fa-unlock-alt"></i></span> Logout</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>

            <a class="responsive_menu_toggle" href=""><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</header>
