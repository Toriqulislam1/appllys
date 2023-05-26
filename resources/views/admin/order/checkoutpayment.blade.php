@extends('frontend.front_master')
@section('content')
@section('title')
Appllys Technologies
@endsection

  <!--Start Location-->
  <section class="our-office pad-tb">
    <div class="container">
       <div class="row justify-content-center">
          <div class="col-lg-8">
             <div class="common-heading">
                <span>Our Locations</span>
                <h2>Our Office</h2>
             </div>
          </div>
       </div>



       <div class="row justify-content-center upset shape-numm">

        <a href=""  title="cashon">
          <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".2s">

             <div class="office-card">
                <input type="hidden" value="1" name="cashout">
                <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">

                   <img src="{{ asset('frontend/assets/images/location/newyork.png') }}" alt="New York" class="img-fluid" />
                </div>
             </div>
            </a>
            
          </div>
          </form>

          <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".5s">
             <div class="office-card">
                <input type="hidden" name="bikash" value="2">
                <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                   <img src="{{ asset('frontend/assets/images/location/sydeny.png') }}" alt="sydney" class="img-fluid" />
                </div>

             </div>
          </div>
          <div class="col-lg-4 col-sm-6 shape-loc wow fadeInUp" data-wow-delay=".8s">
             <div class="office-card mb0">
                <input type="hidden" name="paypal">
                <div class="skyline-img" data-tilt data-tilt-max="4" data-tilt-speed="1000">
                   <img src="{{ asset('frontend/assets/images/location/rome.png') }}" alt="rome" class="img-fluid" />
                </div>

             </div>
          </div>
       </div>

    </form>

    </div>
 </section>
 <!--End Location-->





@endsection
