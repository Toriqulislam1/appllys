@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div class="container-full">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <!-- Basic Forms -->
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Add Product </h4>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col">

                        <form method="POST" action="{{ route('product-store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <!-- start 1nd row  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Product Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" required="">
                                                    @error('name')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Product Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="main_image" class="form-control">
                                                    @error('image')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <img src="">
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                    </div> <!-- end 1nd row  -->
                                    <div class="row">
                                        <!-- start 2nd row  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Product price <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="price" class="form-control" required="">
                                                    @error('price')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>purchase Product <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="purchase" class="form-control">
                                                    @error('purchase')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <img src="">
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                    </div> <!-- end 2nd row  -->
                                    <div class="row">
                                        <!-- start 3nd row  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Live demo link <span class="demo">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="demo" class="form-control" required="">
                                                    @error('demo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5> Product create date <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="create_date" class="form-control">
                                                    @error('create_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <img src="">
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                    </div> <!-- end 3nd row  -->
                                    <div class="row">
                                        <!-- start 4nd row  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5> Last Update date<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="date" name="Update_date" class="form-control"
                                                        required="">
                                                    @error('Update_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5> Yearly Charge<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="number" name="yearly_charge" class="form-control"
                                                        required="">
                                                    @error('Update_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                    </div> <!-- end 4nd row  -->
                                    <div class="row">
                                        <!-- start 5nd row  -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5> Product technology <span class="text-danger">*</span></h5>
                                                <div class="tags-default">
                                                    <div class="bootstrap-tagsinput">
                                                        <input type="text" name="technology" value="Lorem,Ipsum,Amet"
                                                            data-role="tagsinput" placeholder="add tags"
                                                            style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5> Product tag <span class="text-danger">*</span></h5>
                                                <div class="tags-default">
                                                    <div class="bootstrap-tagsinput">
                                                        <input type="text" name="tag" value="Lorem,Ipsum,Amet"
                                                            data-role="tagsinput" placeholder="add tags"
                                                            style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                    </div> <!-- end 5nd row  -->
                                    <div class="row">
                                        <!-- start 6th row  -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Product Title <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="title" class="form-control" required="">
                                                    @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Product Thumbnail Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="thamble" class="form-control" required="">
                                                    @error('thamble')
                                                    <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <img src="">
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <h5>Short Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input name="short" class="form-control" required>
                                                </div>
                                            </div>
                                        </div> <!-- end col md 6 -->
                                    </div> <!-- end 6th row  -->
                                    <div class="row">
                                        <!-- start 7th row  -->
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <h5>Long Description <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <textarea id="editor2" name="long_desp" rows="10"
                                                        cols="80"></textarea>
                                                </div>
                                            </div>
                                        </div> <!-- end col md 12 -->
                                    </div> <!-- end 7th row  -->
                                    <hr>
                                    <div class="row">
                                        <div class="text-lg-center">
                                            <input type="submit" class="btn btn-primary  " value="Add Product">
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
<script type="text/javascript">
    $(document).ready(function() {
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ url('/category/subcategory/ajax') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="childcategory_id"]').html('');
                            var d = $('select[name="subcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="subcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .subcategory_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
            $('select[name="subcategory_id"]').on('change', function() {
                var subcategory_id = $(this).val();
                if (subcategory_id) {
                    $.ajax({
                        url: "{{ url('/category/childcategory/ajax') }}/" + subcategory_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            var d = $('select[name="childcategory_id"]').empty();
                            $.each(data, function(key, value) {
                                $('select[name="childcategory_id"]').append(
                                    '<option value="' + value.id + '">' + value
                                    .childcategory_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });

        });
</script>

<script type="text/javascript">
    function mainThamUrl(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#mainThmb').attr('src', e.target.result).width(80).height(80);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>
@endsection
