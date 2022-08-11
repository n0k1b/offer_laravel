@extends('new_index')
@section('header_css_js')



@endsection
@section('content')
<section class="section-with-carousel section-with-left-offset position-relative mt-5 mb-1">
    <div class="col-lg-10 offset-lg-1 hotel-details-inner">
        <div class="carousel-wrapper">
            <div class="swiper">
                <div class="swiper-wrapper">
                    @if ($banner)
                    @foreach ($banner as $val)
                    <div class="swiper-slide" style="width:75% !important;height:250px;border-radius:6px">
                        <figure>

                            <img width="540" src="{{ asset('/images/'.$val->image) }}" alt="" style="object-fit: fill;height:100% !important">

                            {{-- <figcaption>
                                Small title for the slider

                            </figcaption> --}}
                        </figure>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
        <div class="carousel-controls">
            <div class="carousel-control carousel-control-left" role="button"
                style="opacity:1 !important; height: 30px;width: 30px;border-radius: 50%;background:white;padding-top:3px;box-shadow: 0px 4px 8px #0a164626;">
                <span style="margin-top: 6px;margin-left: 10px;"><i class="fa-solid fa-chevron-left"></i></span>
            </div>
            <div class="carousel-control carousel-control-right" role="button"
                style="opacity:1 !important; height: 30px;width: 30px;border-radius: 50%;background: white;padding-top: 3px;padding-left:4px;box-shadow: 0px 4px 8px #0a164626;">
                <span style="margin-top: 6px;margin-left: 6px;"><i class="fa-solid fa-chevron-right"></i></span>

            </div>
        </div>
    </div>
</section>


<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">Stores Our Member Love</h2>
                </div>
                <div class="loop owl-carousel owl-theme select-hotel-carosel">
                 
                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('bata')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/bata.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('yellow')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/yellow.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('bata')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/bata.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('yellow')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/yellow.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('bata')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/bata.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('yellow')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/yellow.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('bata')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/bata.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>
                   


                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">Our top picks at 15% Cash Back</h2>
                </div>
                

                    <div class="row">
                        <div class="col-md-4">
                           <a class="three-column-div">
                                <div class="three-column-div-image">
                                    <img src="{{ asset('/images/yellow.png') }}">
                                </div>
                                <div class="three-column-div-content" >
                                    <div class="three-column-div-content-heading">
                                            Yellow
                                    </div>
                                    <div class="three-column-div-content-footer">
                                       <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                     </div>
                                </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                            <a class="three-column-div">
                                <div class="three-column-div-image">
                                    <img src="{{ asset('/images/bata.png') }}">
                                </div>
                                <div class="three-column-div-content" >
                                    <div class="three-column-div-content-heading">
                                            Yellow
                                    </div>
                                    <div class="three-column-div-content-footer">
                                       <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                     </div>
                                </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                            <a class="three-column-div">
                                <div class="three-column-div-image">
                                    <img src="{{ asset('/images/yellow.png') }}">
                                </div>
                                <div class="three-column-div-content" >
                                    <div class="three-column-div-content-heading">
                                            Yellow
                                    </div>
                                    <div class="three-column-div-content-footer">
                                       <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                     </div>
                                </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                            <a class="three-column-div">
                                <div class="three-column-div-image">
                                    <img src="{{ asset('/images/bata.png') }}">
                                </div>
                                <div class="three-column-div-content" >
                                    <div class="three-column-div-content-heading">
                                            Yellow
                                    </div>
                                    <div class="three-column-div-content-footer">
                                       <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                     </div>
                                </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                            <a class="three-column-div">
                                <div class="three-column-div-image">
                                    <img src="{{ asset('/images/yellow.png') }}">
                                </div>
                                <div class="three-column-div-content" >
                                    <div class="three-column-div-content-heading">
                                            Yellow
                                    </div>
                                    <div class="three-column-div-content-footer">
                                       <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                     </div>
                                </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                            <a class="three-column-div">
                                <div class="three-column-div-image">
                                    <img src="{{ asset('/images/bata.png') }}">
                                </div>
                                <div class="three-column-div-content" >
                                    <div class="three-column-div-content-heading">
                                            Yellow
                                    </div>
                                    <div class="three-column-div-content-footer">
                                       <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                     </div>
                                </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                            <a class="three-column-div">
                                <div class="three-column-div-image">
                                    <img src="{{ asset('/images/yellow.png') }}">
                                </div>
                                <div class="three-column-div-content" >
                                    <div class="three-column-div-content-heading">
                                            Yellow
                                    </div>
                                    <div class="three-column-div-content-footer">
                                       <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                     </div>
                                </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                            <a class="three-column-div">
                                <div class="three-column-div-image">
                                    <img src="{{ asset('/images/bata.png') }}">
                                </div>
                                <div class="three-column-div-content" >
                                    <div class="three-column-div-content-heading">
                                            Yellow
                                    </div>
                                    <div class="three-column-div-content-footer">
                                       <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                     </div>
                                </div>
                           </a>
                        </div>
                        <div class="col-md-4">
                            <a class="three-column-div">
                                <div class="three-column-div-image">
                                    <img src="{{ asset('/images/yellow.png') }}">
                                </div>
                                <div class="three-column-div-content" >
                                    <div class="three-column-div-content-heading">
                                            Yellow
                                    </div>
                                    <div class="three-column-div-content-footer">
                                       <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                     </div>
                                </div>
                           </a>
                        </div>
                        
                    </div>
            
            </div>
        </div>
    </div>
