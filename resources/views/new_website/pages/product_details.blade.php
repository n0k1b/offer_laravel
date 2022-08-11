@extends('new_index')
@section('header_css_js')
<style>
    .card_inner_des {
        position: absolute;
        top: 125px;
        right: 10px;
        border-radius: 12px;
        background: white;
        color: #264653;
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
$vendor=\App\Model\Vendor::where('affiliation_id',$_GET['affiliation_id'])->first();
$products=\App\Model\Product::where('id',$_GET['product_id'])->first();
$offer=\App\Model\Offer::where('id',$_GET['offer_id'])->first();
if($offer->type == 1){ // 1 cash
$price=$products->price-$offer->amount;
}
if($offer->type == 3){ // 3 percentage
$price=$products->price - (($offer->amount/100));
}
@endphp

<section class="hotel-details-section">
    <div class="container-fluid" style="padding: 54px;">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="m-4">
                    <div class="card" style="">
                        <div class="row g-0">
                            <div class="col-sm-5" style="background: #868e96;">
                                <img src="{{ asset('/images/'.$products->main_image) }}" class="card-img-top h-100"
                                    alt="...">
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body" style="overflow: hidden;">
                                    <h5 class="card-title">{{$products->sub_title_english_name}}</h5>
                                    <p class="card-text">{!!$products->description!!}</p>
                                    <h3 style="text-align:left;color:red;">{{$offer->title}}</h3>
                                    <a href="#" class="btn btn-primary stretched-link">
                                        <span style="text-decoration:line-through">{{$products->price}} TK</span>
                                        {{$price}} TK</a>
                                    @if(!Session::has('user'))

                                    <a href="#" class="btn btn-secondary login_modal_show"><i class="fas fa-lock"></i>
                                        Sign in to continue</a>
                                    @else


                                    <a href="#" class="btn btn-primary " data-toggle="modal"
                                        data-target="#exampleModal">Buy
                                        Out
                                    </a>

                                    @endif

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" data-backdrop="static"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Product Request</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('orderRequest')}}" method="POST" id="buy_out">
                <div class="modal-body">
                    {{ csrf_field() }}
                    <input type="hidden" name="code" value="{{$_GET['offer_code']}}" />
                    <input type="hidden" name="affiliation_id" value="{{$_GET['affiliation_id']}}" />
                    <input type="hidden" name="item_sku" value="{{$products->product_sku}}" />
                    <input type="hidden" name="item_name" value="{{$products->sub_title_english_name}}" />
                    <input type="hidden" name="offer_type" value="{{$offer->type}}" />
                    <input type="hidden" name="offer_amount" value="{{$offer->amount}}" />
                    <input type="hidden" name="after_price" value="{{$price}}" />
                    <input type="hidden" name="item_price" value="{{$products->price}}" />
                    <input type="hidden" name="product_id" value="{{$products->id}}" />
                    <input type="hidden" name="request_url" value="{{request()->fullUrl()}}" />
                    <input type="hidden" name="offer_name" value="{{$offer->title}}" />

                    @if(Session::has('user'))
                    <input type="hidden" name="user_id" value="{{session()->get('user')->id}}" />
                    @endif

                    <div class="form-group">
                        <label for="mobile_no" class="col-form-label">Contact No <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="mobile_no" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_address" class="col-form-label">Address <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="contact_address" required>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="col-form-label">Additional Notes <span
                                class="text-danger">*</span></label>
                        <textarea class="form-control" id="message-text" name="message" required></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="submit_click">Submit</button>
                </div>
            </form>

        </div>
    </div>
</div>

@endsection
@section('footer_css_js')
<script>
    $(document).on("click", '#submit_click', function(event) {
        $('#cover-spin').show();
        let dataString = $("#buy_out").serialize();
        let url = $("#buy_out").attr("action");
        $.ajax({
            url     : `${url}`,
            type    : 'POST',
            data    : dataString,
            success: function (json) {
                if(json.success){
                        Swal.fire({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Your request sent successfully!',
                            showConfirmButton: false,
                            timer: 4000
                        });
                        location.reload();
                }else{
                    Swal.fire({
                            position: 'top-end',
                            icon: 'error',
                            title: 'Please check the input!',
                            showConfirmButton: false,
                            timer: 4000
                        });
                }
                $('#cover-spin').hide();
            },
            beforeSend: function(){
                $('#cover-spin').show();
            },
            error: function(json) {
                $('#cover-spin').hide();
                return json;
            }
        });
});
</script>

@endsection