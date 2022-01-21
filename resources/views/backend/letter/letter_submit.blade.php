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
                    <h4 class="box-title">Submit Letter to Higher Authority</h4>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('letter.submit_to_higher', $editData->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <input type="radio" id="radio_30" class="with-gap radio-col-primary" checked />
                                                <label for="radio_30">{{ $editData->type_document=="letter" ? "Letter" : "Note" }}</label>
                                            </div> <!-- End Col Md-12 -->
                                        </div> <!-- End Row -->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <h4 class="box-title">File No</h4>
                                                    <div class="controls">
                                                        <input type="text" name="letter_no" value="{{ $editData->file_no }}" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div> <!-- End Col Md-12 -->
                                        </div> <!-- End Row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h4 class="box-title">Letter / Office Note No </h4>
                                                    <div class="controls">
                                                        <input type="text" name="letter_no" value="{{ $editData->letter_no }}" class="form-control" readonly>
                                                    </div>
                                                </div>
                                            </div><!-- End Col Md-6 -->

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h4 class="box-title">Letter / Office Note Subject</h4>
                                                    <div class="controls">
                                                        <input type="text" name="letter_subject" class="form-control" value="{{ $editData->letter_subject }}" readonly>
                                                    </div>
                                                </div>
                                            </div><!-- End Col Md-6 -->
                                        </div> <!-- End Row -->

                                        <div class="row">
                                            <div class="col-md-6">
                                                <h4 class="box-title">Letter / Office Note Date </h4>
                                                <div class="controls">
                                                    <input class="form-control" type="date" name="letter_date" value="{{ $editData->letter_date }}" readonly>
                                                </div>
                                            </div> <!-- End Col Md-6 -->

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h4 class="box-title">Submit To</h4>
                                                    <div class="controls">
                                                        <select name="so_id" id="select" required="" class="form-control" aria-invalid="false">
                                                            <option value="" selected="" disabled="">Select Authority
                                                            </option>
                                                            @foreach ($users as $user)
                                                            @if ($user->usertype != 'PR')
                                                            <option value="{{ $user->id }}">
                                                                {{ $user->name }}
                                                            </option>
                                                            @elseif ($user->usertype == 'PR')
                                                            <option value="{{ $user->id }}">
                                                                PR
                                                            </option>
                                                            <option value="9999">
                                                                Close
                                                            </option>
                                                            @endif

                                                            @endforeach

                                                        </select>
                                                    </div>
                                                </div>
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
