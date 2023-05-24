@extends('frontend.front_master')
@section('content')
@section('title')
Appllys Technologies
@endsection




<section class="contact-page pad-tb">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 v-center">
                
                <div class="common-heading text-l">
                    <span>Order Now</span>

                </div>
                <div class="form-block">
                    <form id="contactForm" action="{{ route('order') }}" method="post" data-bs-toggle="validator" class="shake" novalidate="true">
                        @csrf
                        <div class="row">
                            <div class="form-group col-sm-6 has-error">

                                <input type="text" id="name" placeholder="Enter name" name="name" value="{{ auth()->guard('customer')->user()->name }}" required="" data-error="Please fill Out">
                                <div class="help-block with-errors"><ul class="list-unstyled"></ul></div>
                            </div>
                            <div class="form-group col-sm-6 has-error">
                                <input type="email" id="email" placeholder="Enter email" name="email" value="{{ auth()->guard('customer')->user()->email }}" required="">
                                <div class="help-block with-errors"><ul class="list-unstyled"></ul></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-sm-6 has-error">
                                <input type="text" id="mobile" placeholder="Enter mobile"  name="mobile" value="{{ auth()->guard('customer')->user()->mobile  }}" required="" data-error="Please fill Out">
                                <div class="help-block with-errors"><ul class="list-unstyled"></ul></div>
                            </div>
                            <div class="form-group col-sm-6 has-error">
                                <textarea id="message" rows="1" name="message" placeholder="Enter your message" required=""></textarea>
                                <div class="help-block with-errors"><ul class="list-unstyled"></ul></div>
                            </div>
                        </div>

                        <button type="submit" id="form-submit" class="btn lnk btn-main bg-btn disabled" style="pointer-events: all; cursor: pointer;">Continuous process <span class="circle"></span></button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </form>
                            </div>
                        </div>
                        <div class="col-lg-5 v-center">
                            <div class="contact-details">
                                <div class="contact-card wow fadeIn" data-wow-delay=".2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                    <div class="info-card v-center">
                                        <span><i class="fas fa-phone-alt"></i> Phone:</span>
                                        <div class="info-body">
                                            <p>Assistance hours: Monday – Friday, 9 am to 5 pm</p>
                                            <a href="tel:+10000000000">(+91) 0000 000 000</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-card mt30 wow fadeIn" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                                    <div class="info-card v-center">
                                        <span><i class="fas fa-envelope"></i> Email:</span>
                                        <div class="info-body">
                                            <p>Our support team will get back to in 24-h during standard business hours.</p>
                                            <a href="mailto:info@businessname.com">info@businessname.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="skype-card mt30 wow fadeIn" data-wow-delay=".9s" style="visibility: visible; animation-delay: 0.9s; animation-name: fadeIn;">
                                    <div class="info-card v-center">
                                        <span><i class="fab fa-skype"></i> Skype:</span>
                                        <div class="info-body">
                                            <p>We Are Online: Monday – Friday, 9 am to 5 pm</p>
                                            <a href="skype:niwax.company?call">niwax.company</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



@endsection
