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
             <h4 class="box-title">Add File</h4>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <div class="row">
               <div class="col">
                <form action="{{ route('files.store') }}" method="post">
                    @csrf
                     <div class="row">
                       <div class="col-12">	
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Section <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="section" id="select" required="" class="form-control" aria-invalid="false">
                                            <option value="" selected="" disabled="">Select Section</option>
                                            <option value="Admin-1">Admin-1</option>
                                            <option value="Admin-2">Admin-2</option>
                                        </select>
                                    </div>
                                </div>		
                            </div> <!-- End Col Md-6 -->

                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>File No <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="file_no" class="form-control" required="" > </div>
                                </div>
                            </div><!-- End Col Md-6 -->
                        </div> <!-- End Row -->

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5>Subject <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="subject" class="form-control" required="" > </div>
                                </div>
                            </div> <!-- End Col Md-6 -->

                            <div class="col-md-6">
                                
                            </div><!-- End Col Md-6 -->
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