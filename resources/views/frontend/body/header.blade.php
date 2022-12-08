

<!--Start Header -->

<header class="nav-bg-w main-header navfix navbar menu-white">
         <div class="container-fluid m-pad">
@php
$setting = App\Models\Setting::find(1);
@endphp
				<div class="menu-header">
				   <div class="dsk-logo"><a class="nav-brand" href="{{ url('/') }}">
					  <img src="{{ asset($setting->logo) }}" alt="Logo" class="mega-white-logo"/>
					  <img src="{{ asset($setting->logo) }}" alt="Logo" class="mega-darks-logo"/>
					  </a>
				   </div>
				   <div class="custom-nav" role="navigation">
					  <ul class="nav-list">
						 <li class="sbmenu">
							<a href="{{ url('/')}}" class="menu-links">HOME</a>
							<div class="nx-dropdown">
							   
						 </li>
						

		<!--   // Get Category Table Data -->
		@php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp


						@foreach($categories as $category)
						 <li class="sbmenu">
							<a href="{{ url('service/'.$category->slug) }}" class="menu-links">{{ $category->category_name}}</a>
							
						 </li>
						
						 @endforeach

						 <!--li class="sbmenu">
							<a href="{{ route('digital-marketing')}}" class="menu-links">DIGITAL MARKETING</a>
							<div class="nx-dropdown">
							   
						 </li-->

						 <!--li class="sbmenu">
							<a href="{{ route('all-portfolios')}}" class="menu-links">PORTFOLIOS</a>
							<div class="nx-dropdown">
							   
						 </li-->
						
						 <!--li class="sbmenu">
							<a href="{{ route('all-clients')}}" class="menu-links">CLIENTS</a>
							<div class="nx-dropdown">
							   
						 </li-->
						 
						 <li class="sbmenu">
							<a href="{{ route('about-us')}}" class="menu-links">ABOUT US</a>
							<div class="nx-dropdown">
							   
						 </li>
						 <li class="sbmenu">
							<a href="{{ route('contact-us')}}" class="menu-links">CONTACT US</a>
							<div class="nx-dropdown">
							   
						 </li>
						 <!--li class="sbmenu">
							<a href="{{ route('all-blog')}}" class="menu-links">BLOGS</a>
							<div class="nx-dropdown">
							   
						 </li-->
						
						 <li><a href="get-quote.html" class="btn-br bg-btn5 btshad-b2 lnk" data-bs-toggle="modal" data-bs-target="#menu-popup"><strong>Book Appointment </strong> <span class="circle"></span></a> </li>
              </ul>
              <!-- mobile + desktop - sidebar menu- dark mode witch and button -->
                                  
              
             
				
             
                        
              
         
          </div>
		  <div class="mobile-menu2">
					<ul class="mob-nav2">
						<li><a href="#" class="btn-round- trngl btn-br bg-btn btshad-b1"  data-bs-toggle="modal" data-bs-target="#menu-popup"><i class="fas fa-envelope-open-text"></i></a></li>
						<li class="navm-"> <a class="toggle" href="#"><span></span></a></li>
					</ul>
				</div>
        </div>
	
				<!--Mobile Menu-->
				<nav id="main-nav">
				   <ul class="first-nav">
					  <li>
					  <a href="{{ url('/')}}" class="menu-links">HOME</a>
						
					  </li>
					  <!--   // Get Category Table Data -->
		@php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp


						@foreach($categories as $category)
						 <li class="sbmenu">
							<a href="{{ url('service/'.$category->slug) }}" class="menu-links">{{ $category->category_name}}</a>
							
						 </li>
						
						 @endforeach

						 
						 
						 <li class="sbmenu">
							<a href="{{ route('contact-us')}}" class="menu-links">CONTACT US</a>
							<div class="nx-dropdown">
							   
						 </li>
						 
						 
						 <li class="sbmenu">
							<a href="{{ route('about-us')}}" class="menu-links">ABOUT US</a>
							<div class="nx-dropdown">
						 </li>
					  </li>
				   </ul>
				  
				</nav>
			 </div>
		  </header>       
		  <!--End Header -->
		  		<!--Mobile contact-->
<div class="popup-modal1">
<div class="modal" id="menu-popup">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<div class="common-heading">
<h4 class="mt0 mb0"> Input Details </h4>
</div>
<button type="button" class="closes" data-bs-dismiss="modal">&times;</button></div>
<!-- Modal body -->
<div class="modal-body">
<div class="form-block fdgn2 mt10 mb10">
<form action="{{ route('contact-form')}}" method="post" name="feedback-form">
	@csrf
<div class="fieldsets row">
<div class="col-md-12"><input type="text" placeholder="Full Name" name="full_name"></div>
<div class="col-md-12"><input type="email" placeholder="Email Address" name="email_address"></div>
<div class="col-md-12"><input type="number" placeholder="Contact Number" name="mobile"></div>
<div class="col-md-12"><input type="text" placeholder="Subject" name="subject"></div>
<div class="col-md-12"><textarea placeholder="Message" name="message"></textarea></div>
</div>
<div class="fieldsets mt20 pb20">
<button type="submit" name="submit" class="lnk btn-main bg-btn" data-bs-dismiss="modal">Submit <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
<!--Mobile contact-->