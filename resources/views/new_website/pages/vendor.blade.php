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
@php
$fullUrl=request()->fullUrl();
$queryString=explode("?",$fullUrl);
$vendor=\App\Model\Vendor::where('affiliation_id',$_GET['affiliation_id'])->first();
$offer=\App\Model\Offer::where('id',$_GET['offer_id'])->first();
$cat=\App\Model\Category::where('id',$_GET['category_id'])->first();

@endphp
@if (isset($_GET['view_type']))
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

                    <h2
                        style=" font-weight: bold;text-align: left;color:#d9b389;font-size:30px;text-transform:uppercase">
                        {{$offer->title}} on
                        {{$cat->english_name}} Products
                    </h2>
                </div>
                <div class="row">
                    @php
                    $products=\App\Model\Product::where('offer',$_GET['offer_id'])->where('vendor_id',$_GET['vendor_id'])->get();
                    @endphp
                    @if($products)
                    @foreach ( $products as $pv)
                    <div class="card d-flex m-2 shadow-sm"
                        style="width: 18rem;background: #00000003;/* border-radius: 10px !important; */border: none;box-shadow: 0 0 4px rgb(0 0 0 / 23%);">
                        <img class="card-img-top shadow-lg" src="{{ asset('/images/'.$pv->thumb_image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h3 style="color:red;text-align:left">{{ \App\Model\Offer::find($_GET['offer_id'])->title}}
                            </h3>
                            <p class="card-text"
                                style="text-align: left;font-size: 16px;color: #264753;font-weight: bold;">
                                {{$pv->title_english_name}}<br>
                                <span>{{$pv->sub_title_english_name}}</span>
                            </p>


                            <a href="#" class="btn btn-primary ">{{$pv->price}} TK </a>
                            <a href="{{url('/details?product_id='.$pv->id.'&'.$queryString[1])}}"
                                class="btn btn-primary ">
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
@else

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
                                    <h3 class=" text-left" style="color:red">
                                        {{$offer->title}} on All {{$cat->english_name}} Products
                                    </h3>
                                    <a href="{{request()->fullUrl()}}&view_type=shop"
                                        class="btn btn-lg btn-primary stretched-link"
                                        style="background-color:#195e73;">Shop
                                        now</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

@endif

<section class="hotel-details-section mt-2">
    <div class="container-fluid" style="padding-left:54px">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header">
                    <h2
                        style="font-weight: bold;text-align: left;color:#d9b389;font-size:30px;text-transform:uppercase">
                        Other Available Offer
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
</section>

{{-- <section class="hotel-details-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner bg-cover"
                style="background:url({{ asset('/images/'.$vendor->banner) }}) no-repeat center center;background-size:cover;-webkit-background-size:cover;">
                <div class="p-5 rounded-3">
                    <div class="container-fluid ">
                        <h1 class="display-5 fw-bold">{{$vendor->name}} </h1>
                        <p class="col-md-8 fs-4">
                            {!!$vendor->description!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section> --}}
{{--
<section class="hotel-details-section">
    <div class="container-fluid" style="padding:54px">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">

                <div class="row">
                    @php
                    $products=\App\Model\Product::where('offer',$_GET['offer_id'])->get();
                    @endphp
                    @if($products)
                    @foreach ( $products as $pv)
                    <div class="card d-flex m-2 shadow-sm"
                        style="width: 18rem;background: #00000003;/* border-radius: 10px !important; */border: none;box-shadow: 0 0 4px rgb(0 0 0 / 23%);">
                        <img class="card-img-top shadow-lg" src="{{ asset('/images/'.$pv->thumb_image) }}"
                            alt="Card image cap">
                        <div class="card-body">
                            <h3 style="color:red;text-align:left">{{ \App\Model\Offer::find($_GET['offer_id'])->title}}
                            </h3>
                            <p class="card-text"
                                style="text-align: left;font-size: 16px;color: #264753;font-weight: bold;">
                                {{$pv->title_english_name}}<br>
                                <span>{{$pv->sub_title_english_name}}</span>
                            </p>


                            <a href="#" class="btn btn-primary ">{{$pv->price}} TK </a>
                            <a href="{{url('/details?product_id='.$pv->id.'&'.$queryString[1])}}"
                                class="btn btn-primary ">
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
</section> --}}
{{-- <section class="hotel-details-section mt-2">
    <div class="container-fluid" style="">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="m-4">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('toppage')}}" style="color:#195e73">Home</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Library</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
    </div>
</section> --}}

@endsection
@section('footer_css_js')
@endsection