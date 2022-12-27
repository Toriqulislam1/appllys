@extends('frontend.front_master')
@section('content')
@section('title')
Appllys Technologies
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<!--Start Hero-->
		<section class="hero-card-web mobile-app-" id="home">
			<div class="hero-main-rp container-fluid">
				<div class="row">
					<div class="col-lg-5 v-center">
						<div class="hero-heading-sec2 niwax" data-rellax-speed="3">
							<h1 class="wow fadeIn" data-wow-delay="0.2s">Top Rated Software Development Company</h1>
							<p class="wow fadeIn" data-wow-delay="0.4s">APPLLYS TECHNOLOGIES</p>
							<!--div class="content-sec  d-flex mt40 v-center text-w wow fadeIn" data-wow-delay="0.6s">
								<div class="mr25"><a href="#" class="btn-main bg-btn4 lnk">GET STARTED<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a></div>
								<div class="video-intro-pp v-center"><a class="video-link play-video" href="https://www.youtube.com/watch?v=SZEflIVnhH8?autoplay=1&amp;rel=0"><span class="triangle-play"></span></a></div>
								<div class="title-hero-oth v-center"><p>See live demo</p></div>
							</div-->
							<div class="awrd-sec text-w mt40 wow fadeIn" data-wow-delay="0.8s">
								<h5>Our Achievements</h5>
								<div class="bages-slider owl-carousel mt20">
									<div class="img-badge-"><a href="#"> <img src="{{ asset('frontend/assets/images/icons/badge1.png')}}" alt="niwax mobile app development company" class="img100w"></a> </div>
									<div class="img-badge-"><a href="#"> <img src="{{ asset('frontend/assets/images/icons/badge2.png')}}" alt="niwax mobile app development company" class="img100w"></a> </div>
									
									<div class="img-badge-"><a href="#"> <img src="{{ asset('frontend/assets/images/icons/badge4.png')}}" alt="niwax mobile app development company" class="img100w"></a> </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-7 v-center">
						<div class="app-hero-bnr wow fadeIn" data-wow-delay="0.4s"> <img src="{{ asset('frontend/assets/images/hero/project.svg')}}" alt="niwax mobile app development company" class="img-fluid"> </div>
					</div>
				</div>
			</div>
		</section>
		<!--End Hero-->
		
