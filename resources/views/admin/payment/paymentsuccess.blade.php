@extends('frontend.front_master')
@section('content')
@section('title')
Appllys Technologies
@endsection



<section class="about-dg-2 pb120 pt120 bg-flat1 m-t-c" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="common-heading-2 ">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="text-center">Successfully completed order </h2>
                        </div>
                      </div>

                    <a href="{{ url('/') }}" class="btn-main bg-btn5 lnk mt40">Back Home<i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

