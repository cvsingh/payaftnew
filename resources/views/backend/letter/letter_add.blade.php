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
          <h4 class="box-title" class="box-title">Add Letter</h4>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col">
              <form action="{{ route('letters.store') }}" method="post">
                @csrf
                <div class="row">
                  <div class="col-12">
                    <div class="row">
                      <div class="col-md-12">
                        <input name="type_document" type="radio" id="radio_30" class="with-gap radio-col-primary" value="letter" checked />
                        <label for="radio_30" class="box-title">Letter</label>
                        <input name="type_document" type="radio" id="radio_32" class="with-gap radio-col-success" value="note" />
                        <label for="radio_32" class="box-title">Office Note</label>
                      </div> <!-- End Col Md-12 -->
                    </div> <!-- End Row -->
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <h4 class="box-title">File Name <span class="text-danger">*</span></h4>
                          <div class="controls">
                            <select name="file_id" id="select" required="" class="form-control" aria-invalid="false">
                              <option value="" selected="" disabled="">Select File
                              </option>
                              @foreach ($files as $file)
                              <option value="{{ $file->id }}">
                                {{ $file->file_no }}
                              </option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div> <!-- End Col Md-12 -->
                    </div> <!-- End Row -->

                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <h4 class="box-title">Letter / Office Note No <span class="text-danger">*</span></h4>
                          <div class="controls">
                            <input type="text" name="letter_no" class="form-control" required="">
                          </div>
                        </div>
                      </div><!-- End Col Md-6 -->

                      <div class="col-md-6">
                        <div class="form-group">
                          <h4 class="box-title">Letter / Office Note Subject <span class="text-danger">*</span></h4>
                          <div class="controls">
                            <input type="text" name="letter_subject" class="form-control" required="">
                          </div>
                        </div>
                      </div><!-- End Col Md-6 -->
                    </div> <!-- End Row -->

                    <div class="row">
                      <div class="col-md-6">
                        <h4 class="box-title">Letter / Office Note Date <span class="text-danger">*</span></h4>
                        <div class="controls">
                          <input class="form-control" type="date" name="letter_date">
                        </div>
                      </div> <!-- End Col Md-6 -->

                      <div class="col-md-6">

                      </div> <!-- End Col Md-6 -->
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