@php
$clients = App\Models\Client::orderBy('id','desc')->get();
@endphp
		<div class="weworkfor pt20 pb20 dark-bg2">
			<div class="container">
				<div class="logo-weworkfor owl-carousel">
				@foreach($clients as $item)
					<div class="items"><img src="{{ asset($item->client_logo)}}" alt="clients" class="img100w"></div>
				@endforeach
				</div>
			</div>
		</div>
		<!--Start About-->
		<section class="about-sec-app pad-tb pt60 dark-bg2" id="about">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="common-heading text-l">
							<h2 class="mb30"><span class="text-second text-bold">APPLLYS</span> App Development Company</h2>
							<!--p>Lorem Ipsum is text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p-->
							<!--p class="mt10"> <span class="text-bold">Lorem Ipsumis simply dummy text of the printing and typesetting industry. Simply dummy text of the printing and typesetting industry. </span></p-->
						</div>
						<div class="cta-card mt40">
							<h3 class="mb30">Let's Start a New Project Together</h3>
							<a href="#" class="btn-outline lnk">Request A Quote<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
						</div>
					</div>
					<div class="col-lg-6">
						<div class="funfact">
							<div class="row">
								<div class="col-lg-4 col-md-6 col-sm-12 col-6">
									<div class="funfct srcl1">
										<img src="{{ asset('frontend/assets/images/icons/startup.svg')}}" alt="niwax app development template">
										<span class="services-cuntr counter">20</span><span class="services-cuntr">+</span>
										<p>Years Experience</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 col-6">
									<div class="funfct srcl2">
										<img src="{{ asset('frontend/assets/images/icons/team.svg')}}" alt="niwax app development template">
										<span class="services-cuntr counter">50</span><span class="services-cuntr">+</span>
										<p>Talented Squad</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 col-6">
									<div class="funfct srcl3">
										<img src="{{ asset('frontend/assets/images/icons/mobile.svg')}}" alt="niwax app development template">
										<span class="services-cuntr counter">15</span><span class="services-cuntr">+</span>
										<p>Apps Developed</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 col-6">
									<div class="funfct srcl4">
										<img src="{{ asset('frontend/assets/images/icons/computers.svg')}}" alt="niwax app development template">
										<span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
										<p>Projects Delivered</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 col-6">
									<div class="funfct srcl5">
										<img src="{{ asset('frontend/assets/images/icons/world.svg')}}" alt="niwax app development template">
										<span class="services-cuntr counter">10</span><span class="services-cuntr">+</span>
										<p>Countries Served</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-12 col-6">
									<div class="funfct srcl1">
										<img src="{{ asset('frontend/assets/images/icons/deal.svg')}}" alt="niwax app development template">
										<span class="services-cuntr counter">100</span><span class="services-cuntr">%</span>
										<p>Client Satisfaction</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End About-->
		<!--Start Service-->
		<section class="service-section-app pad-tb dark-bg2" id="services">
			<div class="sctxt">App Development</div>
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-6">
						<div class="common-heading ptag">
							<span>Technology</span>
							<h2>We Solution With </h2>
							<!--p class="mb30">We think big and have hands in all leading technology platforms to provide you wide array of services.</p-->
						</div>
					</div>
				</div>
				<div class="row upset">
					<div class="col-lg-4 col-md-6 mt30 wow fadeIn" data-wow-delay="0.2s">
						<div class="service-card-app hoshd">
							<h4>App Development</h4>
							<ul class="-service-list mt10">
								<li> <a href="#">Android</a> </li>
								<li> <a href="#">IOS</a> </li>
								<li> <a href="#">Cross Platform</a> </li>
							</ul>
							<div class="tec-icon mt30">
								<ul class="servc-icon-sldr">
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/android.svg')}}" alt="img"></div> </a></li>
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/apple.svg')}}" alt="img"></div> </a></li>
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/tablet.svg')}}" alt="img"></div> </a></li>
								</ul>
							</div>
							<!--p class="mt20">Design and develop a creative website with our microscopic detailing and scrupulous strategies.</p-->
							<!--a href="javascript:void(0)" class="mt20 link-prbs">Read More <i class="fas fa fa-arrow-circle-right"></i></a-->
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt30 wow fadeIn" data-wow-delay="0.5s">
						<div class="service-card-app hoshd">
							<h4>Programming Language </h4>
							<ul class="-service-list mt10">
								<li> <a href="#">Python</a> </li>
								<li> <a href="#">PHP</a> </li>
								<li> <a href="#">Java</a> </li>
								<li> <a href="#">C++</a></li>
							</ul>
							<div class="tec-icon mt30">
								<ul class="servc-icon-sldr">
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/python.svg')}}" alt="img"></div></a></li>
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/php.svg')}}" alt="img"></div></a></li>
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/java.svg')}}" alt="img"></div></a></li>
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/c.svg')}}" alt="img"></div></a></li>
								</ul>
							</div>
						
							
						</div>
					</div>
					<div class="col-lg-4 col-md-6 mt30 wow fadeIn" data-wow-delay="0.8s">
						<div class="service-card-app hoshd">
							<h4>Populer Framework</h4>
							<ul class="-service-list mt10">
								<li> <a href="#">Magento</a> </li>
							
								<li> <a href="#">React</a></li>
								<li> <a href="#">Laravel</a> </li>
								<li> <a href="#">VUE JS</a> </li>
								<li> <a href="#">WordPress</a></li>
							</ul>
							<div class="tec-icon mt30">
								<ul class="servc-icon-sldr">
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/magento.svg')}}" alt="img"></div></a></li>
									
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/react.svg')}}" alt="img"></div></a></li>
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/laravel.svg')}}" alt="img"></div></a></li>
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/vue.svg')}}" alt="img"></div></a></li><br>
									<li><a href="#"><div class="img-iconbb"><img src="{{ asset('frontend/assets/images/icons/wordpress.svg')}}" alt="img"></div></a></li>
								</ul>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Service-->
		<!--why choose-->
		<section class="why-choos-lg pad-tb deep-dark">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="common-heading text-l">
							<span>Why Choose Us</span>
							<h2 class="mb20">Why The APPLLYS <span class="text-second text-bold">Ranked Top</span> Among The Leading Web & App Development Companies</h2>
							
							<div class="itm-media-object mt40 tilt-3d">
								<div class="media">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('frontend/assets/images/icons/computers.svg')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>Streamlined Project Management</h4>
										
									</div>
								</div>
								<div class="media mt40">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('frontend/assets/images/icons/worker.svg')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>A Dedicated Team of Experts</h4>
										
									</div>
								</div>
								<div class="media mt40">
									<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{ asset('frontend/assets/images/icons/deal.svg')}}" alt="icon" class="layer"></div>
									<div class="media-body">
										<h4>Completion of Project in Given Time</h4>
										
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6">
						<div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img src="{{ asset('frontend/assets/images/about/about-company.jpg')}}" alt="image" class="img-fluid"></div>
						<!--p class="text-center mt30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p-->
						<div class="cta-card mt60 text-center">
							<h3 class="mb20">Let's Start a  <span class="text-second text-bold">New Project</span> Together</h3>
							
							<a href="#" class="btn-outline lnk mt30" data-bs-toggle="modal" data-bs-target="#menu-popup">Request A Quote    <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End why choose-->
		<!--Start Process-->
  <section class="service-block pad-tb light-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading ptag">
            <span>Process</span>
            <h2>Our App Development Process</h2>
           
          </div>
        </div>
      </div>
      <div class="row upset justify-content-center mt60">
        <div class="col-lg-4 v-center order1">
          <div class="image-block1">
            <img src="{{ asset('frontend/assets/images/process/process-1.jpg')}}" alt="Process" class="img-fluid"/>
          </div>
        </div>
        <div class="col-lg-7 v-center order2">
          <div class="ps-block">
            <span>1</span>
            <h3>Requirement Gathering</h3>
            
          </div>
        </div>
      </div>
      <div class="row upset justify-content-center mt60">
        <div class="col-lg-7 v-center order2">
          <div class="ps-block">
            <span>2</span>
            <h3>Prototype</h3>
            
          </div>
        </div>
        <div class="col-lg-4 v-center order1">
          <div class="image-block1">
            <img src="{{ asset('frontend/assets/images/process/process-2.jpg')}}" alt="Process" class="img-fluid"/>
          </div>
        </div>
      </div>
      <div class="row upset justify-content-center mt60">
        <div class="col-lg-4 v-center order1">
          <div class="image-block1">
            <img src="{{ asset('frontend/assets/images/process/process-3.jpg')}}" alt="Process" class="img-fluid"/>
          </div>
        </div>
        <div class="col-lg-7 v-center order2">
          <div class="ps-block">
            <span>3</span>
            <h3>Deployment</h3>
            
          </div>
        </div>
      </div>
      <div class="row upset justify-content-center mt60">
        <div class="col-lg-7 v-center order2">
          <div class="ps-block">
            <span>4</span>
            <h3>Support & Maintenance</h3>
            
          </div>
        </div>
        <div class="col-lg-4 v-center order1">
          <div class="image-block1">
            <img src="{{ asset('frontend/assets/images/process/process-4.jpg')}}" alt="Process" class="img-fluid"/>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--End Process-->
		
		<!--Start Portfolio-->
		<section class="portfolio-section pad-tb" id="work">
			<div class="container">
				<div class="row justify-content-center ">
					<div class="col-lg-8">
						<div class="common-heading">
							<span>Our Work</span>
							<h2 class="mb20">Our Latest Creative Work</h2>
						</div>
					</div>
				</div>
				<div class="row">
