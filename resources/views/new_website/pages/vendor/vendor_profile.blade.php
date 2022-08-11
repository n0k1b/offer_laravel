@extends('new_index')
@section('header_css_js')
<style>
    .card_inner_des {
        position: absolute;
        top: 125px;
        right: 10px;
        border-radius: 12px;
        background: white;
        color: #195e73;
        font-weight: bold;
        padding: 6px;
        border: 1px solid #e1dede;
        -webkit-box-shadow: 1px 7px 4px 5px rgb(0 0 0 / 24%);
        box-shadow: 1px 1px 14px 1px rgb(0 0 0 / 6%);
    }
</style>
@endsection
@section('content')

<section class="hotel-details-section mt-2">
    <div class="container-fluid" style="">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">


                <div class="m-4">
                    <div class="card" style="box-shadow:0 0 4px rgb(0 0 0 / 23%)">
                        <div class="row g-0">
                            <div class="col-sm-5" style="">
                                <img src="{{ asset('/images/'.$vendor->banner) }}" class="card-img-top h-100" alt="...">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body">
                                    <h5 class="card-title">{{$vendor->name}}</h5>
                                    <div class="card-text">{!!$vendor->description!!}</div>
                                    {{-- <h3 class=" text-left" style="color:red">
                                        on All Products
                                    </h3> --}}
                                    {{-- <a href="{{request()->fullUrl()}}&view_type=shop"
                                        class="btn btn-lg btn-primary stretched-link"
                                        style="background-color:#195e73;">Shop
                                        now</a> --}}
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>


<section class="hotel-details-section mt-2">
    <div class="container-fluid" style="padding-left:54px">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header">
                    <h2 style=" font-weight: bold;text-align: left;color:#d9b389;font-size:30px;"> AVAIALABLE PRODUCTS
                    </h2>
                </div>
                <div class="row">
                    @php
                    $products=\App\Model\Product::where('vendor_id',$vendor_id)->get();
                    @endphp
                    @if($products)
                    @foreach ( $products as $pv)
                    @php
                    $vendor=\App\Model\Vendor::where('id',$pv->vendor_id)->first();
                    $offer=\App\Model\Offer::where('id',$pv->offer)->first();

                    //
                    // =MDH9797405&category_id=3&offer_code=12345412&offer_id=44&vendor_id=1&view_type=shop
                    //
                    //

                    $queryString="vendor_id=".$pv->vendor_id."&view_type=shop"."&affiliation_id=".$vendor->affiliation_id."&category_id=".$pv->category_id."&offer_code=".$offer->code."&offer_id=".$offer->id;
                    @endphp
                    <div class="card d-flex m-2 shadow-sm"
                        style="width: 18rem;background: #00000003;/* border-radius: 10px !important; */border: none;box-shadow: 0 0 4px rgb(0 0 0 / 23%);">
                        <img class="card-img-top shadow-lg" src="{{ asset('/images/'.$pv->thumb_image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h3 style="color:red;text-align:left">{{ \App\Model\Offer::find($pv->offer)->title}}
                            </h3>
                            <p class="card-text"
                                style="text-align: left;font-size: 16px;color: #264753;font-weight: bold;">
                                {{$pv->title_english_name}}<br>
                                <span>{{$pv->sub_title_english_name}}</span>
                            </p>
                            <a href="#" class="btn btn-primary ">{{$pv->price}} TK </a>
                            <a href="{{url('/details?product_id='.$pv->id.'&'.$queryString)}}" class="btn btn-primary ">
                                Details
                            </a>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="card d-flex m-2 shadow-sm">
                        <h3>No PRODUCTS FOUND</h3>
                    </div>
                    @endif
                </div>
            </div>
        </div>
</section>


{{-- <section class="hotel-details-section mt-2">
    <div class="container-fluid" style="padding-left:54px">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header">
                    <h2 style=" font-weight: bold;text-align: left;color: #d9b389;">Other Available Offer
                    </h2>
                </div>
                <div class="row">
                    @php
                    $allOffer=\App\Model\Offer::where('vendor_id',$_GET['vendor_id'])->get()->take(30);
                    @endphp
                    @if ($allOffer)
                    @foreach ($allOffer as $dt )
                    <div class="card d-flex m-2 shadow-sm"
                        style="width: 18rem;background: #00000003;/* border-radius: 10px !important; */border: none;box-shadow: 0 0 4px rgb(0 0 0 / 23%);">
                        @if ($dt->icon_image)
                        <img class="card-img-top shadow-lg" src="{{ asset('/images/'.$dt->icon_image) }}"
                            alt="Card image cap">
                        @endif

                        <div class="card-body">
                            <h3 style="color:red;text-align:left">{{$dt->title}}</h3>
                            <p class="card-text"
                                style="text-align: left;font-size: 16px;color: #264753;font-weight: bold;">Spring
                                red-tag savings are here.</p>
                            <a href="#" class="btn btn-primary see_details">See detials</a>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
</section> --}}


@endsection
@section('footer_css_js')
@endsection