@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Student Shift</h4>
                    <!-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{route('store.student.shift')}}">
                                @csrf

                                <div class="row">
                                    <div class="col-12">


                                        <!-- row end -->
                                        <!-- 2nd Row -->

                                        <div class="form-group">
                                            <h5>Studnet Shift Name <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="name" required class="form-control">
                                                @error('')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>
                                        </div>



                                       
                                 



                                        <div class="text-xs-right">
                                            <!-- <button type="submit" class="btn btn-rounded btn-info">Submit</button> -->
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

    </div>
</div>



@endsection