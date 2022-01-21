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
          <h4 class="box-title" class="box-title">Add Paymaster</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
              <form action="{{ route('pay.store') }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <h4 class="box-title">Select Name <span class="text-danger">*</span></h4>
                      <div class="controls">
                        <select name="employee_id" id="select" required="" class="form-control" aria-invalid="false">
                          <option value="" selected="" disabled="">Select Employee
                          </option>
                          @foreach ($employees as $employee)
                          <option value="{{ $employee->id }}">
                            {{ $employee->name }}
                          </option>
                          @endforeach
                        </select>
                      </div>
                    </div>
                  </div> <!-- End Col Md-4 -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <h4 class="box-title">Basic Pay <span class="text-danger">*</span></h4>
                      <div class="controls">
                        <input type="text" name="basic_pay" class="form-control" required="">
                      </div>
                    </div>
                  </div><!-- End Col Md-4 -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <h4 class="box-title">DA Flag <span class="text-danger">*</span></h4>
                      <div class="controls">
                        <input type="text" name="da_flag" class="form-control" required="" placeholder="C-Center | S-State | N-No">
                      </div>
                    </div>
                  </div><!-- End Col Md-4 -->
                </div> <!-- End Row -->

                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <h4 class="box-title">Hospitality Allowance <span class="text-danger">*</span></h4>
                      <div class="controls">
                        <input type="text" name="hospitaliy_allowance" class="form-control" required="">
                      </div>
                    </div>
                  </div><!-- End Col Md-4 -->

                  <div class="col-md-4">
                    <div class="form-group">
                      <h4 class="box-title">HRA <span class="text-danger">*</span></h4>
                      <div class="controls">
                        <input type="text" name="hra" class="form-control" required="">
                      </div>
                    </div>
                  </div><!-- End Col Md-4 -->
                  <div class="col-md-4">
                    <div class="form-group">
                      <h4 class="box-title">Transport <span class="text-danger">*</span></h4>
                      <div class="controls">
                        <input type="text" name="tpt" class="form-control" required="" placeholder="">
                      </div>
                    </div>
                  </div><!-- End Col Md-4 -->
                </div> <!-- End Row -->

                <div class="row">
                  <div class="col-md-4">
                    <h4 class="box-title">Orderly Allowance<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="	orderly_allowance">
                    </div>
                  </div> <!-- End Col Md-4 -->

                  <div class="col-md-4">
                    <h4 class="box-title">Employer Contribution EPF<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="employer_contribution_epf">
                    </div>
                  </div> <!-- End Col Md-4 -->
                  <div class="col-md-4">
                    <h4 class="box-title">Cashier Allowance Flag<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="cashier_allowance_flag">
                    </div>
                  </div> <!-- End Col Md-4 -->
                </div> <!-- End Row -->
                <div class="row">
                  <div class="col-md-4">
                    <h4 class="box-title">Medical Allowance Flag<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="	medical_allowance_flag">
                    </div>
                  </div> <!-- End Col Md-4 -->

                  <div class="col-md-4">
                    <h4 class="box-title">Arrears<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="arrears">
                    </div>
                  </div> <!-- End Col Md-4 -->
                  <div class="col-md-4">
                    <h4 class="box-title">Pension<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="pension">
                    </div>
                  </div> <!-- End Col Md-4 -->
                </div> <!-- End Row -->
                <div class="row">
                  <div class="col-md-4">
                    <h4 class="box-title">DA Pension Flag<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="	da_pension">
                    </div>
                  </div> <!-- End Col Md-4 -->

                  <div class="col-md-4">
                    <h4 class="box-title">EOL<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="eol">
                    </div>
                  </div> <!-- End Col Md-4 -->
                  <div class="col-md-4">
                    <h4 class="box-title">GPF<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="gpf">
                    </div>
                  </div> <!-- End Col Md-4 -->
                </div> <!-- End Row -->
                <div class="row">
                  <div class="col-md-4">
                    <h4 class="box-title">CGHS<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="	cghs">
                    </div>
                  </div> <!-- End Col Md-4 -->

                  <div class="col-md-4">
                    <h4 class="box-title">CGEIS<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="cgeis">
                    </div>
                  </div> <!-- End Col Md-4 -->
                  <div class="col-md-4">
                    <h4 class="box-title">Employee Contribution EPF<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="employee_contribution_epf">
                    </div>
                  </div> <!-- End Col Md-4 -->
                </div> <!-- End Row -->
                <div class="row">
                  <div class="col-md-4">
                    <h4 class="box-title">Insurance<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="	insurance">
                    </div>
                  </div> <!-- End Col Md-4 -->

                  <div class="col-md-4">
                    <h4 class="box-title">Income Tax<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="incometax">
                    </div>
                  </div> <!-- End Col Md-4 -->
                  <div class="col-md-4">
                    <h4 class="box-title">Cess<span class="text-danger">*</span></h4>
                    <div class="controls">
                      <input class="form-control" type="text" name="cess">
                    </div>
                  </div> <!-- End Col Md-4 -->
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
