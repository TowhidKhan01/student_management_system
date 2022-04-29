@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<div class="content-wrapper">
    <div class="container-full">
        <section class="content">

            <!-- Basic Forms -->
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Add Fee Amount</h4>
                    <!-- <h6 class="box-subtitle">Bootstrap Form Validation check the <a class="text-warning" href="http://reactiveraven.github.io/jqBootstrapValidation/">official website </a></h6> -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="row">
                        <div class="col">

                            <form method="post" action="{{route('store.fee.amount')}}">
                                @csrf

                                <div class="row">
                                    <div class="col-12">

                                        <div class="add_item">

                                            <div class="form-group">
                                                <h5>Fee Category <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <select name="fee_category_id" class="form-control">
                                                        <option value="" selected="" disabled="">Select Fee Category</option>
                                                        @foreach( $fee_categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                        @endforeach



                                                    </select>

                                                </div>
                                            </div>
                                            <!-- From group end-->
                                            <div class="row">

                                                <!-- col-md-5 start -->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <h5>Student Class <span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <select name="class_id[]" class="form-control">
                                                                <option value="" selected="" disabled="">Select Student Class</option>
                                                                @foreach( $classes as $class)
                                                                <option value="{{$class->id}}">{{$class->name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- end col-md-5 -->
                                                <div class="col-md-5">
                                                    <div class="form-group">
                                                        <h5>Amount<span class="text-danger">*</span></h5>
                                                        <div class="controls">
                                                            <input type="text" name="amount[]" required class="form-control">

                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- end col-md-5 -->
                                                <div class="col-md-2" style="padding-top: 25px;">
                                                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                                                </div>
                                            </div>

                                            <!-- row end -->

                                            <!-- 2nd Row -->
                                        </div>
                                        <!-- end add_item -->
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

<div style="visibility: hidden;">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="from row">
                <div class="col-md-5">
                    <div class="form-group">
                        <h5>Student Class <span class="text-danger">*</span></h5>
                        <div class="controls">
                            <select name="class_id[]" class="form-control">
                                <option value="" selected="" disabled="">Select Student Class</option>
                                @foreach( $classes as $class)
                                <option value="{{$class->id}}">{{$class->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <!-- end col-md-5 -->
                <div class="col-md-5">
                    <div class="form-group">
                        <h5>Amount<span class="text-danger">*</span></h5>
                        <div class="controls">
                            <input type="text" name="amount[]" required class="form-control">

                        </div>
                    </div>
                </div>
                <!-- end col-md-5 -->
                <div class="col-md-2" style="padding: 25px;">
                    <span class="btn btn-success addeventmore"><i class="fa fa-plus-circle"></i></span>
                    <span class="btn btn-danger removeventmore"><i class="fa fa-minus-circle"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        var counter = 0;
        $(document).on("click", ".addeventmore", function() {
            var whole_extra_item_add = $('#whole_extra_item_add').html();
            $(this).closest(".add_item").append(whole_extra_item_add);
            counter++;
        });

        $(document).on("click", '.removeventmore', function() {
            $(this).closest(".delete_whole_extra_item_add").remove();
            counter-=1;

        });

    });
</script>

@endsection