<!-- Mobile Header -->
<div class="wsmobileheader clearfix">
    <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
    <span class="smllogo"><a href="{{route('toppage')}}"><img src="{{asset('rakuten/assets/img/logo_cash.png')}}"
                width="100" alt="" /></a></span>
    <div class="wssearch clearfix">
        <i class="wsopensearch fas fa-search"></i>
        <i class="wsclosesearch fas fa-times"></i>
        <div class="wssearchform clearfix">
            <form>
                <input type="text" placeholder="Search Here">
            </form>
        </div>
    </div>
</div>
<!-- Mobile Header -->
<div class="headerfull">
    <div class="wsmain clearfix">
        <div class="smllogo"><a href="{{route('toppage')}}"><img src="{{asset('rakuten/assets/img/logo_cash.png')}}"
                    style="height: 38px;margin-top: 2px;">
            </a></div>
        <nav class="wsmenu clearfix">
            <ul class="wsmenu-list">
                <li aria-haspopup="true"><a href="#" class="navtext"><span></span> <span class="fas fa-list"
                            style="font-size:14px;margin-top: 10px;padding: 3px;font-family: 'Inter', sans-serif;">
                            Category</span></a>
                    <div class="wsshoptabing wtsdepartmentmenu clearfix">
                        <div class="wsshopwp clearfix">
                            <ul class="wstabitem clearfix">
                                @if ($category)
                                @foreach ($category as $key=>$cat_val)
                                <li class="{{$key==0 ? 'wsshoplink-active' : ''}}"><a
                                        href="#">{{$cat_val->english_name}}</a>
                                    <div class="wstitemright clearfix">
                                        <div class="container-fluid">
                                            <div class="row">
                                                @php
                                                $SubCategory=
                                                \App\Model\Category::where('parent_id',$cat_val->id)->take(4)->get();

                                                @endphp
                                                @if($SubCategory)
                                                @foreach ($SubCategory as $val)
                                                <div class="col-lg-3 col-md-12">
                                                    <ul class="wstliststy02 clearfix">
                                                        <li>
                                                            <img src="{{ asset('/images/'.$val->image) }}" alt=" "
                                                                style="border-radius: 5px;">
                                                        </li>
                                                        <li class="wstheading clearfix text-center"
                                                            style="border: none !important;">
                                                            {{$val->english_name}}</li>
                                                    </ul>
                                                </div>
                                                @endforeach
                                                @endif

                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <h1 style="font-size: 26px;font-weight: bold;">Recommended Stores
                                                    </h1>
                                                </div>
                                                <div class="col-lg-8 col-md-12  mt-4">
                                                    <table class="table">
                                                        <tbody>
                                                            @php
                                                            $offer=\App\Model\Offer::select('vendor_id','title','id','code','category_id')->where('category_id',$cat_val->id)
                                                            ->groupBy('vendor_id')->get()->take(10);
                                                            @endphp
                                                            @if ($offer)
                                                            @foreach ($offer as $valsss)
                                                            <tr
                                                                style="border-bottom:1px solid #fff;/* background: #fff; *//* border-radius: 2rem; */">
                                                                <td scope="row"
                                                                    style="font-size: 15px;border-top: none;padding: .2rem;">
                                                                    <p class="m-0"
                                                                        style="padding:0 !important;font-weight: bold;">
                                                                        {{-- {{$val->vendor_id ? $val->getVendor->name :
                                                                        ''}} --}}
                                                                        @php
                                                                        $vendorinfo =
                                                                        \App\Model\Vendor::find($valsss->vendor_id)
                                                                        @endphp
                                                                        {{
                                                                        $vendorinfo->name
                                                                        }}
                                                                    </p>
                                                                    <p
                                                                        style="padding-top:0px;color:red !important;font-weight:bold">
                                                                        {{$valsss->title}} </p>
                                                                </td>
                                                                <td
                                                                    style="vertical-align: middle;border-top: none;padding: 0.1rem;">
                                                                    @if($valsss->has_website != 0)
                                                                    <a href="{{$valsss->offer_url}}"
                                                                        class=" shadow-md p-2 m-2  bg-white rounded text-bold"
                                                                        style="font-weight:bold;font-size: 1rem;/* border: 1px solid; */box-shadow: 0px 8px 15px rgb(0 0 0 / 10%);">Shop
                                                                        Now
                                                                    </a>
                                                                    @else
                                                                    <a href='{{url("allproducts?vendor_id=".$vendorinfo->id."&affiliation_id=".$vendorinfo->affiliation_id."&category_id=".$cat_val->id."&offer_code=".$valsss->code."&offer_id=".$valsss->id)}}'
                                                                        class=" shadow-md p-2 m-2  bg-white rounded text-bold"
                                                                        style="font-weight:bold;font-size: 1rem;/* border: 1px solid; */box-shadow: 0px 8px 15px rgb(0 0 0 / 10%);">Shop
                                                                        Now
                                                                    </a>
                                                                    @endif
                                                                </td>
                                                            </tr>

                                                            @endforeach
                                                            @endif



                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </li>




                <li class="wssearchbar clearfix">
                    <form class="topmenusearch">
                        <input placeholder="Search Product By Name, Category...">
                        <button class="btnstyle"><i class="searchicon fas fa-search"></i></button>
                    </form>
                </li>
                @php

                @endphp
                @if(session()->get('user_type') !== 'customer'))

                <li class="wscarticon clearfix login_modal_show" style="font-family: 'Inter', sans-serif;">
                    <a href="#" class="login_modal_show"><i class="fas fa-lock"></i> Sign in</a>
                </li>
                @else
                <li class="wscarticon clearfix " style="font-family: 'Inter', sans-serif;position:relative">
                    @php
                    $order=\App\Model\Order::where('user_id',session()->get('user')->id)->where('order_status','Pending')->get();
                    @endphp
                    <a href="{{route('dashboard')}}"> My Dashboard
                        @if ($order->count() > 0)
                        <span class="badge badge-danger">{{$order->count() }}</span>
                        @endif
                    </a>
                </li>
                @endif

            </ul>
        </nav>
    </div>
</div>
<div class="headerfull">
    <div class="container">
    <div class="row">
        <div class="col-md-2">
            <a class="header-category-link">
                <i class="bi bi-gift icon-category"></i> <span>New</span> </a>
        </div>
    
        <div class="col-md-2">
            <a class="header-category-link"><i class="bi bi-heart icon-category"></i><span>Popular</span></a>
        </div>
    
        <div class="col-md-2">
            <a class="header-category-link"><i class="bi bi-lightning-charge icon-category"></i><span>Hot Deals</span></a>
        </div>
    
        <div class="col-md-2">
            <a class="header-category-link"><i class="bi bi-chat icon-category"></i><span>Help</span></a>
        </div>
    
    </div>
</div>
</div>
