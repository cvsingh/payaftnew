@extends('employee.user_master')
@section('user')

@if (Session::has('error'))
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>{{ session::get('error') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="middle_content_wrapper">
    <!-- counter_area -->
    <section class="counter_area">
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="counter">
                    <div class="counter_item">
                        <span><i class="fa fa-code"></i></span>
                        <h2 class="timer count-number" data-to="300" data-speed="1500">{{ $no_letters }}</h2>
                    </div>

                    <p class="count-text h3">Total Letters</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter">
                    <div class="counter_item">
                        <span><i class="fa fa-coffee"></i></span>
                        <h2 class="timer count-number" data-to="1700" data-speed="1500">{{ $no_disposed_letters }}</h2>
                    </div>
                    <p class="count-text h3">Disposed Off</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="counter">
                    <div class="counter_item">
                        <span><i class="fas fa-user"></i></span>
                        <h2 class="timer count-number" data-to="11900" data-speed="1500">{{ $no_pending_letters }}</h2>
                    </div>
                    <p class="count-text h3">Pending Letters</p>

                </div>
            </div>
        </div>
    </section>
    <!--/ counter_area -->
</div>
<!--/middle content wrapper-->
@endsection
