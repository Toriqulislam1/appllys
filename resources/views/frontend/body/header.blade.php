<style>
 .dropup, .dropright, .dropdown, .dropleft {
    position: relative;
}

.navbar-tool {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
}

.czi-user::before {
    content: "\e98d";
}


.ml-3, .mx-3 {
    margin-left: 1rem !important;
}


.navbar-light .navbar-tool-icon-box.bg-secondary {
    background-color: #f3f5f9 !important;
}
.navbar-light .navbar-tool-icon-box {
    color: #ec6632;
}
.navbar-light .navbar-tool-icon-box {
    color: #4b566b;
}
.bg-secondary {
    background-color: #f6f9fc !important;
}
.navbar-tool-icon-box {
    position: relative;
    width: 2.875rem;
    height: 2.875rem;
    transition: color 0.25s ease-in-out;
    border-radius: 50%;
    line-height: 2.625rem;
    text-align: center;
}
.bg-secondary {
    background-color: #f3f5f9 !important;
}

.navbar-light .navbar-tool-icon-box.bg-secondary {
    background-color: #f3f5f9 !important;
}
.navbar-light .navbar-tool-icon-box {
    color: #ec6632;
}
.navbar-light .navbar-tool-icon-box {
    color: #4b566b;
}
.bg-secondary {
    background-color: #f6f9fc !important;
}
.navbar-tool-icon-box {
    position: relative;
    width: 2.875rem;
    height: 2.875rem;
    transition: color 0.25s ease-in-out;
    border-radius: 50%;
    line-height: 2.625rem;
    text-align: center;
}

.bg-secondary {
    background-color: #f3f5f9 !important;
}

.navbar-tool-icon {
    font-size: 1.25rem;
    line-height: 2.875rem;
}

.czi{
    display: inline-block;
    font-family: 'sixvalley-icons' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
}


.czi-user::before {
    content: "\e98d";
}
*, *::before, *::after {
    box-sizing: border-box;
}
.navbar-tool-icon {
    font-size: 1.25rem;
    line-height: 2.875rem;
}
[class^="czi-"], [class*=" czi-"] {
    display: inline-block;
    font-family: 'sixvalley-icons' !important;
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: 1;
}












</style>