</section>


<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">Shoes & Fashion with 15% Cash Back</h2>
                </div>
                <div class="row">
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">Health & beauty with 15% Cash Back</h2>
                </div>
                <div class="row">
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>


                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>

                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/yellow.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                     <div class="col-md-2">
                        <a class="six-column-div">
                            <div class="six-column-div-image">
                                <img src="{{ asset('/images/bata.png') }}">
                            </div>
                            <div class="three-column-div-content" >
                                
                                <div class="three-column-div-content-footer">
                                   <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                                 </div>
                            </div>
                        </a>
                     </div>
                </div>
                
            </div>
        </div>
    </div>
</section>

<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">Popular</h2>
                    
                </div>
                <div class="loop owl-carousel owl-theme select-hotel-carosel">
                 
                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('bata')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/bata.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('yellow')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/yellow.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('bata')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/bata.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('yellow')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/yellow.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('bata')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/bata.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('yellow')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/yellow.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box">
                            <div class="box-inner p-0">
                                <a href="{{route('bata')}}">
                                    <img style="height:96px;border-radius:5px;"
                                        src="{{ asset('/images/bata.png') }}"></a>
                            </div>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                80% cash back
                            </span>
                            <span class="text-gray">was 20%</span>
                        </div>
                    </div>
                   


                </div>
            </div>
        </div>
    </div>
</section>

<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 hotel-details-inner">
                <div class="banner-slider-header m-0">
                    <h2 class="site-secondary-title">Deals of the week</h2>
                </div>
                <div class="loop owl-carousel owl-theme ">
                   
                    <div class="item">
                        <div class="slider-box mb-3">
                            <div class="box-inner p-0" style="position: relative">

                                <img style="height:115px;border-radius:5px;"  src="{{ asset('/images/yellow.png') }}">

                                <a href='' class="btn btn-primary btn-sm see_details">See detials</a>
                            </div>
                        </div>

                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                20% Cash Back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span class="text-gray-bold">
                               
                            </span>

                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box mb-3">
                            <div class="box-inner p-0" style="position: relative">

                                <img style="height:115px;border-radius:5px;"  src="{{ asset('/images/bata.png') }}">

                                <a href='' class="btn btn-primary btn-sm see_details">See detials</a>
                            </div>
                        </div>

                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                20% Cash Back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span class="text-gray-bold">
                               
                            </span>

                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box mb-3">
                            <div class="box-inner p-0" style="position: relative">

                                <img style="height:115px;border-radius:5px;"  src="{{ asset('/images/yellow.png') }}">

                                <a href='' class="btn btn-primary btn-sm see_details">See detials</a>
                            </div>
                        </div>

                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                20% Cash Back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span class="text-gray-bold">
                               
                            </span>

                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box mb-3">
                            <div class="box-inner p-0" style="position: relative">

                                <img style="height:115px;border-radius:5px;"  src="{{ asset('/images/bata.png') }}">

                                <a href='' class="btn btn-primary btn-sm see_details">See detials</a>
                            </div>
                        </div>

                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                20% Cash Back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span class="text-gray-bold">
                               
                            </span>

                        </div>
                    </div>


                    <div class="item">
                        <div class="slider-box mb-3">
                            <div class="box-inner p-0" style="position: relative">

                                <img style="height:115px;border-radius:5px;"  src="{{ asset('/images/yellow.png') }}">

                                <a href='' class="btn btn-primary btn-sm see_details">See detials</a>
                            </div>
                        </div>

                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                20% Cash Back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span class="text-gray-bold">
                               
                            </span>

                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box mb-3">
                            <div class="box-inner p-0" style="position: relative">

                                <img style="height:115px;border-radius:5px;"  src="{{ asset('/images/bata.png') }}">

                                <a href='' class="btn btn-primary btn-sm see_details">See detials</a>
                            </div>
                        </div>

                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                20% Cash Back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span class="text-gray-bold">
                               
                            </span>

                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box mb-3">
                            <div class="box-inner p-0" style="position: relative">

                                <img style="height:115px;border-radius:5px;"  src="{{ asset('/images/yellow.png') }}">

                                <a href='' class="btn btn-primary btn-sm see_details">See detials</a>
                            </div>
                        </div>

                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                20% Cash Back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span class="text-gray-bold">
                               
                            </span>

                        </div>
                    </div>

                    <div class="item">
                        <div class="slider-box mb-3">
                            <div class="box-inner p-0" style="position: relative">

                                <img style="height:115px;border-radius:5px;"  src="{{ asset('/images/bata.png') }}">

                                <a href='' class="btn btn-primary btn-sm see_details">See detials</a>
                            </div>
                        </div>

                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span>
                                <i class="fa fa-solid fa-plus circle-red"></i>
                            </span>
                            <span class="text-red">
                                20% Cash Back
                            </span>
                            <span class="text-gray">Was 20%</span>
                        </div>
                        <div class="m-0 p-0 text-left" style="vertical-align: middle">
                            <span class="text-gray-bold">
                               
                            </span>

                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Banner Section End -->
