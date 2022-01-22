<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('panel/assets/images/favicon.png') }}">
    <!--Page title-->
    <title>Employee easy Learning</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="{{ asset('panel/assets/css/bootstrap.min.css') }}">
    <!--font awesome-->
    <link rel="stylesheet" href="{{ asset('panel/assets/css/all.min.css') }}">
    <!-- metis menu -->
    <link rel="stylesheet" href="{{ asset('panel/assets/plugins/metismenu-3.0.4/assets/css/metisMenu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('panel/assets/plugins/metismenu-3.0.4/assets/css/mm-vertical-hover.css') }}">
    <!-- chart -->

    <!-- <link rel="stylesheet" href="assets/plugins/chartjs-bar-chart/chart.css"> -->
    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ asset('panel/assets/css/style.css') }}">
</head>

<body id="page-top">
    <!-- preloader -->
    <div class="preloader">
        <img src="{{ asset('panel/assets/images/preloader.gif') }}" alt="">
    </div>


    <div class="wrapper without_header_sidebar">
        <!-- contnet wrapper -->
        <div class="content_wrapper">
            <!-- page content -->
            <div class="registration_page center_container">
                <div class="center_content">
                    <div class="logo">
                        <img src="panel/assets/images/logo.png" alt="" class="img-fluid">
                    </div>
                    <form action="{{ route('employee.register.create') }}" method="post">
                        @csrf

                        <div class="form-group icon_parent">
                            <label for="usertype">Salutation</label>
                            <select name="salutation" id="select" required="" class="form-control" aria-invalid="false">
                                <option value="" selected="" disabled="">Select Salutaion</option>
                                <option value="Justice">Justice</option>
                                <option value="Lt Gen(Retd)">Lt Gen(Retd)</option>
                                <option value="Air Marshal">Air Marshal</option>
                                <option value="Dr.">Dr.</option>
                                <option value="Mr">Mr</option>
                                <option value="Ms">Ms</option>

                            </select>
                            <span class="icon_soon_bottom_right"><i class="fas fa-user-tag"></i></span>
                        </div>

                        <div class="form-group icon_parent">
                            <label for="uname">Username</label>
                            <input type="text" class="form-control" name="name" placeholder="Full Name">

                            <span class="icon_soon_bottom_right"><i class="fas fa-user"></i></span>
                        </div>
                        <div class="form-group icon_parent">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Email Address">


                            <span class="icon_soon_bottom_right"><i class="fas fa-envelope"></i></span>
                        </div>
                        <div class="form-group icon_parent">
                            <label for="usertype">Role</label>
                            <select name="usertype" id="select" required="" class="form-control" aria-invalid="false">
                                <option value="" selected="" disabled="">Select Role</option>
                                <option value="CP">Chairperson</option>
                                <option value="User">User</option>
                                <option value="PR">PR</option>
                                <option value="JR">JR</option>
                                <option value="DR">DR</option>
                                <option value="AR">AR</option>
                                <option value="SO">SO</option>
                                <option value="tsk">Task</option>
                            </select>
                            <span class="icon_soon_bottom_right"><i class="fas fa-user-tag"></i></span>
                        </div>
                        <div class="form-group icon_parent">
                            <label for="designation">Designation</label>
                            <select name="designation" id="select" required="" class="form-control" aria-invalid="false">
                                <option value="" selected="" disabled="">Select Designation</option>
                                <option value="Chairperson">Chairperson</option>
                                <option value="Compose Member (A)">Compose Member (A)</option>
                                <option value="Member (A)">Member (A)</option>
                                <option value="Principal Registrar">Principal Registrar</option>
                                <option value="Joint Registrar">Joint Registrar</option>
                                <option value="Deputy Registrar">Deputy Registrar</option>
                                <option value="Asst. Registrar">Astt. Registrar</option>
                                <option value="PPS">PPS</option>
                                <option value="AO">AO</option>
                                <option value="SO">SO</option>
                                <option value="Asstt">Astt</option>
                                <option value="Jr. Lib.">Jr. Lib.</option>
                                <option value="Sr. Accountant">Sr. Accountant</option>
                                <option value="Jr. Accountant">Jr. Accountant</option>
                                <option value="UDC">UDC</option>
                                <option value="LDC">LDC</option>
                                <option value="Driver">Driver</option>
                                <option value="MTS">MTS</option>
                                <option value="Chowkidar">Chowkidar</option>
                                <option value="Lib. Attendant">Chowkidar</option>
                            </select>
                            <span class="icon_soon_bottom_right"><i class="fas fa-user-tag"></i></span>
                        </div>
                        <div class="form-group icon_parent">
                            <label for="date_of_birth">Date of Birth</label>
                            <input type="date" class="form-control" name="date_of_birth" placeholder="Date of Birth">
                            <span class="icon_soon_bottom_right"><i class="fas fa-calendar-day"></i></span>
                        </div>
                        <div class="form-group icon_parent">
                            <label for="date_coc">Date of Completion Of Contract</label>
                            <input type="date" class="form-control" name="date_coc" placeholder="Date of Completion Of Contract">
                            <span class="icon_soon_bottom_right"><i class="fas fa-calendar-day"></i></span>
                        </div>
                        <!-- <div class="form-group icon_parent">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password">


                            <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                        </div>
                        <div class="form-group icon_parent">
                            <label for="rtpassword">Re-type Password</label>
                            <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                            <span class="icon_soon_bottom_right"><i class="fas fa-unlock"></i></span>
                        </div> -->
                        <div class="form-group">
                            <a class="registration" href="{{ route('admin.dashboard') }} ">Already have an account or back</a><br>
                            <button type="submit" class="btn btn-blue">Signup</button>
                        </div>
                    </form>
                    <div class="footer">
                        <p>Copyright &copy; 2020 <a href="https://easylearningbd.com/">easy Learning</a>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--/ content wrapper -->
    </div>
    <!--/ wrapper -->




    <!-- jquery -->
    <script src="{{ asset('panel/assets/js/jquery.min.js') }}"></script>
    <!-- popper Min Js -->
    <script src="{{ asset('panel/assets/js/popper.min.js') }}"></script>
    <!-- Bootstrap Min Js -->
    <script src="{{ asset('panel/assets/js/bootstrap.min.js') }}"></script>
    <!-- Fontawesome-->
    <script src="{{ asset('panel/assets/js/all.min.js') }}"></script>
    <!-- metis menu -->
    <script src="{{ asset('panel/assets/plugins/metismenu-3.0.4/assets/js/metismenu.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/metismenu-3.0.4/assets/js/mm-vertical-hover.js') }}"></script>
    <!-- nice scroll bar -->
    <script src="{{ asset('panel/assets/plugins/scrollbar/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/scrollbar/scroll.active.js') }}"></script>
    <!-- counter -->
    <script src="{{ asset('panel/assets/plugins/counter/js/counter.js') }}"></script>
    <!-- chart -->
    <script src="{{ asset('panel/assets/plugins/chartjs-bar-chart/Chart.min.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/chartjs-bar-chart/chart.js') }}"></script>
    <!-- pie chart -->
    <script src="{{ asset('panel/assets/plugins/pie_chart/chart.loader.js') }}"></script>
    <script src="{{ asset('panel/assets/plugins/pie_chart/pie.active.js') }}"></script>


    <!-- Main js -->
    <script src="{{ asset('panel/assets/js/main.js') }}"></script>





</body>

</html>
