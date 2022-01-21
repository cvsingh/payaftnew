@php
use App\Models\Employee;
use App\Models\Letter;

$user = Auth::guard('employee')->user();
// $user_id = Auth::guard('employee')->user()->id;
$usertype = $user->usertype;
$user_id = $user->id;

if ($usertype == 'tsk') {
$allData = Letter::where('tsk_id', $user_id)->whereNull('so_id')->get();
$new_inbox = Letter::where('tsk_id', $user_id)->whereNull('so_id')->count();


} elseif ($usertype == 'SO') {
$allData = Letter::where('so_id', $user_id)->whereNull('ar_id')->get();

$new_inbox = Letter::where('so_id', $user_id)->whereNull('ar_id')->count();

} elseif ($usertype == 'AR') {
$allData = Letter::where('ar_id', $user_id)->whereNull('dr_id')->get();

$new_inbox = Letter::where('ar_id', $user_id)->whereNull('dr_id')->count();
} elseif ($usertype == 'DR') {
$allData = Letter::where('dr_id', $user_id)->whereNull('jr_id')->get();

$new_inbox = Letter::where('dr_id', $user_id)->whereNull('jr_id')->count();
} elseif ($usertype == 'JR') {
$allData = Letter::where('jr_id', $user_id)->whereNull('pr_id')->get();

$new_inbox = Letter::where('jr_id', $user_id)->whereNull('pr_id')->count();
} elseif ($usertype == 'PR') {
$allData = Letter::where('pr_id', $user_id)->whereNull('pr_date')->get();

$new_inbox = Letter::where('pr_id', $user_id)->whereNull('pr_date')->count();
} else {
$allData =[];

$new_inbox = 0;
}
@endphp
<header class="header_area">
    <!-- logo -->
    <div class="sidebar_logo">
        <a href="{{ route('employee.dashboard') }}">
            <img src="{{ asset('panel/assets/images/logo.png') }}" alt="" class="img-fluid logo1">
            <img src="{{ asset('panel/assets/images/logo_small.png') }}" alt="" class="img-fluid logo2">
        </a>
    </div>
    <div class="sidebar_btn">
        <button class="sidbar-toggler-btn"><i class="fas fa-bars"></i></button>
    </div>
    <ul class="header_menu">
        <li><a data-toggle="dropdown" href="#"><i class="far fa-envelope"></i><span>{{ $new_inbox }}</span></a>
            <div class="dropdown_wrapper messages_item dropdown-menu dropdown-menu-right">
                <div class="dropdown_header">
                    <p>you have {{ $new_inbox }} messages</p>
                </div>
                <ul class="dropdown_body nice_scroll scrollbar">
                    @foreach ($allData as $key=> $letter)
                    <li>
                        <a href="#">
                            <div class="text-part">
                                <h6>{{ $letter->letter_no }} <span><i class="far fa-clock"></i> {{ $letter->letter_date }}</span></h6>
                            </div>
                        </a>
                    </li>
                    @endforeach
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
                {{ Auth::guard('employee')->user()->name  }}
            </a>
            <div class="user_item dropdown-menu dropdown-menu-right">
                <ul>

                    <li><a href="#"><span><i class="fas fa-user"></i></span> User Profile</a></li>
                    <li><a href=" "><span><i class="fas fa-cogs"></i></span> Password Change</a></li>
                    <li>

                        <a href="{{ route('employee.logout') }} "><span><i class="fas fa-unlock-alt"></i></span> Logout</a>
                    </li>
                </ul>
            </div>
        </li>
        <li>

            <a class="responsive_menu_toggle" href=""><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</header>
