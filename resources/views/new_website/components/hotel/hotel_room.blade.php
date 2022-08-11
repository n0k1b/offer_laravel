<!-- Hotel Room Section Start -->
<section class="hotel-room-section">
    <div class="container">
        <div class="row">
            @if(!empty($hotelRooms['data']) && isset($hotelRooms['data']))
            @foreach ($hotelRooms['data'] as $key=>$room)
            <div class="col-lg-12 hotel-room-info-box" id="{{$key}}">
                <div class="row">
                    <div class="col-lg-3 hotel-room-media">
                        <div class="row">
                            <div class="col-lg-12 col-12 no-padding">
                                <img data-src='{{$hotelImage}}' class="img-fluid lazyload blur-up">
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-7 hotel-room-info">
                        <h1>{{ $room['roomCategory']}}</h1>
                        <h2 class="price-hotel">${{$room['roomRate']}}<br><span>/night</span></h2>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                            invidunt ut labore et dolore magna aliquyam erat.</p>
                        <p><strong style="color: #000">Cancellation Policy:</strong> Non refundable</p>

                        <ul>
                            <li><img src={{asset("assets_website/images/Icon-awesome-wifi.svg")}}>Wifi</li>
                            <li><img src={{asset("assets_website/images/Icon-awesome-spa.svg")}}>Spa</li>
                            <li><img src={{asset("assets_website/images/Icon-material-pool.svg")}}>Pool</li>
                            <li><img src={{asset("assets_website/images/Icon-material-beach-access.svg")}}>Beach Access
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 hotel-room-select">
                        <h2 class="hotel-90-h2">${{number_format((float)$room['roomRate'], 2, '.', '')
                            }}<br><span>/night</span></h2>
                        <button class="btn btn-default"> Select </button>
                    </div>
                    @php
                    $payloadPrev=(json_decode($payload,true));

                    $enhancedPayload['adultCount'] =1;
                    $enhancedPayload['startDate'] =$payloadPrev['startDate'];
                    $enhancedPayload['endDate'] =$payloadPrev['endDate'];
                    $enhancedPayload['bookingCode'] =$room['bookingCode'];
                    $enhancedPayload['cityCode'] =$room['hotelAttributes']['cityCode'];
                    $enhancedPayload['hotelCode'] =$room['hotelAttributes']['hotelCode'];
                    $enhancedPayload['hotelImage']=$hotelImage;
                    $enhancedPayload['roomStayData'] = array([
                    "bookingCode"=> $room['bookingCode'],
                    "quantity"=> count($payloadPrev['guest']),
                    "ratePlanCode"=>$room['ratePlanCode'],
                    "paymentCode"=> $room['paymentCode'],
                    "formOfPaymentCode"=> $room['formOfPaymentCode'],
                    "chainCode"=> $room['hotelAttributes']['chainCode'],
                    "roomTypeCode"=> $room['roomTypeCode']
                    ]
                    );

                    @endphp
                    <input type="hidden" id="payload_{{$key}}" value="{{ json_encode($enhancedPayload)}}" />

                </div>
            </div>
            @endforeach

            @endif


        </div>
    </div>
</section>

<!-- Hotel Room Section End -->