@php
$setting = App\Models\Setting::find(1);
@endphp
 <!--Start Preloader -->
	<div class="onloadpage" id="page_loader">
		<div class="pre-content">
		   <div class="logo-pre"><img src="{{ asset($setting->logo) }}" alt="Logo" class="img-fluid" /></div>
		   <div class="pre-text- text-radius text-light text-animation bg-b">Appllys Technologies</div>
		</div>
	 </div>
	<!--End Preloader -->

	<!--Start Header -->
	<header class="nav-bg-b main-header navfix fixed-top menu-dark" style="background: #4201B1">
		<div class="container-fluid m-pad">
			<div class="menu-header">
				<div class="dsk-logo"><a class="nav-brand" href="{{ url('/')}}">
					<img src="{{ asset($setting->logo) }}" alt="Logo" class="mega-white-logo"/>
					<img src="{{ asset($setting->logo) }}" alt="Logo" class="mega-darks-logo"/>
				</a></div>
				<div class="custom-nav" role="navigation">
					<ul class="nav-list onepge">
						<li><a href="{{ url('/')}}" class="menu-links">Home</a></li>

						{{-- <li><a href="" target="_blank" class="menu-links">Sing UP</a></li> --}}

						<li><a href="{{ route('ready.software') }}" target="_blank" class="menu-links">Ready Software</a></li>
				<!--   // Get Category Table Data -->
		@php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp


						@foreach($categories as $category)
						 <li class="sbmenu">
							<a href="{{ route('all-services')}}" class="menu-links">{{ $category->category_name}}</a>
							<div class="nx-dropdown">
							   <div class="sub-menu-section">
								  <div class="container">
								  	<div class="col-md-12">
									 <div class="sub-menu-center-block">


									 @php
							$subcategories = App\Models\subcategory::where('category_id',$category->id)->orderBy('subcategory_name','DESC')->get();
							@endphp

							@foreach($subcategories as $subcategory)

							<div class="sub-menu-column">

						<a href="{{ url('/services/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">
							<div class="menuheading">{{ $subcategory->subcategory_name}}</div> </a>



							<!--   // Get SubCategory Table Data -->
							@php
							$childcategories = App\Models\Childcategory::where('subcategory_id',$subcategory->id)->orderBy('childcategory_name','DESC')->get();
							@endphp

							@foreach($childcategories as $childcategory)


									<ul>



									  <li><a href="{{ url('/childcategory/services/'.$childcategory->id.'/'.$childcategory->childcategory_slug) }}">{{ $childcategory->childcategory_name}}</a></li>

									</ul>
									@endforeach
							</div>

							@endforeach

									</div>
									 </div>
								  </div>
							   </div>
							</div>
						 </li>

						 @endforeach

						 <li class="sbmenu">
							<a href="{{ route('all-portfolios')}}" class="menu-links">PORTFOLIO</a>
							<div class="nx-dropdown">

						 </li>
						{{-- <li><a href="{{ route('all-clients')}}" class="menu-links">Clients</a></li> --}}
						<li><a href="{{ route('about-us')}}" class="menu-links">About</a></li>
						<li><a href="{{ route('contact-us')}}" class="menu-links">Contact</a></li>
						{{-- <li><a href="{{ route('cart-view')}}" class="menu-links">Cart</a></li> --}}
						{{-- <li><a href="get-quote.html" class="btn-br bg-btn5 btshad-b2 lnk" data-bs-toggle="modal" data-bs-target="#menu-popup">Request A Project <span class="circle"></span></a> </li> --}}



                         <li>
                        <div class="dropdown">
                            <a class="navbar-tool ml-3" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div class="navbar-tool-icon-box bg-secondary">

                                    <div class="navbar-tool-icon-box bg-secondary">
                                        <i class="fa fa-user-circle mr-2"></i>
                                    </div>
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuButton" style="text-align: left;">
                                <a class="dropdown-item" href="{{ route('login.customer') }}">
                                    <i class="fa fa-sign-in" aria-hidden="true"></i> Sign in
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('signup.view') }}">
                                    <i class="fa fa-user-circle mr-2"></i>Sign up
                                </a>
                            </div>
                        </div>
                    </li>
					</ul>
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

						<li><a href="{{ url('/')}}" class="menu-links">Home</a></li>
						<li><a href="https://blog.appllys.com/" target="_blank" class="menu-links">Smart School</a></li>
						<li><a href="#" terget="_blank" class="menu-links">Ready Software</a></li>
				<!--   // Get Category Table Data -->
		@php
		$categories = App\Models\Category::orderBy('category_name','DESC')->get();
		@endphp


						@foreach($categories as $category)
						 <li class="sbmenu">
							<a href="{{ route('all-services')}}" class="menu-links">{{ $category->category_name}}</a>
							<div class="nx-dropdown">
							   <div class="sub-menu-section">
								  <div class="container">
								  	<div class="col-md-12">
									 <div class="sub-menu-center-block">


									 @php
							$subcategories = App\Models\subcategory::where('category_id',$category->id)->orderBy('subcategory_name','DESC')->get();
							@endphp

							@foreach($subcategories as $subcategory)

							<div class="sub-menu-column">

						<a href="{{ url('/services/subcategory/'.$subcategory->id.'/'.$subcategory->subcategory_slug) }}">
							<div class="menuheading">{{ $subcategory->subcategory_name}}</div> </a>



							<!--   // Get SubCategory Table Data -->
							@php
							$childcategories = App\Models\Childcategory::where('subcategory_id',$subcategory->id)->orderBy('childcategory_name','DESC')->get();
							@endphp

							@foreach($childcategories as $childcategory)


									<ul>



									  <li><a href="{{ url('/childcategory/services/'.$childcategory->id.'/'.$childcategory->childcategory_slug) }}">{{ $childcategory->childcategory_name}}</a></li>

									</ul>
									@endforeach
							</div>

							@endforeach

									</div>
									 </div>
								  </div>
							   </div>
							</div>
						 </li>

						 @endforeach

						 <li class="sbmenu">
							<a href="{{ route('all-portfolios')}}" class="menu-links">PORTFOLIOS</a>
							<div class="nx-dropdown">

						 </li>
						{{-- <li><a href="{{ route('all-clients')}}" class="menu-links">Clients</a></li> --}}
						<li><a href="{{ route('about-us')}}" class="menu-links">About</a></li>
						<li><a href="{{ route('about-us')}}" class="menu-links">Cart</a></li>
						<li><a href="get-quote.html" class="btn-br bg-btn5 btshad-b2 lnk" data-bs-toggle="modal" data-bs-target="#menu-popup">Request A Project <span class="circle"></span></a> </li>

				</ul>
				<ul class="bottom-nav">
					<li class="prb">
						<a href="tel:+8801738214668">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 384">
								<path d="M353.188,252.052c-23.51,0-46.594-3.677-68.469-10.906c-10.719-3.656-23.896-0.302-30.438,6.417l-43.177,32.594
								c-50.073-26.729-80.917-57.563-107.281-107.26l31.635-42.052c8.219-8.208,11.167-20.198,7.635-31.448
								c-7.26-21.99-10.948-45.063-10.948-68.583C132.146,13.823,118.323,0,101.333,0H30.813C13.823,0,0,13.823,0,30.813
								C0,225.563,158.438,384,353.188,384c16.99,0,30.813-13.823,30.813-30.813v-70.323C384,265.875,370.177,252.052,353.188,252.052z"
								/>
							</svg>
						</a>
					</li>
					<li class="prb">
						<a href="mailto:contact@appllys.com">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/><path d="M0 0h24v24H0z" fill="none"/></svg>
						</a>
					</li>
					<li class="prb">
						<a href="skype:niwax.company?call">
							<svg enable-background="new 0 0 24 24" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg"><path d="m23.309 14.547c1.738-7.81-5.104-14.905-13.139-13.543-4.362-2.707-10.17.352-10.17 5.542 0 1.207.333 2.337.912 3.311-1.615 7.828 5.283 14.821 13.311 13.366 5.675 3.001 11.946-2.984 9.086-8.676zm-7.638 4.71c-2.108.867-5.577.872-7.676-.227-2.993-1.596-3.525-5.189-.943-5.189 1.946 0 1.33 2.269 3.295 3.194.902.417 2.841.46 3.968-.3 1.113-.745 1.011-1.917.406-2.477-1.603-1.48-6.19-.892-8.287-3.483-.911-1.124-1.083-3.107.037-4.545 1.952-2.512 7.68-2.665 10.143-.768 2.274 1.76 1.66 4.096-.175 4.096-2.207 0-1.047-2.888-4.61-2.888-2.583 0-3.599 1.837-1.78 2.731 2.466 1.225 8.75.816 8.75 5.603-.005 1.992-1.226 3.477-3.128 4.253z"/></svg>
						</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
		  		<!--Mobile contact-->
<div class="popup-modal1">
<div class="modal" id="menu-popup">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<div class="common-heading">
<h4 class="mt0 mb0"> Project Details </h4>
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
