@extends('new_index')
@section('header_css_js')
<link rel="stylesheet" href="{{ asset('/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/product-details.css') }}">
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link rel="stylesheet" href="{{ asset('css/glider.css') }}">

@endsection
@section('content')
<div class="product-details-container">
    <div class="details-container">
        <div class="product-gallery">
            <div class="select-image">
                <img src="{{ asset('images/1.webp') }}" class="selected">
                <img src="{{ asset('images/2.webp') }}">
                <img src="{{ asset('images/3.webp') }}">
                <img src="{{ asset('images/4.webp') }}">
            </div>
            <div class="preview-image">
                <button class="left navigate" id="left-image-navigate"><i class="bi bi-chevron-left"></i></button>
                <img src="{{ asset('images/1.webp') }}" id="preview-image">
                <button class="right navigate" id="right-image-navigate"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
        <div class="product-details">
            <h1 class="product-name">Lacoste L003 retro inspired sneakers in white and green</h1>
            <p class="price">$200</p>
            <p class="price-description">Or 4 payments of $50.00 with afterpay or with Klarna </p>
            <div class="price-banner">
                <i class="bi bi-tag"></i>
                <p>25% OFF EVERYTHING! IT'S AN EOFYS THING With code: <span>HAUL</span></p>
            </div>
            <p class="colour-text"><span>COLOUR:</span> WHITE</p>
            <div class="size-selector">
                <div class="label">
                    <span>SIZE:</span>
                    <a href="#">Size Guide</a>
                </div>
                <select name="sizes" id="sizes" placeholder="Please Select">
                    <option value="null">Please Select</option>
                    <option value="au6">AU 6</option>
                    <option value="au7">AU 7</option>
                    <option value="au8">AU 8</option>
                    <option value="au9">AU 9</option>
                </select>
            </div>
            <div class="action-buttons">
                <button class="btn-green">ADD TO BAG</button>
                <button class="btn-icon"><i class="bi bi-heart"></i></button>
            </div>
            <div class="shipping-details-banner">
                <p><i class="bi bi-truck"></i> Free Shipping</p>
                <p><i class="bi bi-arrow-return-left"></i> Free Return</p>
                <p>Ts&C apply. <a href="#">Learn More <i class="bi bi-arrow-up-right"></i></a></p>
            </div>
            <div class="expandable-section">
                <div class="section expanded">
                    <div class="title">
                        <p>Product Details</p><div class="animated-expand-icon"></div>
                    </div>
                    <div class="details">
                        <p>Sneakers by Lacoste</p>
                        <ul>
                            <li>Made for unboxing</li>
                            <li>Low-profile design</li>
                            <li>Pull tab for</li> easy entry
                            <li>Padded tongue and</li> cuff
                            <li>Signature Lacoste branding</li>
                            <li>Chunky midsole</li>
                            <li>Textured grip tread</li>
                        </ul>
                    </div>
                </div>
                <div class="section">
                    <div class="title"><p>Brand</p><div class="animated-expand-icon"></div></div>
                    <div class="details">
                        <p>Famed for its iconic crocodile emblem, Lacoste was founded by tennis superstar René Lacoste in 1933 and was first to introduce the pique polo shirt. Utilising its sporting background, Lacoste fuses functionality with style to create its contemporary collections, embracing a bold use of colour in a wide range of products that include its timeless polo shirt, as well as shoes, trainers and signature fragrances – and it's all available right here in the Lacoste at ASOS edit.</p>
                    </div>
                </div>
                <div class="section">
                    <div class="title"><p>Look After Me</p><div class="animated-expand-icon"></div></div>
                    <div class="details">
                        <p>Treat with a suitable leather protector (not included) and avoid contact with liquids
                        </p>
                    </div>
                </div>
                <div class="section">
                    <div class="title"><p>About Me</p><div class="animated-expand-icon"></div></div>
                    <div class="details">
                        <p>Breathable mesh and leather upper

                            Lining: 100% Textile, Sole: 100% Other materials, Upper: 100% Real leather.
                            
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="divider"></div>
<div class="section">
    <h1 class="section-title">YOU MIGHT ALSO LIKE</h1>
    <div class="gallery">
        <a href="#"><div class="gallery-item">
            <img src="{{ asset('/images/extra-3.webp') }}" />  
            <b>$20.00</b>
            <p>adidas Originals</p>
        </div></a>
        <div class="gallery-item">
            <img src="{{ asset('/images/extra-1.webp') }}" />  
            <b>$20.00</b>
            <p>adidas Originals</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('/images/extra-2.webp') }}" />  
            <b>$20.00</b>
            <p>adidas Originals</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('/images/extra-3.webp') }}" />  
            <b>$20.00</b>
            <p>adidas Originals</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('/images/extra-4.webp') }}" />  
            <b>$20.00</b>
            <p>adidas Originals</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('/images/extra-5.webp') }}" />  
            <b>$20.00</b>
            <p>adidas Originals</p>
        </div>
        <div class="gallery-item">
            <img src="{{ asset('/images/extra-6.webp') }}" />  
            <b>$20.00</b>
            <p>adidas Originals</p>
        </div>            
    </div>