@php
$portfolios = App\Models\Portfolio::orderBy('id','desc')->get();
@endphp
				
				@foreach($portfolios as $item)
					<div class="col-lg-4 col-sm-6 col mt40 wow fadeIn" data-wow-delay="0.2s">
						<div class="isotope_item up-hor">
							<div class="item-image">
								<a href="#"><img src="{{ asset($item->port_image)}}" alt="image" class="img-fluid" /> </a>
							</div>
							<div class="item-info-div shdo">
								<h4><a href="#">{{ $item->port_title}}</a></h4>
								<p>{{ $item->port_subtitle}}</p>
							</div>
						</div>
					</div>
					@endforeach
					
					
					
				</div>
			</div>
		</section>
		<!--End Portfolio-->
		<!--Start Clients-->
		<section class="clients-section-app pad-tb" id="clients">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading text-w">
							<span>Our happy customers</span>
							<h2 class="mb30">Some of our Clients</h2>
						</div>
					</div>
				</div>
				
				<div class="row">
@php
$clients = App\Models\Client::orderBy('id','desc')->get();
@endphp
					<div class="col-lg-12">
						<div class="client-logoset">
							<ul class="row text-center clearfix apppg">
							
							@foreach($clients as $item)
							<li class="col-lg-2 col-md-3 col-sm-4 col-6 mt30 wow fadeIn" data-wow-delay=".6s">
									<div class="brand-logo hoshd"><img src="{{ asset($item->client_logo)}}" alt="clients" class="img-fluid"></div>
									<p>{{ $item->client_title}}</p>
							</li>
								
							@endforeach
								
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Clients-->
		<!--Start Badges-->
		<!--section class="badges-section pad-tb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading w-tdxt">
							<span>WE MAKE RELATIONSHIPS</span>
							<h2>Ranked as #1 Top Web & App Development Companies</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".2s">
						<div class="badges-content">
							<img src="images/about/badges-a.png" alt="budges"  class="img-fluid">
							<p>ABC DEF Industry Leader</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".4s">
						<div class="badges-content">
							<img src="images/about/badges-b.png" alt="budges"  class="img-fluid">
							<p>Best eCommerce Development Company</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".6s">
						<div class="badges-content">
							<img src="images/about/badges-c.png" alt="budges"  class="img-fluid">
							<p>ABC DEF High Performer Winner</p>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-6 wow fadeIn" data-wow-delay=".8s">
						<div class="badges-content">
							<img src="images/about/badges-d.png" alt="budges"  class="img-fluid">
							<p>Top App Developer 2019-20</p>
						</div>
					</div>
				</div>
				<div class="-cta-btn mt70">
					<div class="free-cta-title v-center wow fadeInUp" data-wow-delay="1s">
						<p>We <span>Promise.</span> We <span>Deliver.</span></p>
						<a href="#" class="btn-main bg-btn2 lnk">Let's Work Together<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
					</div>
				</div>
			</div>
		</section-->
		<!--End Badges-->
		<!--Start work-category-->
		<section class="work-category pad-tb">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading ptag">
							<span>We Have Worked Across Multiple Industries</span>
							<h2>Industries We Serve</h2>
							
						</div>
					</div>
				</div>
				<div class="row mt30">
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/house.svg')}}" alt="img"> <h6>Real estate</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/travel-case.svg')}}" alt="img"> <h6>Tour &amp; Travels</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.5s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/video-tutorials.svg')}}" alt="img"> <h6>Education</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.7s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/taxi.svg')}}" alt="img"> <h6>Transport</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="0.9s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/event.svg')}}" alt="img"> <h6>Event</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/smartphone.svg')}}" alt="img"> <h6>eCommerce</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/joystick.svg')}}" alt="img"> <h6>Game</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.5s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/healthcare.svg')}}" alt="img"> <h6>Healthcare</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.7s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/money-growth.svg')}}" alt="img"> <h6>Finance</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="1.9s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/baker.svg')}}" alt="img"> <h6>Restaurant</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.1s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/mobile-app.svg')}}" alt="img"> <h6>On-Demand</h6> </div></div>
					<div class="col-lg-3 col-sm-6 col-6 wow fadeIn" data-wow-delay="2.3s"> <div class="industry-workfor hoshd"><img src="{{ asset('frontend/assets/images/icons/groceries.svg')}}" alt="img"> <h6>Grocery</h6> </div></div></div>
				</div>
			</section>
			<!--End  work-category-->
			<!--Start Testinomial-->
			<!--section class="testinomial-section-app bg-none pad-tb" id="review">
				<div class="container">
					<div class="row">
						<div class="col-lg-5">
							<div class="common-heading text-l">
								<span>What our clients say about Niwax.</span>
								<h2>Over 1200+ Satisfied Clients and Growing</h2>
							</div>
							<div class="review-title-ref mt40">
								<h4>Read More Reviews</h4>
							</div>
							<div class="row mt30 justify-content-center">
								<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".2s"><img src="images/about/reviews-icon-1.png" alt="review" class="img-fluid"></a>
								<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".4s"><img src="images/about/reviews-icon-2.png" alt="review" class="img-fluid"></a>
								<a href="#" target="blank" class="wow fadeIn col-lg-4 col-4" data-wow-delay=".6s"><img src="images/about/reviews-icon-3.png" alt="review" class="img-fluid"></a>
							</div>
						</div>
						<div class="col-lg-7">
							<div class="pl50">
								<div class="shape shape-a1"><img src="images/shape/shape-3.svg" alt="shape"></div>
								<div class="testimonial-card-a tcd owl-carousel">
									<div class="testimonial-card">
										<div class="tt-text">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="client-thumbs mt30">
											<div class="media v-center upset">
												<div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl" class="img-fluid rounded-circle" /></div>
												<div class="media-body user-info v-center">
													<h5>Mike Smith</h5>
													<p>Founder at Itawa Real eState</p>
													<i class="fas fa-quote-right posiqut"></i>
												</div>
											</div>
										</div>
									</div>
									<div class="testimonial-card">
										<div class="tt-text">
											<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
										</div>
										<div class="client-thumbs mt30">
											<div class="media v-center upset">
												<div class="user-image bdr-radius"><img src="images/user-thumb/girl.jpg" alt="girl" class="img-fluid rounded-circle" /></div>
												<div class="media-body user-info v-center">
													<h5>Mike Smith</h5>
													<p>Founder at Itawa Real eState</p>
													<i class="fas fa-quote-right posiqut"></i>
												</div>
											</div>
										</div>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section-->
			<!--End Testinomial-->
			<!--Start CTA-->
			
			<!--Start Team Members-->
  <section class="team pad-tb deep-dark">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="common-heading ptag">
            <span>We Are Awesome</span>
            <h2>Our Team Members</h2>
            <!--p class="mb0">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p-->
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="full-image-card hover-scale">
            <div class="image-div"><a href="#"><img src="{{ asset('frontend/assets/images/team/team.jpg')}}" alt="team" class="img-fluid"/></a></div>
            <div class="info-text-block">
              <h4><a href="#">Md Shahin Reza</a></h4>
              <p>CEO</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="full-image-card hover-scale">
            <div class="image-div"><a href="#"><img src="{{ asset('frontend/assets/images/team/t1.png')}}" alt="team" class="img-fluid"/></a></div>
            <div class="info-text-block">
              <h4><a href="#">Md Hasan Rahman</a></h4>
              <p>CTO</p>
            </div>
          </div>
        </div>
		<div class="col-lg-3 col-sm-6">
          <div class="full-image-card hover-scale">
            <div class="image-div"><a href="#"><img src="{{ asset('frontend/assets/images/team/t2.jpg')}}" alt="team" class="img-fluid"/></a></div>
            <div class="info-text-block">
              <h4><a href="#">Md Ronju Mia</a></h4>
              <p>Full Stack Developer</p>
            </div>
          </div>
        </div>
		<div class="col-lg-3 col-sm-6">
          <div class="full-image-card hover-scale">
            <div class="image-div"><a href="#"><img src="{{ asset('frontend/assets/images/team/t3.png')}}" alt="team" class="img-fluid"/></a></div>
            <div class="info-text-block">
              <h4><a href="#">Mehedi Hasan</a></h4>
              <p>Backend Developer</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="full-image-card hover-scale">
            <div class="image-div"><a href="#"><img src="{{ asset('frontend/assets/images/team/akash.png')}}" alt="team" class="img-fluid"/></a></div>
            <div class="info-text-block">
              <h4><a href="#">Akashur Rahman</a></h4>
              <p>Head Of Marketing</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="full-image-card hover-scale">
            <div class="image-div"><a href="#"><img src="{{ asset('frontend/assets/images/team/rony.jpg')}}" alt="team" class="img-fluid"/></a></div>
            <div class="info-text-block">
              <h4><a href="#">Md Saidul Islam Khan</a></h4>
              <p>Sales Excutive</p>
            </div>
          </div>
        </div>
     
     
    
      </div>
    </div>
  </section>
  <!--End Team Members-->
			
			<section class="app-cta pad-tb">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="common-heading text-w">
								<span>Let's work together</span>
								<h2>We Love to Listen to Your Requirements</h2>
								<a href="#" class="btn-main bg-btn4 lnk" data-bs-toggle="modal" data-bs-target="#menu-popup">GET STARTED<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
								
								<p class="cta-call">Or call us now <a href="tel:+8801982181819"><i class="fas fa-phone-alt"></i> +8801982181819</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="shape shape-c1"></div>
				<div class="shape shape-c2"></div>
				<div class="shape shape-c3"></div>
			</section>
			<!--End CTA-->
			<!--Start Location-->
			<!--section class="our-office pad-tb">
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="common-heading">
								<span>Our Locations</span>
								<h2>Our Office</h2>
							</div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay=".2s">
							<div class="office-card hoshd">
								<div class="landscp">
									<img src="images/location/india-img.png" alt="location" class="img-fluid" />
								</div>
								<div class="info-text-div">
									<h4>India</h4>
									<h6 class="mt10">Registered Office</h6>
									<p>232, 21st East Street, Kamaraj Nagar, Jaipur, Rajasthan 303030</p>
									<ul class="-address-list mt10">
										<li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i> info@businessname.com</a></li>
										<li><a href="tel:+10000000000"><i class="fas fa-phone-alt"></i> +1 0000 000 000</a> </li>
									</ul>
									
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay=".4s">
							<div class="office-card hoshd">
								<div class="landscp">
									<img src="images/location/italy.png" alt="location" class="img-fluid" />
								</div>
								<div class="info-text-div">
									<h4>Italy</h4>
									<h6 class="mt10">Registered Office</h6>
									<p>9988 Piazzetta Scalette Rubiani 99, Rome, 84090</p>
									<ul class="-address-list mt10">
										<li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i> info@businessname.com</a></li>
										<li><a href="tel:+10000000000"><i class="fas fa-phone-alt"></i> +1 0000 000 000</a> </li>
									</ul>
									
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 shape-loc wow fadeIn" data-wow-delay=".6s">
							<div class="office-card hoshd">
								<div class="landscp">
									<img src="images/location/paris.png" alt="location" class="img-fluid" />
								</div>
								<div class="info-text-div">
									<h4>Paris</h4>
									<h6 class="mt10">Registered Office</h6>
									<p>603 FA Forest Avenue, New York, USA 10021</p>
									<ul class="-address-list mt10">
										<li><a href="mailto:info@businessname.com"><i class="fas fa-envelope"></i> info@businessname.com</a></li>
										<li><a href="tel:+10000000000"><i class="fas fa-phone-alt"></i> +1 0000 000 000</a> </li>
									</ul>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</section-->
			<!--End Location-->


		  <!--Start Blog Grid-->
  <section class="blog-page pad-tb pt40">
    <div class="container">
      <div class="row">
	  <div class="row justify-content-center">
					<div class="col-lg-8">
						<div class="common-heading ptag">
							
							<h2>Our latest News</h2>
							
						</div>
					</div>
				</div>
	  @php
