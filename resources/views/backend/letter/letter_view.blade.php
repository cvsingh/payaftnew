@extends('employee.user_master')
@section('user')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <div class="container-full">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
      <div class="row">

        <div class="col-12">

          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Letters List</h3>
              @if($current_user->usertype == 'tsk')
              <a href="{{ route('letters.add') }}" style="float:right;" class="btn btn-rounded btn-success mb-5">Add Letter</a>
              @endif
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th width="5%">Sl. No.</th>
                      <th>File No.</th>
                      <th>Subject</th>
                      <th>Type</th>
                      <th>Letter No.</th>
                      <th>Letter Date</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($allData as $key=> $letter)
                    <tr>
                      <td>{{ $key+1 }}</td>
                      <td>{{ $letter->file_no }}</td>
                      <td>{{ $letter->file_subject }}</td>
                      <td>{{ $letter->type_document }}</td>
                      <td>{{ $letter->letter_no }}</td>
                      <td>{{ $letter->letter_date }}</td>
                      <th>{{ $letter->status }}</th>
                    </tr>

                    @endforeach


                  </tbody>

                </table>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

  </div>
</div>
<!-- /.content-wrapper -->


@endsection