</div>
<div class="divider"></div>
<div class="section">
    <div class="section-heading">
        <h1 class="section-title">RECENTLY VIEWED</h1>
        <div><button class="section-action">CLEAR ALL</button></div>
    </div>
    <div class="glider-contain">
        <div class="glider">
            
            <div class="carousel-item">
                <button class="remove-item action-button"><i class="bi bi-x"></i></button>
                <img src="{{ asset('/images/extra-3.webp') }}" /> 
                <button class="favourite-item action-button">
                    <i class="bi bi-heart unhover-icon"></i>
                    <i class="bi bi-heart-fill hover-icon"></i>
                </button>
            </div>
            <div class="carousel-item">
                <button class="remove-item action-button"><i class="bi bi-x"></i></button>
                <img src="{{ asset('/images/extra-1.webp') }}" /> 
                <button class="favourite-item action-button">
                    <i class="bi bi-heart unhover-icon"></i>
                    <i class="bi bi-heart-fill hover-icon"></i>
                </button>
            </div>
            <div class="carousel-item">
                <button class="remove-item action-button"><i class="bi bi-x"></i></button>
                <img src="{{ asset('/images/extra-2.webp') }}" /> 
                <button class="favourite-item action-button">
                    <i class="bi bi-heart unhover-icon"></i>
                    <i class="bi bi-heart-fill hover-icon"></i>
                </button>
            </div>
            <div class="carousel-item">
                <button class="remove-item action-button"><i class="bi bi-x"></i></button>
                <img src="{{ asset('/images/extra-4.webp') }}" /> 
                <button class="favourite-item action-button">
                    <i class="bi bi-heart unhover-icon"></i>
                    <i class="bi bi-heart-fill hover-icon"></i>
                </button>
            </div>
            <div class="carousel-item">
                <button class="remove-item action-button"><i class="bi bi-x"></i></button>
                <img src="{{ asset('/images/extra-5.webp') }}" /> 
                <button class="favourite-item action-button">
                    <i class="bi bi-heart unhover-icon"></i>
                    <i class="bi bi-heart-fill hover-icon"></i>
                </button>
            </div>
        </div>
        <button aria-label="Previous" class="glider-prev"><i class="bi bi-chevron-left"></i></button>
        <button aria-label="Next" class="glider-next"><i class="bi bi-chevron-right"></i></button>
        <div role="tablist" class="dots"></div>
    </div>
    
</div>
@endsection
@section('footer_css_js')
<script src="{{ asset('js/glider.js') }}"></script>
<script>    
    new Glider(document.querySelector('.glider'), {
        slidesToShow: 4,
        slidesToScroll: 1,
        draggable: true,
        dots: '.dots',
        arrows: {
            prev: '.glider-prev',
            next: '.glider-next'
        }
    })
    var image_sources = []
    var currentIndex = 0
    document.querySelectorAll(".select-image > img").forEach(img => {
        image_sources.push(img.src)
    })
    document.getElementById("left-image-navigate").addEventListener('click', () => {
        currentIndex = currentIndex - 1 < 0 ? image_sources.length-1 : currentIndex - 1
        document.querySelectorAll(".select-image > img").forEach(i => i.classList.remove('selected'))
        document.querySelectorAll(".select-image > img")[currentIndex].classList.add('selected')
        document.getElementById("preview-image").src = image_sources[currentIndex]
    })
    document.getElementById("right-image-navigate").addEventListener('click', () => {
        currentIndex = (currentIndex+1)%image_sources.length
        document.querySelectorAll(".select-image > img").forEach(i => i.classList.remove('selected'))
        document.querySelectorAll(".select-image > img")[currentIndex].classList.add('selected')
        document.getElementById("preview-image").src = image_sources[currentIndex]
    })
    document.querySelectorAll(".select-image > img").forEach(img => {
        img.addEventListener('click', e => {
            document.querySelectorAll(".select-image > img").forEach(i => i.classList.remove('selected'))
            e.target.classList.add('selected')
            document.getElementById("preview-image").src = e.target.src
        })
    })
    document.querySelectorAll(".expandable-section > .section").forEach(section => {
        console.log(section.clientHeight)
        section.addEventListener('click', e => {                               
            document.querySelectorAll(".expandable-section > .section").forEach(s => {
                    if(s !== e.target) { s.classList.remove('expanded') }
            })
            e.target.classList.toggle('expanded')
        })
    })
</script>
@endsection