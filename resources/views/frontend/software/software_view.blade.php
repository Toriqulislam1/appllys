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
                                        <ul>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)" class="chked"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                            <li> <a href="javascript:void(0)"><i class="fas fa-star" aria-hidden="true"></i></a> </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rpb-itm-sale">144 Sales</div>
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

<div class="row justify-content-center">
                <div class="col-lg-12">

                    <div class="pagination pagi1">
<ul>
<li> <a href="#."> &lt; </a>
<a class="is-active" href="#">1</a>
<a href="#.">2</a>
<a href="#.">3</a>
<a href="#.">4</a>
<a href="#."> &gt; </a>
</li></ul>
</div>
                </div></div>

    </div>
</div>


@endsection
