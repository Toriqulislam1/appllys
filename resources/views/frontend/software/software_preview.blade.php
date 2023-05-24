@extends('frontend.front_master')
@section('content')
@section('title')
Appllys Technologies
@endsection


<!--shop products-->
<section class="shop-products-prvw pt20 pb60">
    <div class="container shop-container">
        <div class="row mt-5">

            <div class="col-lg-8">

                <div class="rpb-shop-prevw">

                    <img src="{{ asset($previews->image) }}" class="w-100" alt="img">
                </div>

                <div class="btn-grp mt40 mb-3">
                    <a href="{{ $previews->demo }}" class="btn-main bg-btn lnk"> Live Demo <i class="fas fa-share"></i> <span class="circle"></span></a>

                </div>

                <div class="rpb-item-info">
                    <div class="tab-17 tabs-layout">
                        <ul class="nav nav-tabs" id="myTab3" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="tab1a" data-bs-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">Item Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab2b" data-bs-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Review</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab3c" data-bs-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Comments</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="tab4c" data-bs-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Support</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent2">
                            <div class="mt20 tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1a">

                                <h4 class="mb10">Description</h4>
                                <p class="mb30">{!! $previews->long_desp !!}</p>

                            </div>


                            <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2b">

                                <div class="rpb-item-review">

                                    <div class="reviews-card">
                                        <div class="review-text pt0 pb20">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                        <div class="-client-details-">
                                            <div class="-reviewr">
                                                <img src="images/client/reviewer-c.jpg" alt="Good Review" class="img-fluid">
                                            </div>
                                            <div class="reviewer-text">
                                                <h4><small>By: </small>Anna Sthesia</h4>
                                                <p>20 Jan 2021</p>
                                                <div class="star-rate">
                                                    <ul>
                                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="reviews-card">
                                        <div class="review-text pt0 pb20">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        </div>
                                        <div class="-client-details-">
                                            <div class="-reviewr">
                                                <img src="images/client/reviewer-c.jpg" alt="Good Review" class="img-fluid">
                                            </div>
                                            <div class="reviewer-text">
                                                <h4><small>By: </small>Anna Sthesia</h4>
                                                <p>20 Jan 2021</p>
                                                <div class="star-rate">
                                                    <ul>
                                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                        <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                        <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3c">

                                <div class="rpb-commentss comments-block">
                                    <div class="media">
                                        <div class="user-image"><img src="images/user-thumb/user3.jpg" alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info">
                                            <h5 class="mb10">Petey Cruiser <small class="badges badge-success">PURCHASED:</small>
                                                <span>
                                                    November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a>
                                                </span>
                                            </h5>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500.</p>
                                        </div>
                                    </div>
                                    <div class="media replied">
                                        <div class="user-image"><img src="images/user-thumb/user3.jpg" alt="girl" class="img-fluid"/></div>
                                        <div class="media-body user-info">
                                            <h5 class="mb10">Tom Mikee <small class="badges badge-success">Author:</small>
                                                <span>
                                                    November 29, 2019 <a class="reply-btn" href="#"><i class="fas fa-reply"></i></a>
                                                </span>
                                            </h5>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever.</p>
                                        </div>
                                    </div>
                                </div>


                                <div class="rpb-comment-form">
                                    <div class="form-block form-blog mt40">
                                        <form action="#" method="post" name="#">
                                            <div class="fieldsets row">
                                                <div class="col-md-6"><input type="text" placeholder="Name" name="#" /></div>
                                                <div class="col-md-6"><input type="email" placeholder="Email" name="#" /></div>
                                            </div>
                                            <div class="fieldsets"><textarea placeholder="Write Your Comment" name="#"></textarea></div>
                                            <div class="fieldsets mt10">
                                                <button type="submit" name="#" class="btn-main bg-btn3 lnk">Post Comment <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4c">
                                <div class="rpb-itm-support-txt">
                                    <h4>Contact Us</h4>
                                    <p>Lorem Ipsum is simply dummy text of the printing and through email contact form.</p>

                                    <h4 class="mt30 mb10">Item support includes:</h4>
                                    <ul class="ul-list mb30">
                                        <li>Powered by Bootstrap</li>
                                        <li>Well documented codes</li>
                                        <li>Fully Responsive</li>
                                        <li>Free Google Fonts</li>
                                    </ul>

                                    <a href="#">View the item support policy</a>
                                    <div class="btns">
                                        <a href="#" class=" mt30 btn-main bg-btn3 lnk">Get Support <i class="fas fa-chevron-right fa-icon"></i><span class="circle"></span></a>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

                <div class="rpb-item-infodv">
                    <ul>
                        <li class="price">
                            <strong>Price</strong>
                            <div class="nx-rt">
                                <div class="rpb-itm-pric"> <span class="offer-prz">{{$previews->price}} </span> <span class="regular-prz">{{$previews->purchase}}</span> </div>
                            </div>
                        </li>
                        <li>
                            <strong>Last Update</strong>
                            <div class="nx-rt">{{ \Carbon\Carbon::parse($previews->Update_date)->format('d/m/Y')}}</div>
                        </li>
                        <li>
                            <strong>Created</strong>
                            <div class="nx-rt">{{ \Carbon\Carbon::parse($previews->create_date)->format('d/m/Y')}}</div>
                        </li>
                        <li>
                            <strong>High Resolution</strong>
                            <div class="nx-rt">Yes</div>
                        </li>

                        <li>
                            <strong>Columns</strong>
                            <div class="nx-rt">4+</div>
                        </li>

                        <li>
                            <strong>Layout</strong>
                            <div class="nx-rt">Responsive</div>
                        </li>

                        <li>
                            <a href="{{ route('checkout.view',$previews->id) }}" class="btn-main bg-btn3 lnk w-100 mt10">Buy Now <span class="circle"></span> </a>
                        </li>

                    </ul>
                </div>


                <div class="rpb-item-infodv">
                    <h4 class="mb20">Technology </h4>

                    <div class="tabs">
                        @php

                    //   $id =  App\Models\product::where('id',$previews->id)

                         $after_explode= explode(',',$previews->technology);
                     @endphp

                        @foreach ($after_explode as $technology )
                        <a href="#">{{ $technology }}</a>
                        @endforeach

                    </div>
                </div>

                <div class="rpb-item-infodv">
                    <h4 class="mb20">Item tags</h4>
                    <div class="tabs">

                        @php

                        //   $id =  App\Models\product::where('id',$previews->id)

                             $after_explode= explode(',',$previews->tag );
                         @endphp

                            @foreach ($after_explode as $tag  )
                            <a href="#">{{ $tag  }}</a>
                            @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>



@endsection
