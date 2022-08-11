@extends('new_index')
@section('header_css_js')
        <link href="https://fonts.googleapis.com/css?family=Sanchez:400italic,400|Open+Sans:300,400,600,700italic,300italic,400italic,400,700" rel="preconnect" />
		<link href="https://fonts.googleapis.com/css?family=Sanchez:400italic,400|Open+Sans:300,400,600,700italic,300italic,400italic,400,700" rel="stylesheet" as="font" type="text/css" />
		<link rel="stylesheet" href="{{asset('topCashBack/bundles/static/css/base-3c7ce6f08d.css')}}" type="text/css"  />
		<link rel="stylesheet" href="{{asset('topCashBack/bundles/static/css/header-ea25c623bc.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('topCashBack/css/gecko-css/level-0/fancybox/fancyboxoverridesnap-35cc54b199.css')}}" type="text/css" />
		<link rel="stylesheet" href="{{asset('topCashBack/bundles/static/css/v2/merchant-8bebe5ea45.css')}}" type="text/css" />
@endsection
@section('content')

<form method="post" >
				
	
    <div class="gecko-main" style="width: 1250px">
    
        <div class="gecko-primary" style="width: 100%">
            <div class="gecko-single-container">
                <div class="cashback-h1-outer-container">
                    <div class="cashback-h1-container jsFontSizing">
                        <h1>
                            <span data-localizer="ignore">Yellow</span>
                            Cash Back Offers & Discounts
                        </h1>
                    </div>
                </div>
                <div
                    id="ctl00_GeckoTwoColPrimary_merchantPnl_pnlMerchantHeader"
                    class="gecko-merchant-background"
                    style="background-image:url({{asset('images/yellow_banner.webp')}});background-size:contain"
                >
                    <div class="gecko-logo-main-full-width">
                        <img id="ctl00_GeckoTwoColPrimary_merchantPnl_imgMerchantLogo" src="{{asset('images/yellow.png')}}" alt="Yellow Logo" />
                    </div>
                </div>
                <div id="ctl00_GeckoTwoColPrimary_merchantPnl_pnlNewMerchant" class="panel-merchant-wrap">
                    <div id="ctl00_GeckoTwoColPrimary_merchantPnl_newMerchantPanel" class="gecko-merchant-panel">
                        <div id="ctl00_GeckoTwoColPrimary_merchantPnl_pnlNewMerchantPanel" class="merchant-panel">
                            <div class="merchant-signup-text">
                                <h2 id="ctl00_GeckoTwoColPrimary_merchantPnl_lblNewMerchantHeader" class="merchant-panel-description">Get up to 8% of your purchase back when you shop with Yellow</h2>
                            </div>
                           
                        </div>
                        <div id="ctl00_GeckoTwoColPrimary_merchantPnl_tempSignUp" class="join-form">
                            <link rel="stylesheet" href="{{asset('topCashBack')}}/bundles/static/css/join-form-4173c64af7.css" type="text/css" />
                            <form action="https://www.topCashBack.com/action_page.php">
                                <div id="formContainer" >
                                  
                                   
                                    <button class="signupbtn g-recaptcha" style="    padding: 14px 30px 14px 30px" >Get Cashback Now</button>
                                   
                                </div>
                            </form>
                        
                        </div>
                    </div>
                    
                </div>
                
                
            </div>
            <div class="gecko-deeplink-list-title">
                <span id="ctl00_GeckoTwoColPrimary_merchantCodePnl_lblDealsVouchers" Class="gecko-deeplink-list-title">Products</span>
            </div>
            <div>
                
                  
                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>

                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>
                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>
                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>
                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>
                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>
                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>
                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>
                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>
                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>

                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>

                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>

                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>

                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>

                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>

                        <article class="asos-article">
                            <a class="asos-article-link">
                                <div class="asos-article-box">
                                    <img src="{{ asset('/images/shoe.webp') }}">
                                </div>
                                <div class="asos-article-product-title">
                                    <p>Adidas Original Retrocopy F2 Sneakers</p>
                                </div>
                                <p style="height: 40px">
                                    $120
                                </p>
                            </a>
                            <button type="button" class="asos-article-button">
                                
                                    <i class="fa fa-solid fa-heart" aria-hidden="true"></i>
                            
                            </button>

                        </article>
                  

                    

                
                
               
            </div>
            

         
            <input id="hMerchantName" type="hidden" name="country" value="Yellow" />
        </div>
        
        <div class="clearfix"></div>
        <div class="gecko-primary-sub"></div>
    </div>
    <div class="clearfix"></div>
    <link rel="stylesheet" href="{{asset('topCashBack')}}/bundles/static/css/footer-384d409715.css" type="text/css" />
    <div id="ctl00_ctl14_DynamicSection_DynamicPanel" class="dynamic-section"></div>
    <!-- <div class="link-section">
        <div class="footer-links-column-wrapper">
            <div class="footer-links-panel">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_HereToHelpSection_lblHeader">Here to help</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_HereToHelpSection_hypGettingStarted" class="link-item" href="https://www.topCashBack.com/gettingstarted">Getting Started</a>
                    <a id="ctl00_ctl14_LinkSection_HereToHelpSection_hypCustomerService" class="link-item" href="https://www.topCashBack.com/account/enquiries/">Customer Service</a>
                    <a id="ctl00_ctl14_LinkSection_HereToHelpSection_hypFAQs" class="link-item" href="https://www.topCashBack.com/help/">FAQs</a>
                </div>
            </div>
            <div class="footer-links-panel">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_lblHeader">Other ways to save</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_BlogLink" class="link-item" href="https://www.topCashBack.com/blog/">Blog</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_BrowserExtensionLink" class="link-item" href="https://www.topCashBack.com/browser-extension">Browser Extension</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_MobileAppLink" class="link-item" href="https://www.topCashBack.com/app">Mobile App</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_TopGiftcardsLink" class="link-item" href="https://www.topCashBack.com/top-gift-cards/">Gift Cards</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_TrendingNowLink" class="link-item" href="https://www.topCashBack.com/trending/">Trending Now</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_BlackFridayDealsLink" class="link-item" href="https://www.topCashBack.com/dyn/black-friday-deals">Black Friday Deals</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_CyberMondayDealsLink" class="link-item" href="https://www.topCashBack.com/dyn/cyber-monday-deals">Cyber Monday Deals</a>
                    <a id="ctl00_ctl14_LinkSection_OtherWaysToSaveSection_GreenMondayDealsLink" class="link-item" href="https://www.topCashBack.com/dyn/green-monday-deals">Green Monday Deals</a>
                </div>
            </div>
            <div class="footer-links-panel">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_GetToKnowUsSection_lblHeader">Get to know us</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_GetToKnowUsSection_hypAbouttopCashBack" class="link-item" href="https://www.topCashBack.com/about" target="_blank">About topCashBack</a>
                    <a id="ctl00_ctl14_LinkSection_GetToKnowUsSection_hypEbatesVsOurselves" class="link-item" href="https://www.topCashBack.com/ebates">Rakuten Vs Ourselves</a>
                </div>
            </div>
            <div class="footer-links-panel">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_GetInvolvedSection_lblHeader">Get involved</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_GetInvolvedSection_hypAffiliateProgram" class="link-item" href="https://www.topCashBack.com/dyn/affiliate-program">Affiliate Program</a>
                    <a id="ctl00_ctl14_LinkSection_GetInvolvedSection_hypPressOffice" class="link-item" href="https://www.topCashBack.com/press-center">Press Office</a>
                    <a id="ctl00_ctl14_LinkSection_GetInvolvedSection_hypInTheNews" class="link-item" href="https://www.topCashBack.com/blog/cat/in-the-news">In the News</a>
                    <a id="ctl00_ctl14_LinkSection_GetInvolvedSection_hypVulnerabilityDisclosure" class="link-item" href="https://www.topCashBack.com/dyn/vulnerability-disclosure-policy">Vulnerability Disclosure</a>
                </div>
            </div>
            <div class="footer-links-panel footer-links-panel-last">
                <div class="link-header footer-plus-icon gecko-weight-600">
                    <span id="ctl00_ctl14_LinkSection_LegalStuffSection_lblHeader">Legal stuff</span>
                </div>
                <div class="link-body">
                    <a id="ctl00_ctl14_LinkSection_LegalStuffSection_hypPrivacy" class="link-item" href="https://www.topCashBack.com/privacy">Privacy Policy</a>
                    <a id="ctl00_ctl14_LinkSection_LegalStuffSection_hypTermsAndConditions" class="link-item" href="https://www.topCashBack.com/terms">Terms & Conditions</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="legal-social-section">
        <div class="footer-social-legal-wrapper">
            <div class="legal-social-panel">
                <span id="ctl00_ctl14_LegalSocialSection_lblLegal">© 2005 - 2022 Top Online Partners Group Limited</span>
            </div>
            <div class="legal-social-panel global-sites">
                <span id="ctl00_ctl14_LegalSocialSection_lblGlobalSites">Global sites</span>
                <a id="ctl00_ctl14_LegalSocialSection_hypUk" title="UK" class="global-site-link" rel="noopener" href="https://www.topCashBack.co.uk/" target="_blank">UK</a>
                <a id="ctl00_ctl14_LegalSocialSection_hypChina" title="China" class="global-site-link" rel="noopener" href="https://www.topCashBack.cn/" target="_blank">CN</a>
                <a id="ctl00_ctl14_LegalSocialSection_hypJapan" title="Japan" class="global-site-link" rel="noopener" href="https://www.topCashBack.jp/" target="_blank">JP</a>
                <a id="ctl00_ctl14_LegalSocialSection_hypGermany" title="Germany" class="global-site-link" rel="noopener" href="https://www.topCashBack.de/" target="_blank">DE</a>
            </div>
            <div id="LocalizerWidget" class="legal-social-panel localizer-panel footer-widget-panel" style="visibility:hidden">
                <span>Site language</span>
                <div id="tbLanguageWidget" class="footer-widget"></div>
            </div>
            <div class="legal-social-panel social-links">
                <a id="ctl00_ctl14_LegalSocialSection_FacebookLink" title="Facebook" class="footer-social-icon footer-icon-facebook" rel="noopener" href="https://www.facebook.com/topCashBackUSA" target="_blank"></a>
                <a id="ctl00_ctl14_LegalSocialSection_TwitterLink" title="Twitter" class="footer-social-icon footer-icon-twitter" rel="noopener" href="https://twitter.com/topCashBackusa" target="_blank"></a>
                <a id="ctl00_ctl14_LegalSocialSection_LinkedinLink" title="LinkedIn" class="footer-social-icon footer-icon-linkedin" rel="noopener" href="https://www.linkedin.com/company/topCashBack" target="_blank"></a>
                <a id="ctl00_ctl14_LegalSocialSection_InstagramLink" title="Instagram" class="footer-social-icon footer-icon-instagram" rel="noopener" href="https://www.instagram.com/topCashBackusa" target="_blank"></a>
                <a id="ctl00_ctl14_LegalSocialSection_PinterestLink" title="Pinterest" class="footer-social-icon footer-icon-pinterest" rel="noopener" href="https://www.pinterest.com/topCashBackUSA/" target="_blank"></a>
            </div>
        </div>
    </div> -->
    

    
</form>
@endsection
@section('footer_css_js')
<style>
    .swiper-slide-active {
        width: 66% !important;
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