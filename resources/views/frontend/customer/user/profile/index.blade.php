@extends('frontend.customer.dashboard')
@section('customer-content')
@section('title')
Profile Update
@endsection

<div class="container-full">

    <!-- Main content -->
    <section class="content">

      <div class="row">

        <div class="col-12">
          <div class="box">

            <div class="box-header">
                <h4 class="box-title">Update password</h4>
                <h6 class="box-title"></h6>
            </div>
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
            @endif

            <form action="{{ route('update_password') }}">
                @csrf
                <div class="box-body">
                    <div class="form-group row">
                        <label class="col-form-label col-md-2">New Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" name="new_password">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-form-label col-md-2">confirm Password</label>
                        <div class="col-md-10">
                            <input class="form-control" type="password" name="confirm_password">
                        </div>
                    </div>
                </div>
                <input class="form-control btn btn-info" type="submit" value="update password">
            </form>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
