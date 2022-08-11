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

<section class="hotel-details-section">
    <div class="col-lg-10 offset-lg-1 hotel-details-inner">
        <div class="banner-slider-header" style="position: absolute;">
            <a href="{{route('logout')}}" style="position: absolute;top: 0px;right: 31px;"> <i
                    class="fa fa-sign-out"></i>
                Logout

            </a>
        </div>
    </div>
</section>

<section class="hotel-details-section">
    <div class="container-fluid" style="padding:54px">
        <div class="row">

            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header">
                    <h2 style=" font-weight: bold;text-align: left;color: #FDD7AA;">My Products History</h2>
                </div>
                <div class="row">

                    <div class="row">
                        @php
                        $order=\App\Model\Order::where('user_id',session()->get('user')->id)->get();
                        @endphp
                        @if ($order)
                        @foreach ($order as $val)
                        @php
                        $products=\App\Model\Product::where('id',$val->product_id)->first();
                        @endphp
                        <div class="col-sm-12 col-md-4">
                            <div class="card" style="width:310px;">
                                <img src="{{ asset('/images/'.$products->thumb_image) }}" class="card-img-top" alt="..."
                                    style="">
                                <div class="card-body">
                                    <h5 class="card-title">{{$products->sub_title_english_name}}</h5>
                                    <h3 style="text-align:left;color:red;">{{$val->name}}</h3>
                                    <a href="#" class="btn btn-primary stretched-link">
                                        <span style="text-decoration:line-through">{{$val->item_price}} TK</span>
                                        {{$val->after_price}} TK</a>

                                    @if ($val->order_status == 'Pending')
                                    <a href="#" class="btn btn-warning ">
                                        {{$val->order_status}} </a>
                                    @endif
                                    @if ($val->order_status == 'Approved')
                                    <a href="#" class="btn btn-success ">
                                        {{$val->order_status}} </a>
                                    @endif
                                    @if ($val->order_status == 'Reject')
                                    <a href="#" class="btn btn-danger ">
                                        {{$val->order_status}} </a>
                                    @endif

                                </div>
                            </div>
                        </div>
                        @endforeach

                        @endif

                    </div>
                </div>
            </div>
        </div>
</section>


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