<section class="hotel-details-section mb-4">
    <div class="container-fluid">
        <div class="col-lg-10 offset-lg-1 hotel-details-inner">
            <div class="banner-slider-header m-0">
                <h2 class="site-secondary-title">Health & beauty with 15% Cash Back</h2>
            </div>

    <div class="row">
            
       <div class="col-md-6" style="margin-bottom:14px">
        <a class="two-column-div">
            <div class="two-column-div-body">
                <div class="two-column-div-image">
                    <img class="" src="{{ asset('/images/yellow.png') }}">
                    <div class="two-column-div-text-heading">
                        <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                        <div class="two-column-div-text-footer"  style="vertical-align: middle">
                            <div style="margin-top:-4px;margin-right:4px">
                                <i class="fa fa-solid fa-plus circle-red"></i>
                               </div>
                               <div class="three-column-div-content-footer-text">
                                <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                <span class="text-gray">was 25%</span>
                               </div>
                        </div>
                    </div>
                    <div class="two-column-div-button">
                        <div class="two-column-div-button-text">
                            <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                        </div>
                    </div>

                </div>
               
                
            </div>
        </a>
        

        </div>

        <div class="col-md-6" style="margin-bottom:14px">
            <a class="two-column-div">
                <div class="two-column-div-body">
                    <div class="two-column-div-image">
                        <img class="" src="{{ asset('/images/bata.png') }}">
                        <div class="two-column-div-text-heading">
                            <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                            <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                <div style="margin-top:-4px;margin-right:4px">
                                    <i class="fa fa-solid fa-plus circle-red"></i>
                                   </div>
                                   <div class="three-column-div-content-footer-text">
                                    <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                    <span class="text-gray">was 25%</span>
                                   </div>
                            </div>
                        </div>
                        <div class="two-column-div-button">
                            <div class="two-column-div-button-text">
                                <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                            </div>
                        </div>
    
                    </div>
                   
                    
                </div>
            </a>
            
    
            </div>

            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/yellow.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>

            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/bata.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>

            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/yellow.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>

            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/bata.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>

            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/yellow.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>

            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/bata.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>

            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/yellow.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>

            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/bata.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>

            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/yellow.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>
            <div class="col-md-6" style="margin-bottom:14px">
                <a class="two-column-div">
                    <div class="two-column-div-body">
                        <div class="two-column-div-image">
                            <img class="" src="{{ asset('/images/bata.png') }}">
                            <div class="two-column-div-text-heading">
                                <span class="two-column-div-text-heading-span">Bang & Olufsen speakerBang & Olufsen speaker + gift card w/ select device purchase.</span>
                                <div class="two-column-div-text-footer"  style="vertical-align: middle">
                                    <div style="margin-top:-4px;margin-right:4px">
                                        <i class="fa fa-solid fa-plus circle-red"></i>
                                       </div>
                                       <div class="three-column-div-content-footer-text">
                                        <span class="text-red" style="margin-right:4px">10% Cash Back </span>
                                        <span class="text-gray">was 25%</span>
                                       </div>
                                </div>
                            </div>
                            <div class="two-column-div-button">
                                <div class="two-column-div-button-text">
                                    <span style="overflow: hidden;text-overflow:ellipsis;white-space:nowrap">See Details</span>
                                </div>
                            </div>
        
                        </div>
                       
                        
                    </div>
                </a>
                
        
            </div>


                
    </div>  
            
        </div>
    </div>
</section>

<!-- Banner Section End -->


<!-- Banner Section End -->

@endsection
@section('footer_css_js')
<style>
    .swiper-slide-active {
        width: 75% !important;
    }

    .see_details {
        position: absolute;
        width: 105px;
        bottom: -9px;
        text-transform: none !important;
        right: 10px;
        border-radius: 30px !important;
        background: white !important;
        color: #195e73;
        padding: 6px;
        border: 1px solid #e1dede;
        -webkit-box-shadow: 0px 4px 8px #0a164626;
        box-shadow: 0px 4px 8px #0a164626
    }

    .see_details a {
        font-size: 14px;
        padding-left: 11px;
        padding-right: 11px;
        font-weight: normal;
        border-radius: 27px;
    }

    .see_details a:hover {
        background-color: #195e73;
    }

    .btn-primary:hover {
        color: #195e73;
    }
</style>
@endsection