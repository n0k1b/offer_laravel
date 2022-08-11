@extends('new_index')
@section('header_css_js')
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('/css/checkout.css') }}">
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">

@endsection
@section('content')

<div class="checkout-page">
        <div class="checkout-page-heading">
            <div class="logo"><img height="30px" src="{{ asset('/images/logo.png') }}" /></div>
            <div class="page-title"><h1>CHECKOUT</h1></div>
            <div class="partner"></div>
        </div>
        <div class="checkout-container">
            <!-- <img src="https://countryflagsapi.com/png/807" /> -->
            <div class="checkout-info">
              
                <div class="promo-voucher">
                    <div class="heading">
                        <h2>PROMO / STUDENT CODE OR VOUCHERS </h2>
                        <div class="icon"><i class="bi bi-chevron-down"></i></div>
                    </div>
                    <div class="collapsible">
                        <div class="tab-selector">
                            <div data-tab="promo" class="tab selected"><i class="bi bi-tag"></i> <span>PROMO / STUDENT<br/> CODE</span></div>
                            <div data-tab="voucher" class="tab"><i class="bi bi-gift"></i> <span>VOUCHER</span></div>
                        </div>
                        <div class="tab-details" data-tab="promo">
                            <div class="action-instruction">ADD A PROMO/STUDENT CODE</div>
                            <div class="item-input">
                                <label>PROMO/STUDENT CODE</label>
                                <div class="input-container">
                                    <input type="text" />
                                    <button class="apply-button">APPLY CODE</button>
                                </div>
                            </div>
                            <div class="info">
                                <b class="info-title">NEED TO KNOW</b>
                                <ul>
                                    <li>You can only use one discount/promo code per order. This applies to our free-delivery codes, too.</li>
                                    <li>Discount/promo codes cannot be used when buying gift vouchers.</li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-details hide" data-tab="voucher">
                            <div class="action-instruction">ADD A VOUCHER</div>
                            <div class="item-input">
                                <label>16-DIGIT VOUCHER CODE</label>
                                <div class="input-container">
                                    <input type="text" />
                                    <button class="apply-button">APPLY CODE</button>
                                </div>
                            </div>
                            <div class="info">
                                <p>Got a gift card? Visit My Account to add it to your gift-voucher balance before you can redeem it at checkout.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="email">
                    <h2 class="heading">EMAIL ADDRESS</h2>
                    <p>abtahitajwar@gmail.com</p>
                </div>
                <div class="delivery-address">
                    <h2>DELIVERY ADDRESS</h2>
                    <h3>ADD ADDRESS</h3>
                    <form>
                        <div class="input-container">
                            <label>FIRST NAME</label>
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container">
                            <label>LAST NAME</label>
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container">
                            <label>MOBILE <span class="extra-info">(For delivery updates)</span>:</label>
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container">
                            <label>ADDRESS :</label>
                            <input type="text" />
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container error">
                            <label>CITY :</label>
                            <input type="text" />
                            <span class="error">Oops! You need to enter your city before you can continue.</span>
                        </div>
                        <div class="input-container">
                            <label>POSTCODE :</label>
                            <input type="text" />
                            <span class="error"></span>
                        </div>
                        <div class="input-container">
                            <label>COUNTRY :</label>
                            <input type="text" class="prefilled" />
                            <span class="error"></span>
                        </div>
                        <button type="submit" class="submit-button">DELIVER TO THIS ADDRESS</button>
                    </form>
                </div>
                <div class="disabled">
                    <h2>DELIVERY OPTION</h2>
                </div>
                <div class="disabled">
                    <h2>PAYMENT</h2>
                </div>
                <a href="" class="place-order-btn">PLACE ORDER</a>
                <div class="terms">
                    By placing your order you agree to our Terms & Conditions, privacy and returns policies . You also consent to some of your data being stored by ASOS, which may be used to make future shopping experiences better for you.
                </div>
            </div>
            <div class="item-info">
                <div class="info-heading">
                    <h2>2 ITEMS</h2>
                    <a href="#">Edit</a>
                </div>
                <div class="items">
                    <div class="item">
                        <img src="{{ asset('/images/1.webp') }}" height="110px" width="85px" />
                        <div class="item-details">
                            <b>$93.50</b>
                            <p>Reebok Club C Mid II sneakers in chalk</p>
                            <b>WHITE AU 13</b>
                            <p>Qty: <b>1</b></p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{ asset('/images/2.webp') }}" height="110px" width="85px" />
                        <div class="item-details">
                            <b>$130.50</b>
                            <p>Reebok Club C 85 sneakers in white</p>
                            <b>WHITE AU 13</b>
                            <p>Qty: <b>1</b></p>
                        </div>
                    </div>
                </div>
                <div class="price">
                    <div class="subtotal"><span>Subtotal</span><span>$223.50</span></div>
                    <div class="total"><span>TOTAL TO PAY</span><span>$223.50</span></div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer_css_js')
<script>
    // All countries api
    // https://restcountries.com/v3.1/all
    document.getElementById("countryCode").addEventListener('change', e => {
        document.getElementById("flag-img").src = `https://countryflagsapi.com/png/${e.target.value}`
    })
    document.querySelectorAll(".tab-selector > .tab").forEach(tab => {
        tab.addEventListener('click', e => {
            document.querySelectorAll(".tab-selector > .tab").forEach(tab => tab.classList.remove('selected'))
            e.target.classList.add('selected')
            console.log(e.target.dataset.tab)
            document.querySelectorAll(".tab-details").forEach(tabDetails => {
                
                if(tabDetails.dataset.tab !== e.target.dataset.tab) {
                    tabDetails.classList.add("hide")
                } else {
                    tabDetails.classList.remove("hide")
                }
            })
        })
    })
    document.querySelector(".promo-voucher > .heading").addEventListener("click", () => {
        document.querySelector(".promo-voucher").classList.toggle("collapsed")
    })
</script>
@endsection