@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Manage Profile</h4>
                    <!-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{route('profile.store')}}" enctype="multipart/form-data">
                                @csrf

                                <div class="row">
                                    <div class="col-12">

                                        <!-- 1st Row -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>User Name <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" value="{{ $editData->name}}" required="">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>User Email <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" class="form-control" value="{{ $editData->email}}" required="">

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col-6-md-6 end -->
                                        </div>

                                        <!-- row end -->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>User Mobile <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="mobile" class="form-control" value="{{ $editData->mobile}}" required="">

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>User Address <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="address" class="form-control" value="{{ $editData->address}}" required="">

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- col-6-md-6 end -->
                                        </div>


                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>User gender <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <select name="gender" id="gender" class="form-control">
                                                            <option value="" selected="" disabled>Select Gender</option>

                                                            <option value="Male" {{ ($editData->gender =="Male" ?"selected": "")}}>Male</option>
                                                            <option value="Female" {{ ($editData->gender =="Female" ?"selected": "")}}>Female</option>

                                                        </select>

                                                    </div>
                                                </div>

                                            </div>

                                            <!-- Col-6 end -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <h5>Profile image <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="file" name="image" class="form-control" id="image">

                                                    </div>
                                                </div>
                                                <!-- Add image preview -->

                                                <!-- <div class="form-group">
                                            
                                                    <div class="controls">
                                                        <img id="showImage" src="{{(!empty($user->image))? url('upload/user_images/'.$user->image): url('upload/no_image.jpg')}}" alt="">

                                                    </div>
                                                </div> -->


                                                 <!-- Add image preview -->
                                            </div>
                                            <!-- col-6-md-6 end -->
                                        </div>
                                        <!-- row end -->
                                        <div class="text-xs-right">
                                            <!-- <button type="submit" class="btn btn-rounded btn-info">Submit</button> -->
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

    </div>
</div>



@endsection