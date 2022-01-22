@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
  <div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">

      <!-- Basic Forms -->
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Update Employee</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
              <form action="{{ route('employee.update', $editData->id) }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group icon_parent">
                          <label for="usertype">Salutation</label>
                          <select name="salutation" id="select" required="" class="form-control" aria-invalid="false">
                            <option value="{{ $editData->salutation }}" selected="">{{ $editData->salutation }}</option>
                            <option value="Justice">Justice</option>
                            <option value="Lt Gen(Retd)">Lt Gen(Retd)</option>
                            <option value="Air Marshal">Air Marshal</option>
                            <option value="Dr.">Dr.</option>
                            <option value="Mr">Mr</option>
                            <option value="Ms">Ms</option>

                          </select>
                          <span class="icon_soon_bottom_right"><i class="fas fa-user-tag"></i></span>
                        </div>
                      </div> <!-- End Col Md-6 -->

                      <div class="col-md-6">
                        <div class="form-group">
                          <h5>Employee Name <span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="text" name="name" class="form-control" value="{{ $editData->name }}" required="">
                          </div>
                        </div>
                      </div><!-- End Col Md-6 -->
                    </div> <!-- End Row -->

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <h5>Employee Email <span class="text-danger">*</span></h5>
                          <div class="controls">
                            <input type="email" name="email" class="form-control" value="{{ $editData->email }}" required="">
                          </div>
                        </div>
                      </div> <!-- End Col Md-6 -->

                      <div class="col-md-6">
                        <div class="form-group icon_parent">
                          <label for="usertype">Role</label>
                          <select name="usertype" id="select" required="" class="form-control" aria-invalid="false">
                            <option value="{{ $editData->usertype }}" selected="" disabled="">{{ $editData->usertype }}</option>
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
                      </div><!-- End Col Md-6 -->
                    </div> <!-- End Row -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group icon_parent">
                          <label for="designation">Designation</label>
                          <select name="designation" id="select" required="" class="form-control" aria-invalid="false">
                            <option value="{{ $editData->designation }}" selected="" disabled="">{{ $editData->designation }}</option>
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
                      </div><!-- End Col Md-6 -->
                      <div class="col-md-6">
                        <div class="form-group icon_parent">
                          <label for="date_of_birth">Date of Birth</label>
                          <input type="date" class="form-control" name="date_of_birth" value="{{ $editData->date_of_birth }}" placeholder="Date of Birth">
                          <span class="icon_soon_bottom_right"><i class="fas fa-calendar-day"></i></span>
                        </div>
                      </div><!-- End Col Md-6 -->
                    </div><!-- End Row -->
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group icon_parent">
                          <label for="date_coc">Date of Completion Of Contract</label>
                          <input type="date" class="form-control" name="date_coc" value="{{ $editData->date_coc }}" placeholder="Date of Completion Of Contract">
                          <span class="icon_soon_bottom_right"><i class="fas fa-calendar-day"></i></span>
                        </div>
                      </div> <!-- End Col Md-6 -->

                      <div class="col-md-6">

                      </div><!-- End Col Md-6 -->
                    </div> <!-- End Row -->

                    <div class="text-xs-right">
                      <input type="submit" class="btn btn-rounded btn-info mb-5" value="Update">
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
