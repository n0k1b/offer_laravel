<!-- Second Row -->
<div class="row">
    <div class="col-lg-2">
        <img src={{asset("assets_website/images/room-overview.png")}} class="img-fluid">
    </div>

    <div class="col-lg-8 booking-room-details">
        <h3>Room Type:</h3>
        <h4>2 queen-hearing impared</h4>
    </div>

    <div class="col-lg-2 booking-room-details">
        <a onclick="checkLogin()" class="btn-main">Next</a>
    </div>
</div>

<!-- Third Row -->
<div class="row check-in-out-details">
    <div class="col-lg-7 no-padding">
        <p>Check-in Date: <span>15-FEB-2020</span></p>
        <p>Check-out Date: <span>17-FEB-2020</span></p>
    </div>
    <div class="col-lg-5 no-padding">
        <p>No of Rooms: <span>01</span></p>
        <p>Guests Type: <span>2 Adults - 2 Children</span></p>
    </div>
</div>

<!-- Fourth Row -->
<div class="row cancelation-policy">
    <div class="col-lg-12 ">
        <p>Cancellation Policy: <span>{{ $cart['cancelPolicy'] }}</span></p>
        <div class="border-bottom-line"></div>
    </div>
</div>

<!-- Fifth Row -->
<div class="row booking-pricing-summary">
    <div class="col-lg-9">
        <p><strong>Pricing:</strong></p>
        <p>TAX/VAT & Service :</p>
        <p>Guest + 1:</p>
    </div>
    <div class="col-lg-3">
        <p><span>$330</span></p>
        <p>$40.40</p>
        <p>$300</p>
    </div>
    <div class="col-lg-12">
        <div class="border-bottom-line"></div>
    </div>
</div>

<!-- Sixth Row -->
<div class="row booking-total-amount">
    <div class="col-lg-9">
        <h3>Total Price</h3>
    </div>
    <div class="col-lg-3">
        <h3><span>$370.40</span></h3>
    </div>
    <div class="col-lg-12">
        <div class="border-bottom-line"></div>
    </div>
</div>
