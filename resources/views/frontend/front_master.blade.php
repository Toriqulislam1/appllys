<!DOCTYPE html>
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8"/>
    <title>@yield('title')</title>
    <meta name="description" content="Creative Agency, Marketing Agency Template">
    <meta name="keywords" content="Creative Agency, Marketing Agency">
    <meta name="author" content="rajesh-doot">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#101010">
    <!--website-favicon-->

    @php
$favicon = App\Models\favicon::find(1);
@endphp
    <link href="{{ asset($favicon->fav) }}" rel="icon">
    <!--plugin-css-->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/plugin.min.css')}}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- template-style-->
    <link href="{{ asset('frontend/assets/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/darkmode.css')}}" rel="stylesheet">
  </head>
  <body class="active-dark">
  	 <!--Start Preloader -->
 <!--div class="onloadpage" id="page_loader">
	<div class="pre-content">
	   <div class="logo-pre"><img src="images/logo.png" alt="Logo" class="img-fluid" /></div>
	   <div class="pre-text- text-radius text-light text-animation bg-b">Niwax - Creative Agency & Portfolio HTML Template Are 2 Seconds Away. Have Patience</div>
	</div>
 </div-->
 <!--End Preloader -->
 
 @include('frontend.body.header')
 <!--End Header -->

 @yield('content')


 @include('frontend.body.footer')
<!-- js placed at the end of the document so the pages load faster -->
<script src="{{ asset('frontend/assets/js/vendor/modernizr-3.5.0.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.bundle.min.js')}}"></script> 
<script src="{{ asset('frontend/assets/js/plugin.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/Preloader.js')}}"></script>
<!--common script file-->
<script src="{{ asset('frontend/assets/js/main.js')}}"></script>
</body>
</html>