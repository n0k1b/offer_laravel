<!DOCTYPE html>
<html lang="en">

<head>
  <title>Feerot Website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <link rel="stylesheet" href="{{asset('rakuten/vendor/bootstrap/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
  <meta name="csrf-token" content="{{ csrf_token() }}" />

  <!-- Vendor -->
  <script type="text/javascript" src="{{asset('rakuten/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('rakuten/vendor/bootstrap/bootstrap.min.js')}}"></script>
  <link rel="stylesheet" href="{{asset('https://use.fontawesome.com/releases/v5.7.2/css/all.css')}}">
  <!-- Vendor -->

  <!--Main Menu File-->
  <link id="effect" rel="stylesheet" type="text/css" media="all" href="{{asset('rakuten/vendor/fade-down.css')}}" />
  <link rel="stylesheet" type="text/css" media="all" href="{{asset('rakuten/vendor/webslidemenu.css')}}" />

  <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('rakuten/vendor')}}/white-gry.css?{{time()}}" />

  <!-- Include Below JS After Your jQuery.min File -->
  <script type="text/javascript" src="{{asset('rakuten/vendor/webslidemenu.js')}}"></script>
  <!--Main Menu File-->
  <link rel="stylesheet" href="{{asset('rakuten/vendor/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('rakuten/vendor/owl.theme.default.css')}}">
  <link rel="stylesheet" href="{{asset('https://unpkg.com/swiper/swiper-bundle.min.css')}}" />
  <script src="{{asset('https://unpkg.com/swiper/swiper-bundle.min.js')}}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  @yield('header_css_js')
  <style>
    body {
  font-family: "Poppins", sans-serif !important;
  background: #fff !important;
}
    .btn-primary {
      background: #195e73 !important;
      border: #195e73 !important;
    }

    .site-secondary-title {
      font-weight: bold !important;
      text-align: left !important;
      color: #0c0c0c;
      font-size: 20px;
    }

    .text-red {
      font-size: 14px;
      font-weight: 600;
      color: #e80c5b;
    }

    .text-gray-bold {
      font-size: 16px;
      font-weight: bold;
      color: #292929;
    }

    .text-gray {
      font-size: 12px;
      font-weight: normal;
      color: #737373;
    }

    .circle-red {
      display: inline-block;
      border-radius: 50%;
      box-shadow: 0 0 1px #88888882;
      padding: 2px 3px;
      background: #e80c5b;
      color: white;
      font-size: 8px;
      vertical-align: middle;
    }
  </style>
</head>

<body>
  @include('new_website.layouts.header')
  @yield('content')
  @include('new_website.layouts.footer')

  <!-- Login Modal Start -->
  <!-- Modal Login modal -->
  <div id="loginModal" class="modal fade">
    <div class="modal-dialog modal-login">
      <div class="modal-content">
        <form action="{{route('useLogin')}}" method="post" id="login_form">
          {{ csrf_field() }}

          <div class="modal-header">
            <h4 class="modal-title">Login</h4>
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" required="required" id="email_address">
            </div>
            <div class="form-group">
              <div class="clearfix">
                <label>Password</label>
              </div>

              <input type="password" class="form-control" name="password" required="required" id="password">
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <label class="form-check-label"><input type="checkbox"> Remember me</label>
            <input type="submit" class="btn btn-primary class-login-button" value="Login">
          </div>
          <div class="text-center p-2">
            <label class="form-check-label text-rgiht signup_modal_show" role="button">Don't have a account click
              here</label>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Login Modal End -->
  <!-- Signup Modal Start -->
  <div class="modal fade login-popup" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-body">
          <form action="{{route('signup')}}" method="post" id="signup_form">
            <div class="modal-header">
              <h4 class="modal-title">Sign up</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label>Full Name</label>
                <input type="text" class="form-control" required="required" name="name">
              </div>
              <div class="form-group">
                <label>Mobile no</label>
                <input type="text" class="form-control" required="required" name="phone">
              </div>
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" required="required" name="email">
              </div>
              <div class="form-group">
                <div class="clearfix">
                  <label>Password</label>
                </div>
                <input type="password" class="form-control" required="required" name="password">
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <input type="button" class="btn btn-default login_modal_show" value="Login">
              <input type="submit" class="btn btn-primary class-login-button" value="Sign up">
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- Signup Modal End -->

  <div id="cover-spin" style="display: none;"></div>

</body>
<script src="{{asset('rakuten/vendor/owl.carousel.min.js')}}"></script>
<link rel="stylesheet" href="{{asset('rakuten/app.js')}}">

