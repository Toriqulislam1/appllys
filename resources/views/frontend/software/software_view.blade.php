@extends('frontend.front_master')
@section('content')
@section('title')
Appllys Technologies
@endsection




<!--shop products-->
<div class="shop-products-bhv pt20 pb60">
    <div class="container mt-5">



        <div class="row">
            @foreach ($products as $product )
            <div class="col-lg-4">
                <div class="rpb-shop-items-dv s-block mt60">
                    <div class="rpb-shop-items-img">
                        <a href="#"><img src="{{ asset($product->thumbnail)}}" class="img-fluid" alt="product"></a>
                    </div>
                    <div class="rpb-shop-items-info">
                        <div class="rpb-shop-items-tittl">
                            <h3><a href="#">{{$product->name}}</a></h3>
                            <p class="tags-itmm">{{$product->short}}</p>
                        </div>

                        <div class="rpb-shop-items-flex">
                            <div class="rpb-shop-inf-ll">
                                <div class="rpb-itm-pric"><span class="offer-prz">{{$product->purchase}}</span> <span class="regular-prz">{{$product->price}}</span></div>
                                <div class="rpb-tim-rate">
                                    <div class="star-rate">

                                        @php
                                            $sales = App\Models\order::where('product_id',$product->id)->count();
                                            $reviews = App\Models\review::where('product_id',$product->id)->avg('review');
                                        @endphp
                                        <ul>
                                            @for($i = 1; $i <= $reviews; $i++)
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            @endfor

                                        </ul>
                                    </div>
                                </div>
                                <div class="rpb-itm-sale">{{ $sales }} Sales </div>
                            </div>

                            <div class="rpb-shop-inf-rr">
                                <div class="rpb-shop-flxbt">
                                <a href="{{ route('software.preview',$product->id) }}" class="rpb-shop-prev" data-bs-toggle="tooltip" title="priview product">Preview</a>

                                <a href="{{ route('checkout.view',$product->id) }}" data-bs-toggle="tooltip" class="rpb-shop-prev" title="buy now">Buy Now</a>


                            </div>

                            </div>
                            @if(Session::has('buy'))
                            <div class="alert alert-danger">
                            {{ Session::get('buy')}}
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


@endsection