$blogs = App\Models\Blog::orderBy('id','desc')->limit(4)->get();
@endphp

	  @foreach($blogs as $item)
        <div class="col-lg-3 col-sm-6 single-card-item">
          <div class="isotope_item hover-scale">
            <div class="item-image">
              <a href="{{ route('view-blog',$item->id) }}"><img src="{{ asset($item->blog_photo)}}" alt="blog" class="img-fluid"/> </a>
             
            </div>  
            <div class="item-info blog-info">
              <div class="entry-blog">
               
                <span class="posted-on">
                <a href="#"><i class="fas fa-clock"></i>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</a>
                </span>
                <span><a href="#"><i class="far fa-eye"></i>{{ $item->views}}</a></span>
              </div>
              <h4><a href="{{ route('view-blog',$item->id) }}">{{ $item->blog_title}}</a></h4>
              <p>{!! Str::limit($item->blog_description, 50)  !!}</p>
            </div>
          </div>
        </div>

		@endforeach
     
     
        
      
      </div>
    </div>
	<div class="row">
        <div class="col-lg-12 maga-btn mt60">
          <a href="{{route('all-blog')}}" class="btn-outline">View More News<i class="fas fa-chevron-right fa-icon"></i></a>
        </div>
      </div>
  </section>
  <!--End Blog Grid-->


   @endsection