<script>
  $.ajaxSetup({
      headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });
  $(document).on('click', '.login_modal_show', function(e) {
        // analytics('Login Screen',null);
    
        $('#signup').modal('hide');
        $('#loginModal').modal('show');
    });
    $(document).on('click', '.signup_modal_show', function(e) {
        // analytics('Sign up Screen',null);
        $('#loginModal').modal('hide');
        $('#signup').modal('show');
    });

    $("#login_form").on("submit", function (e) {
      // analytics('Login attempt',null);
      $("#cover-spin").show();
      $(".class-login-button").attr("disabled", "disabled").button('refresh');
      e.preventDefault();
      let dataString = $(this).serialize();
      let url = $(this).attr("action");
      // alert(redirect);
      // console.log(redirect);
      $.ajax({
          url     : `${url}`,
          type    : 'POST',
          async: true,
          data    : dataString,
          headers: {
              'guestAuth': '0dRL8q0K8apqRoa0cLTpm8XgtsOzhNRE3_KV8WLxz98uzHraFPG8FUJB1D3fW6Xw'
          },
          success: function (json) {
              console.log(json);
              if(json.success){
                  successAlert('success','Login Successfull!');
                      location.reload();
                  }
              else{
                  successAlert('error','Please check your input credentials!');
              }
              $("#cover-spin").hide();
              $(".class-login-button").removeAttr("disabled").button('refresh');
              return true;
          },
          error: function(json) {
              // analytics('Login attempt failed',null);
              $("#cover-spin").hide();
              $(".class-login-button").removeAttr("disabled").button('refresh');
              return false;
          }
    });
});
$("#signup_form").on("submit", function (e) {
      // analytics('Login attempt',null);
      $("#cover-spin").show();
      $(".class-login-button").attr("disabled", "disabled").button('refresh');
      e.preventDefault();
      let dataString = $(this).serialize();
      let url = $(this).attr("action");
      // alert(redirect);
      // console.log(redirect);
      $.ajax({
          url     : `${url}`,
          type    : 'POST',
          async: true,
          data    : dataString,
          headers: {
              'guestAuth': '0dRL8q0K8apqRoa0cLTpm8XgtsOzhNRE3_KV8WLxz98uzHraFPG8FUJB1D3fW6Xw'
          },
          success: function (json) {
              console.log(json);
              if(json.success){
                  successAlert('success','Sginup Successfull!');
                      location.reload();
                  }
              else{
                  successAlert('error',json.response);
              }
              $("#cover-spin").hide();
              $(".class-login-button").removeAttr("disabled").button('refresh');
              return true;
          },
          error: function(json) {
              // analytics('Login attempt failed',null);
              $("#cover-spin").hide();
              $(".class-login-button").removeAttr("disabled").button('refresh');
              return false;
          }
    });
});
  $(document).ready(function () {
    // Swiper: Slider
    const sectionsWithCarousel = document.querySelectorAll(
      ".section-with-carousel"
    );

    // createOffsets();
    // window.addEventListener("resize", createOffsets);

    function createOffsets() {
      const sectionWithLeftOffset = document.querySelector(
        ".section-with-left-offset"
      );
      const sectionWithLeftOffsetCarouselWrapper = sectionWithLeftOffset.querySelector(
        ".carousel-wrapper"
      );
      const sectionWithRightOffset = document.querySelector(
        ".section-with-right-offset"
      );
      const sectionWithRightOffsetCarouselWrapper = sectionWithRightOffset.querySelector(
        ".carousel-wrapper"
      );
      const offset = (window.innerWidth - 1100) / 2;
      const mqLarge = window.matchMedia("(min-width: 1200px)");

      if (sectionWithLeftOffset && mqLarge.matches) {
        sectionWithLeftOffsetCarouselWrapper.style.marginLeft = offset + "px";
      } else {
        sectionWithLeftOffsetCarouselWrapper.style.marginLeft = 0;
      }

      if (sectionWithRightOffset && mqLarge.matches) {
        sectionWithRightOffsetCarouselWrapper.style.marginRight = offset + "px";
      } else {
        sectionWithRightOffsetCarouselWrapper.style.marginRight = 0;
      }
    }

    for (const section of sectionsWithCarousel) {
      let slidesPerView = [1.5, 2.5, 3.5];
      if (section.classList.contains("section-with-left-offset")) {
        slidesPerView = [1.5, 1.5, 2.5];
      }
      const swiper = section.querySelector(".swiper");
      new Swiper(swiper, {
        slidesPerView: slidesPerView[0],
        spaceBetween: 15,
        loop: true,
        lazyLoading: true,
        keyboard: {
          enabled: true
        },
        navigation: {
          prevEl: section.querySelector(".carousel-control-left"),
          nextEl: section.querySelector(".carousel-control-right")
        },
        pagination: {
          el: section.querySelector(".swiper-pagination"),
          clickable: true,
          renderBullet: function (index, className) {
            return `<div class=${className}>
            <span class="number">${index + 1}</span>
            <span class="line"></span>
        </div>`;
          }
        },
        breakpoints: {
          768: {
            slidesPerView: slidesPerView[1]
          },
          1200: {
            slidesPerView: slidesPerView[2]
          }
        }
      });
    }

  });

  $('.owl-carousel').owlCarousel({
    loop: false,
    margin: 10,
    nav: true,
    // row:2,
    responsive: {
      0: {
        items: 3
      },
      600: {
        items: 3
      },
      1000: {
        items: 6
      }
    }
  })
  /*
      Carousel
  */
  $('#carousel-example').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 5;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems - (itemsPerSlide - 1)) {
      var it = itemsPerSlide - (totalItems - idx);
      for (var i = 0; i < it; i++) {
        // append slides to end
        if (e.direction == "left") {
          $('.carousel-item').eq(i).appendTo('.carousel-inner');
        }
        else {
          $('.carousel-item').eq(0).appendTo('.carousel-inner');
        }
      }
    }
  });

</script>
@if (Session::has('error'))
<script>
  Swal.fire({
    position: 'top-end',
    icon: 'error',
    title: '',
    text: '{{Session::get("error")}}',
    showConfirmButton: false,
    timer: 4000
    })
</script>
@endif
@if (Session::has('success'))
<script>
  Swal.fire({
    position: 'top-end',
    icon: 'success',
    title: '',
    text: '{{Session::get("success")}}',
    showConfirmButton: false,
    timer: 4000
    })
</script>
@endif
<script>
  function successAlert(type,msg){
        Swal.fire({
            position: 'top-end',
            icon: type,
            title: '',
            text: msg,
            showConfirmButton: false,
            timer: 4000
        })
    }
</script>
@yield('footer_css_js')

</html>