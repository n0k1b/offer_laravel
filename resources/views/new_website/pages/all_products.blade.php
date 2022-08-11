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
@endphp
<section class="hotel-details-section">
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

</section>
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


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Contact No:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Address:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Additional Notes:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

@endsection
@section('footer_css_js')
@endsection