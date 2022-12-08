@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="container-full">

	 <section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title"> Favicon Update </h4>
			  
			</div>
			
	<!-- /.box-header -->
	<div class="box-body">
			  <div class="row">
				<div class="col-12">
	 <form method="post" action="{{ route('fav-update') }}" enctype="multipart/form-data">
	 	@csrf

	 	<input type="hidden" name="id" value="{{ $favicon->id }}">
					  <div class="row">
						<div class="col-12">

			<div class="row">
				<div class="col-md-6">

	 <div class="form-group">
		<h5>Favicon Icon Update  <span class="text-danger"> </span></h5>
		<div class="controls">
	 <input type="file" name="fav" class="form-control"  > </div>
	 
	</div>




	
	
	
	

					
				</div> <!-- end cold md 6 --> 
				
			</div>	<!-- end row 	 -->	

 
	  

			 <div class="text-xs-right">
	<input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">					 
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

	  <script type="text/javascript">
	function mainThamUrl(input){
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e){
				$('#mainThmb').attr('src',e.target.result).width(80).height(80);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}	
</script>

 

@endsection