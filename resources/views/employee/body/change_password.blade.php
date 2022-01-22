@extends('employee.user_master')
@section('user')
<div class="content-wrapper">
  <div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Change Password</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
              <form action="{{ route('password.update') }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-12">

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <h5>Current Password <span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="password" name="oldpassword" class="form-control" id="oldpassword">
                          </div>
                        </div>
                        @error('oldpassword')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div> <!-- End Col Md-4 -->

                      <div class="col-md-4">
                        <div class="form-group">
                          <h5>New Password <span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="password" name="password" id="password" class="form-control" required="">
                          </div>
                          @error('password')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                        </div>
                      </div><!-- End Col Md-4 -->
                      <div class="col-md-4">
                        <div class="form-group">
                          <h5>Confirm Password <span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required="">
                          </div>
                        </div>
                        @error('password_confirmation')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                      </div><!-- End Col Md-4 -->
                    </div> <!-- End Row -->

                    <div class="text-xs-right">
                      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
                    </div>
              </form>

            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->

  </div>
</div>

@endsection
