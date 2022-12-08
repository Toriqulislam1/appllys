@extends('frontend.front_master')
@section('content')
@section('title')
Laser Skin
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>



<!--Start Hero-->
<section class="hero-card-web bg-gradient12 shape-bg3">
<div class="hero-main-rp container-fluid">
<div class="row">
<div class="col-lg-5">
<div class="hero-heading-sec">
<h2 class="wow fadeIn" data-wow-delay="0.3s"> <span>Popular</span> <span>Skin Laser</span> <span>Services in Dhaka</span></h2>
<p class="wow fadeIn" data-wow-delay="0.6s">We working with reputation</p>
<!--a href="case-study.html" class="btn-main bg-btn lnk wow fadeIn"  data-wow-delay="0.8s">View Case Studies <i class="fas fa-chevron-right fa-ani"></i><span class="circle"></span></a-->
<div class="awards-block-tt  wow fadeIn" data-wow-delay="1s"></div>
</div>
</div>
<div class="col-lg-7">
<div class="hero-content-sec wow fadeIn" data-wow-delay="0.8s">


</div>
<div class="hero-right-scmm">
<div class="hero-service-cards wow fadeInRight" data-wow-duration="2s">
<div class="owl-carousel service-card-prb">
@php
$clients = App\Models\Client::orderBy('id','desc')->get();
@endphp

@foreach($clients as $item)
<div class="service-slide card-bg-a" data-tilt data-tilt-max="5" data-tilt-speed="1000"><a href="{{ url('services/details/'.$item->id.'/'.$item->content_title ) }}">
<div class="service-card-hh">
<div class="image-sr-mm">
<img alt="custom-sport" src="{{ asset($item->client_logo)}}">
</div>
<div class="title-serv-c">{{ $item->client_title}}</div>
</div></a>
</div>

@endforeach
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<!--End Hero-->
<!--Start Service-->
<section class="service-section web-servic pad-tb">
<div class="container">
<div class="row justify-content-center">
<div class="col-lg-8">
<div class="common-heading">
<span>Services We’re Provided</span>
<h2 class="mb30">Skin care & hair care</h2>
</div>
</div>
</div>
<div class="row upset link-hover shape-num justify-content-center">
@php
$services = App\Models\Services::orderBy('content_title','desc')->limit(8)->get();
@endphp

@foreach($services as $item)

 <div class="col-3 col-sm-3 mt60 wow fadeInUp" data-wow-delay="0.2s">
                  <div class="isotope_item hover-scale">
                     <div class="item-image" data-tilt data-tilt-max="2" data-tilt-speed="1000">
                        <a href="{{ url('services/details/'.$item->id.'/'.$item->content_title ) }}" style="width; 400px, height: 400px"><img src="{{ asset($item->thamble) }}" alt="image" class="img-fluid" /> </a>
                     </div>
                     <div class="item-info">
                        <h4><a href="{{ url('services/details/'.$item->id.'/'.$item->content_title ) }}">{{ $item->content_title}}</a></h4>
                        <p> <a href="{{ url('services/details/'.$item->id.'/'.$item->content_title ) }}">View Details</a></p>
                     </div>
                  </div>
               </div>
@endforeach

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
<h2 class="mb20">Why The laserskincare <span class="text-second text-bold">Ranked Top</span> Among The Skin & Hair care Services</h2>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
<div class="itm-media-object mt40 tilt-3d">
<div class="media">
<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('frontend/assets/images/icons/computers.svg')}}" alt="icon" class="layer"></div>
<div class="media-body">
<h4>Streamlined Project Management</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
</div>
</div>
<div class="media mt40">
<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"><img src="{{ asset('frontend/assets/images/icons/worker.svg')}}" alt="icon" class="layer"></div>
<div class="media-body">
<h4>A Dedicated Team of Experts</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
</div>
</div>
<div class="media mt40">
<div class="img-ab- base" data-tilt data-tilt-max="20" data-tilt-speed="1000"> <img src="{{ asset('frontend/assets/images/icons/deal.svg')}}" alt="icon" class="layer"></div>
<div class="media-body">
<h4>Completion of Project in Given Time</h4>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper. Mauris aliquet egestas metus.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-lg-6">
<div  data-tilt data-tilt-max="5" data-tilt-speed="1000" class="single-image bg-shape-dez wow fadeIn" data-wow-duration="2s"><img src="{{ asset('frontend/assets/images/about/about-company.jpg')}}" alt="image" class="img-fluid"></div>
<p class="text-center mt30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
<div class="cta-card mt60 text-center">
<h3 class="mb20">Let's Start a  <span class="text-second text-bold">New Project</span> Together</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet ligula nec leo elementum semper.</p>
<!--a href="get-quote.html" class="btn-outline bg-btn4 lnk mt30">Appointment    <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a-->
</div>
</div>
</div>
</div>
</section>
<!--End why choose-->


<!--Start work-category-->
<!--section class="work-category pad-tb tilt3d">
<div class="container">
<div class="row">
<div class="col-lg-4 v-center">
<div class="common-heading text-l">

<h2>Skin Care Service in All Domains</h2>
<p>Successfully delivered digital products Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
</div>
</div>
<div class="col-lg-8">
<div class="work-card-set">
<div  class="icon-set wow fadeIn" data-wow-delay=".2s">
<div class="work-card cd1">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-1.png')}}" alt="Industries" /></div>
<p>Social Networking</p>
</div>
</div>
<div  class="icon-set wow fadeIn" data-wow-delay=".4s">
<div class="work-card cd2">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-2.png')}}" alt="Industries" /></div>
<p>Digital Marketing</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay=".6s">
<div class="work-card cd3">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-3.png')}}" alt="Industries" /></div>
<p>Ecommerce Development</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay=".8s">
<div class="work-card cd4">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-4.png')}}" alt="Industries" /></div>
<p>Video Service</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay="1s">
<div class="work-card cd5">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-5.png')}}" alt="Industries" /></div>
<p>Banking Service</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay="1.2s">
<div class="work-card cd6">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-6.png')}}" alt="Industries" /></div>
<p>Enterprise Service</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay="1.4s">
<div class="work-card cd7">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-7.png')}}" alt="Industries" /></div>
<p>Education Service</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay="1.6s">
<div class="work-card cd8">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-8.png')}}" alt="Industries" /></div>
<p>Tour and Travels</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay="1.8s">
<div class="work-card cd9">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-9.png')}}" alt="Industries" /></div>
<p>Health Service</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay="2s">
<div class="work-card cd10">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-10.png')}}" alt="Industries" /></div>
<p>Event & Ticket</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay="2.2s">
<div class="work-card cd11">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-11.png')}}" alt="Industries" /></div>
<p>Restaurant Service</p>
</div>
</div>
<div class="icon-set wow fadeIn" data-wow-delay="2.4s">
<div class="work-card cd12">
<div class="icon-bg"><img src="{{ asset('frontend/assets/images/icons/icon-12.png')}}" alt="Industries" /></div>
<p>Business Consultant</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section-->
<!--End  work-category-->


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