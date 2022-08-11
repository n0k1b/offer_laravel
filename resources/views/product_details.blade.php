@extends('new_index')
@section('header_css_js')
        <link href="https://fonts.googleapis.com/css?family=Sanchez:400italic,400|Open+Sans:300,400,600,700italic,300italic,400italic,400,700" rel="preconnect" />
		<link href="https://fonts.googleapis.com/css?family=Sanchez:400italic,400|Open+Sans:300,400,600,700italic,300italic,400italic,400,700" rel="stylesheet" as="font" type="text/css" />
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('rakuten/vendor/asos-product.css')}}" />
@endsection
@section('content')
<div class="asos-product single-product pg-in-stock" id="asos-product">
    <section id="core-product" class="core-product-container">
        <div class="layout-width">
            <div id="gallery-content" class="gallery-content-wrapper">
        <div class="product-gallery" role="region" data-bind="attr: {&quot;aria-label&quot;: state.resources.pdp_media_gallery_label }, component: { name: &quot;product-gallery&quot;, params: { state: state,  data: { product: product, rootElement: $element, id: product.id, images: product.images, media: product.media, playerParams: { scene7: { imageServer: &quot;https://images.asos-media.com&quot;, videoServer: &quot;https://video.asos-media.com&quot; }}}}}" aria-label="Product Gallery"><!-- ko if: !isMobile-->
    <div class="gallery-aside-wrapper">
        <!-- ko if: !preventThumbnailDescription -->
            <p id="thumbnailsDescription" data-bind="text: state.resources.pdp_media_gallery_thumbnail_instruction">Select thumbnail to enlarge image</p>
        <!-- /ko -->

        <ul class="thumbnails" data-bind="attr: { 'aria-label': galleryText.thumbnailLabel }" aria-describedby="thumbnailsDescription" aria-label="Product thumbnails">
            <!-- ko foreach: galleryItems-->
                <!-- ko if: $index() > 0  --><!-- /ko -->
            
                <!-- ko if: $index() > 0  -->
                    <li class="image-thumbnail active" data-bind="css: { active: $parent.thumbIndex() === $index() }, attr: { 'aria-current': $parent.thumbIndex() === $index() }" aria-current="true">
                        <button data-bind="click: $parent.selectThumbnail.bind($data, $index())" style="font-family: Arial, Bangla572, sans-serif;">
                            <img class="gallery-image" data-bind="attr: imageSources().thumbnail" sizes="40px" alt="Thumbnail 1 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_240w$&amp;wid=40&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_240w$&amp;wid=40&amp;fit=constrain 40w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_240w$&amp;wid=75&amp;fit=constrain 75w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_240w$&amp;wid=120&amp;fit=constrain 120w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_240w$&amp;wid=168&amp;fit=constrain 168w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_320w$&amp;wid=317&amp;fit=constrain 317w">
                        </button>
                    </li>
                <!-- /ko -->
            
                <!-- ko if: $index() > 0  -->
                    <li class="image-thumbnail" data-bind="css: { active: $parent.thumbIndex() === $index() }, attr: { 'aria-current': $parent.thumbIndex() === $index() }">
                        <button data-bind="click: $parent.selectThumbnail.bind($data, $index())" style="font-family: Arial, Bangla572, sans-serif;">
                            <img class="gallery-image" data-bind="attr: imageSources().thumbnail" sizes="40px" alt="Thumbnail 2 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_240w$&amp;wid=40&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_240w$&amp;wid=40&amp;fit=constrain 40w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_240w$&amp;wid=75&amp;fit=constrain 75w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_240w$&amp;wid=120&amp;fit=constrain 120w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_240w$&amp;wid=168&amp;fit=constrain 168w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_320w$&amp;wid=317&amp;fit=constrain 317w">
                        </button>
                    </li>
                <!-- /ko -->
            
                <!-- ko if: $index() > 0  -->
                    <li class="image-thumbnail" data-bind="css: { active: $parent.thumbIndex() === $index() }, attr: { 'aria-current': $parent.thumbIndex() === $index() }">
                        <button data-bind="click: $parent.selectThumbnail.bind($data, $index())" style="font-family: Arial, Bangla572, sans-serif;">
                            <img class="gallery-image" data-bind="attr: imageSources().thumbnail" sizes="40px" alt="Thumbnail 3 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_240w$&amp;wid=40&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_240w$&amp;wid=40&amp;fit=constrain 40w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_240w$&amp;wid=75&amp;fit=constrain 75w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_240w$&amp;wid=120&amp;fit=constrain 120w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_240w$&amp;wid=168&amp;fit=constrain 168w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_320w$&amp;wid=317&amp;fit=constrain 317w">
                        </button>
                    </li>
                <!-- /ko -->
            
                <!-- ko if: $index() > 0  -->
                    <li class="image-thumbnail" data-bind="css: { active: $parent.thumbIndex() === $index() }, attr: { 'aria-current': $parent.thumbIndex() === $index() }">
                        <button data-bind="click: $parent.selectThumbnail.bind($data, $index())" style="font-family: Arial, Bangla572, sans-serif;">
                            <img class="gallery-image" data-bind="attr: imageSources().thumbnail" sizes="40px" alt="Thumbnail 4 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_240w$&amp;wid=40&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_240w$&amp;wid=40&amp;fit=constrain 40w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_240w$&amp;wid=75&amp;fit=constrain 75w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_240w$&amp;wid=120&amp;fit=constrain 120w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_240w$&amp;wid=168&amp;fit=constrain 168w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_320w$&amp;wid=317&amp;fit=constrain 317w">
                        </button>
                    </li>
                <!-- /ko -->
            <!-- /ko -->
        </ul>

        <!-- ko if : showInteractiveButtons --><!--/ko -->

        <!-- ko if : product && isInStock -->
            <div class="social-share social-share-gallery" data-bind="component: { name: &quot;social-share&quot;, params: { state: state, data: product } }"><button class="link social-share-icon" id="social-share-button" data-bind="click: toggleShareIcons, clickBubble: false, attr: { 'aria-expanded': isVisible() ? 'true' : 'false', 'aria-label': state.resources.pdp_cta_social_share }" aria-controls="share-bar" aria-expanded="false" aria-label="SHARE" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">
    <span class="product-share-icon"></span>
</button>
<div class="share-bar-wrap" data-bind="visible: isVisible" style="display: none;">
    <div class="triangle-up"></div>
    <ul id="share-bar" aria-labelledby="social-share-button">
        <!-- ko if : isRussia --><!-- /ko -->
        <li tabindex="-1"><a data-bind="attr: { href: facebookLink }, click: handleClick" data-id="facebook" aria-label="facebook" class="product-facebook-icon" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.asos.com%2Fau%2Friver-island%2Friver-island-backless-snaffle-loafers-in-stone%2Fprd%2F203218269%3Fctaref%3Dproduct_share_facebook" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;"></a></li>
        <li tabindex="-1"><a data-bind="attr: { href: pinterestLink }, click: handleClick" data-id="pinterest" aria-label="pinterest" class="product-pinterest-icon" href="https://pinterest.com/pin/create/button/?url=https%3A%2F%2Fwww.asos.com%2Fau%2Friver-island%2Friver-island-backless-snaffle-loafers-in-stone%2Fprd%2F203218269%3Fctaref%3Dproduct_share_pinterest&amp;media=https%3A%2F%2Fimages.asos-media.com%2Fproducts%2Friver-island-backless-snaffle-loafers-in-stone%2F203218269-1-stonelight&amp;description=River%20Island%20backless%20snaffle%20loafers%20in%20stone" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;"></a></li>
        <!-- ko if : isMobile --><!-- /ko -->
    </ul>
</div>
</div>
        <!-- /ko -->
    </div>
<!-- /ko -->

<div id="product-gallery" class="product-carousel" role="region" tabindex="-1" data-bind="
        attr: {
            'aria-label': galleryText.carouselLabel, 
            'id': productGalleryId
        }" aria-label="Product carousel">
    <div class="gallery-live-region" aria-live="polite">
        <!-- ko if: ariaLiveText --><!-- /ko -->
    </div>
    <div class="window" data-bind="swipe" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
        <div class="selling-fast" data-bind="visible: showSellingFastLabel" style="display: none;">
            <span class="selling-fast__label" data-bind="text: state.resources.pdp_misc_selling_fast">Selling Fast</span>
        </div>
        <div class="gallery-images" data-bind="foreach: galleryItems, css: { animate : animate() }, style: { width : galleryWidth, marginLeft : galleryPosition }" style="width: 500%; margin-left: -100%;">
            <div class="image-container hide-image zoomable" data-bind="style: { width : $parent.itemWidth, display: $parent.showCarouselControls() ? 'block' : 'none'}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="0" aria-hidden="true" style="width: 20%; display: block;">
                <div class="asos-media spinset imageviewer" data-bind="component: { name: &quot;asos-spin-viewer-prod&quot;, params: { scene7: $parent.playerParams.scene7, viewer: { zoomFactors: $parent.zoomFactors, baseJpgQlt: 80, zoomJpgQlt: 90, handleLoadingErrors: false, showHint: false, maxPixelRatio: 3 }, api: $parent.imageViewerApis()[$index()], messages: $parent.playerParams.messages } }, visible: $parent.imageViewersVisibility()[$index()]" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><div class="asos-media-players amp-relative">
    <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
        <div class="amp-spinner amp-relative">
            <div class="amp-page amp-spin">
                <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                    <div class="amp-hint-container" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">
                        <div class="amp-hint-gesture amp-first">
                            <div class="amp-hint-gesture-img sprite drag"></div>
                        </div>
                        <div class="amp-clear"></div>
                        <div class="amp-hint-gesture amp-first">
                            <span data-bind="text: messages.hintDragText">Drag to view 360</span>
                        </div>
                        <div class="amp-clear"></div>
                    </div>
                </div>
                <div class="amp-page amp-overlay"></div>
                <!-- ko if: !touchDevice -->
                <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="nqvfvu" style="font-family: Arial, Bangla572, sans-serif;">
                    <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                </button>
                <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="nqvfvu">Click to zoom. Use keyboard arrow keys to pan image</p>
                <!-- /ko -->
                <div class="amp-page amp-images"><div class="amp-frame"><div class="fullImageContainer" data-output-width="513" data-output-height="654" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;"><img class="img" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 4 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: visible; width: 100%; height: 100%;"></div></div></div>
            </div>
            <div class="amp-page amp-loading" data-bind="visible: isLoadingPageVisible" style="display: none;">
                <div class="amp-loading-img"></div>
                <span data-bind="text: loadingPercentage() + '%'">0%</span>
            </div>
            <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                <div class="amp-message-container">
                    <div class="amp-message-box">
                        <h2 data-bind="html: messages.errorHeaderText" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Oops!</h2>
                        <p data-bind="html: messages.spinsetErrorMessageText" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Something's gone wrong. Please check your connection and refresh the video.</p>
                        <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Refresh</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                </div>
                <img class="gallery-image" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 4 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: hidden;">
            </div>
        
            <div class="image-container zoomable" data-bind="style: { width : $parent.itemWidth, display: $parent.showCarouselControls() ? 'block' : 'none'}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="1" style="width: 20%; display: block;">
                <div class="asos-media spinset imageviewer" data-bind="component: { name: &quot;asos-spin-viewer-prod&quot;, params: { scene7: $parent.playerParams.scene7, viewer: { zoomFactors: $parent.zoomFactors, baseJpgQlt: 80, zoomJpgQlt: 90, handleLoadingErrors: false, showHint: false, maxPixelRatio: 3 }, api: $parent.imageViewerApis()[$index()], messages: $parent.playerParams.messages } }, visible: $parent.imageViewersVisibility()[$index()]" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><div class="asos-media-players amp-relative">
    <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
        <div class="amp-spinner amp-relative">
            <div class="amp-page amp-spin">
                <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                    <div class="amp-hint-container" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">
                        <div class="amp-hint-gesture amp-first">
                            <div class="amp-hint-gesture-img sprite drag"></div>
                        </div>
                        <div class="amp-clear"></div>
                        <div class="amp-hint-gesture amp-first">
                            <span data-bind="text: messages.hintDragText">Drag to view 360</span>
                        </div>
                        <div class="amp-clear"></div>
                    </div>
                </div>
                <div class="amp-page amp-overlay"></div>
                <!-- ko if: !touchDevice -->
                <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="2qxy8o" style="font-family: Arial, Bangla572, sans-serif;">
                    <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                </button>
                <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="2qxy8o">Click to zoom. Use keyboard arrow keys to pan image</p>
                <!-- /ko -->
                <div class="amp-page amp-images"><div class="amp-frame"><div class="fullImageContainer" data-output-width="513" data-output-height="654" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;"><img class="img" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 1 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: visible; width: 100%; height: 100%;"></div></div></div>
            </div>
            <div class="amp-page amp-loading" data-bind="visible: isLoadingPageVisible" style="display: none;">
                <div class="amp-loading-img"></div>
                <span data-bind="text: loadingPercentage() + '%'">0%</span>
            </div>
            <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                <div class="amp-message-container">
                    <div class="amp-message-box">
                        <h2 data-bind="html: messages.errorHeaderText" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Oops!</h2>
                        <p data-bind="html: messages.spinsetErrorMessageText" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Something's gone wrong. Please check your connection and refresh the video.</p>
                        <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Refresh</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                </div>
                <img class="gallery-image" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 1 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-1-stonelight?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: hidden;">
            </div>
        
            <div class="image-container hide-image zoomable" data-bind="style: { width : $parent.itemWidth, display: $parent.showCarouselControls() ? 'block' : 'none'}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="2" aria-hidden="true" style="width: 20%; display: block;">
                <div class="asos-media spinset imageviewer" data-bind="component: { name: &quot;asos-spin-viewer-prod&quot;, params: { scene7: $parent.playerParams.scene7, viewer: { zoomFactors: $parent.zoomFactors, baseJpgQlt: 80, zoomJpgQlt: 90, handleLoadingErrors: false, showHint: false, maxPixelRatio: 3 }, api: $parent.imageViewerApis()[$index()], messages: $parent.playerParams.messages } }, visible: $parent.imageViewersVisibility()[$index()]" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><div class="asos-media-players amp-relative">
    <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
        <div class="amp-spinner amp-relative">
            <div class="amp-page amp-spin">
                <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                    <div class="amp-hint-container" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">
                        <div class="amp-hint-gesture amp-first">
                            <div class="amp-hint-gesture-img sprite drag"></div>
                        </div>
                        <div class="amp-clear"></div>
                        <div class="amp-hint-gesture amp-first">
                            <span data-bind="text: messages.hintDragText">Drag to view 360</span>
                        </div>
                        <div class="amp-clear"></div>
                    </div>
                </div>
                <div class="amp-page amp-overlay"></div>
                <!-- ko if: !touchDevice -->
                <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="ianm9q" style="font-family: Arial, Bangla572, sans-serif;">
                    <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                </button>
                <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="ianm9q">Click to zoom. Use keyboard arrow keys to pan image</p>
                <!-- /ko -->
                <div class="amp-page amp-images"><div class="amp-frame"><div class="fullImageContainer" data-output-width="513" data-output-height="654" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;"><img class="img" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 2 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: visible; width: 100%; height: 100%;"></div></div></div>
            </div>
            <div class="amp-page amp-loading" data-bind="visible: isLoadingPageVisible" style="display: none;">
                <div class="amp-loading-img"></div>
                <span data-bind="text: loadingPercentage() + '%'">0%</span>
            </div>
            <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                <div class="amp-message-container">
                    <div class="amp-message-box">
                        <h2 data-bind="html: messages.errorHeaderText" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Oops!</h2>
                        <p data-bind="html: messages.spinsetErrorMessageText" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Something's gone wrong. Please check your connection and refresh the video.</p>
                        <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Refresh</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                </div>
                <img class="gallery-image" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 2 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-2?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: hidden;">
            </div>
        
            <div class="image-container hide-image zoomable" data-bind="style: { width : $parent.itemWidth, display: $parent.showCarouselControls() ? 'block' : 'none'}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="3" aria-hidden="true" style="width: 20%; display: block;">
                <div class="asos-media spinset imageviewer" data-bind="component: { name: &quot;asos-spin-viewer-prod&quot;, params: { scene7: $parent.playerParams.scene7, viewer: { zoomFactors: $parent.zoomFactors, baseJpgQlt: 80, zoomJpgQlt: 90, handleLoadingErrors: false, showHint: false, maxPixelRatio: 3 }, api: $parent.imageViewerApis()[$index()], messages: $parent.playerParams.messages } }, visible: $parent.imageViewersVisibility()[$index()]" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><div class="asos-media-players amp-relative">
    <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
        <div class="amp-spinner amp-relative">
            <div class="amp-page amp-spin">
                <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                    <div class="amp-hint-container" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">
                        <div class="amp-hint-gesture amp-first">
                            <div class="amp-hint-gesture-img sprite drag"></div>
                        </div>
                        <div class="amp-clear"></div>
                        <div class="amp-hint-gesture amp-first">
                            <span data-bind="text: messages.hintDragText">Drag to view 360</span>
                        </div>
                        <div class="amp-clear"></div>
                    </div>
                </div>
                <div class="amp-page amp-overlay"></div>
                <!-- ko if: !touchDevice -->
                <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="tqjszu" style="font-family: Arial, Bangla572, sans-serif;">
                    <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                </button>
                <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="tqjszu">Click to zoom. Use keyboard arrow keys to pan image</p>
                <!-- /ko -->
                <div class="amp-page amp-images"><div class="amp-frame"><div class="fullImageContainer" data-output-width="513" data-output-height="654" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;"><img class="img" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 3 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: visible; width: 100%; height: 100%;"></div></div></div>
            </div>
            <div class="amp-page amp-loading" data-bind="visible: isLoadingPageVisible" style="display: none;">
                <div class="amp-loading-img"></div>
                <span data-bind="text: loadingPercentage() + '%'">0%</span>
            </div>
            <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                <div class="amp-message-container">
                    <div class="amp-message-box">
                        <h2 data-bind="html: messages.errorHeaderText" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Oops!</h2>
                        <p data-bind="html: messages.spinsetErrorMessageText" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Something's gone wrong. Please check your connection and refresh the video.</p>
                        <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Refresh</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                </div>
                <img class="gallery-image" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 3 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-3?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: hidden;">
            </div>
        
            <div class="image-container hide-image zoomable" data-bind="style: { width : $parent.itemWidth, display: $parent.showCarouselControls() ? 'block' : 'none'}, css: { 'zoomable': $parent.imageData(), 'hide-image': $parent.thumbIndex() !== $index() }, attr: { 'data-gallery-index': $index, 'aria-hidden': $parent.thumbIndex() !== $index() }" data-gallery-index="4" aria-hidden="true" style="width: 20%; display: block;">
                <div class="asos-media spinset imageviewer" data-bind="component: { name: &quot;asos-spin-viewer-prod&quot;, params: { scene7: $parent.playerParams.scene7, viewer: { zoomFactors: $parent.zoomFactors, baseJpgQlt: 80, zoomJpgQlt: 90, handleLoadingErrors: false, showHint: false, maxPixelRatio: 3 }, api: $parent.imageViewerApis()[$index()], messages: $parent.playerParams.messages } }, visible: $parent.imageViewersVisibility()[$index()]" style="touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><div class="asos-media-players amp-relative">
    <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
        <div class="amp-spinner amp-relative">
            <div class="amp-page amp-spin">
                <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                    <div class="amp-hint-container" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">
                        <div class="amp-hint-gesture amp-first">
                            <div class="amp-hint-gesture-img sprite drag"></div>
                        </div>
                        <div class="amp-clear"></div>
                        <div class="amp-hint-gesture amp-first">
                            <span data-bind="text: messages.hintDragText">Drag to view 360</span>
                        </div>
                        <div class="amp-clear"></div>
                    </div>
                </div>
                <div class="amp-page amp-overlay"></div>
                <!-- ko if: !touchDevice -->
                <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="2o60t" style="font-family: Arial, Bangla572, sans-serif;">
                    <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                </button>
                <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="2o60t">Click to zoom. Use keyboard arrow keys to pan image</p>
                <!-- /ko -->
                <div class="amp-page amp-images"><div class="amp-frame"><div class="fullImageContainer" data-output-width="513" data-output-height="654" style="position: absolute; top: 0px; left: 0px; width: 513px; height: 654px;"><img class="img" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 4 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: visible; width: 100%; height: 100%;"></div></div></div>
            </div>
            <div class="amp-page amp-loading" data-bind="visible: isLoadingPageVisible" style="display: none;">
                <div class="amp-loading-img"></div>
                <span data-bind="text: loadingPercentage() + '%'">0%</span>
            </div>
            <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                <div class="amp-message-container">
                    <div class="amp-message-box">
                        <h2 data-bind="html: messages.errorHeaderText" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Oops!</h2>
                        <p data-bind="html: messages.spinsetErrorMessageText" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Something's gone wrong. Please check your connection and refresh the video.</p>
                        <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Refresh</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                </div>
                <img class="gallery-image" data-bind="attr: imageSources().hero, event: { onload: window.asos.performance.markAndMeasure('pdp:gallery_image_'+$index()+'_displayed')}" sizes="(max-width: 720px) 100vw, (min-width: 720px) 513px" alt="River Island backless snaffle loafers in stone, 4 of 4" src="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_640w$&amp;wid=513&amp;fit=constrain" srcset="https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_640w$&amp;wid=513&amp;fit=constrain 513w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_750w$&amp;wid=750&amp;fit=constrain 750w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_960w$&amp;wid=952&amp;fit=constrain 952w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_1280w$&amp;wid=1125&amp;fit=constrain 1125w,https://images.asos-media.com/products/river-island-backless-snaffle-loafers-in-stone/203218269-4?$n_1920w$&amp;wid=1926&amp;fit=constrain 1926w" style="visibility: hidden;">
            </div>
        </div>
        <!-- ko if: showCarouselControls -->
            <button class="arrow-button arrow-button-right" aria-controls="product-gallery" aria-label="Show next image" data-bind="
                    click:moveRight,
                    markAndMeasure: 'pdp:gallery_swiping_right_interactive',
                    attr: {
                        'aria-label': state.resources.pdp_media_gallery_carousel_next,
                        'aria-controls': productGalleryId
                    }" style="font-family: Arial, Bangla572, sans-serif;">
                <span aria-hidden="true" class="product-chevron-right-large-outlined"></span>
            </button>
            <button class="arrow-button arrow-button-left" aria-controls="product-gallery" aria-label="Show previous image" data-bind="
                    click: moveLeft,
                    markAndMeasure: 'pdp:gallery_swiping_left_interactive',
                    attr: {
                        'aria-label': state.resources.pdp_media_gallery_carousel_previous,
                        'aria-controls': productGalleryId
                    }" style="font-family: Arial, Bangla572, sans-serif;">
                <span aria-hidden="true" class="product-chevron-left-large-outlined"></span>
            </button>
            <!-- ko if: isMobile--><!-- /ko -->
        <!-- /ko -->
    </div>
    <div class="asos-media catwalk" style="display: none" data-bind="component: { name: &quot;asos-video-player-prod&quot;, params: { scene7: playerParams.scene7, player: { startInFullScreen: startVideoInFullScreen, closeOnFullScreenExited: closeVideoOnFullScreenExited, initialLoopCount: 2 }, api: videoPlayerApi, messages: playerParams.messages } }, visible: isVideoVisible"><div class="asos-media-players">
    <div class="amp-video-player amp-relative">
        <video class="amp-page amp-video-element" data-bind="foreach: sources" controls="controls" muted=""></video>
        <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
            <div class="amp-message-container">
                <div class="amp-message-box">
                    <h2 data-bind="html: messages.errorHeaderText" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Oops!</h2>
                    <p data-bind="html: messages.errorMessageText" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Something's gone wrong. Please check your connection and refresh the video.</p>
                    <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Refresh</div>
                </div>
            </div>
        </div>
        <div class="amp-page amp-page-message amp-unsupported-page" data-bind="visible: isUnsupportedPageVisible" style="display: none;">
            <div class="amp-message-container">
                <div class="amp-message-box">
                    <h2 data-bind="html: messages.unsupportedHeaderText" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Your browser is not supported</h2>
                    <p data-bind="html: messages.unsupportedMessageText" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Please update your browser to view this video</p>
                    <div class="amp-button amp-button-black" data-bind="html: messages.closeButtonText, click: closeButtonClicked" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Close</div>
                </div>
            </div>
        </div>
    </div>
</div></div>
    <div class="asos-media spinset spinviewer" style="display: none; touch-action: pan-y; user-select: none; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" data-bind="component: { name: &quot;asos-spin-viewer-prod&quot;, params: { scene7: playerParams.scene7, viewer: { spinSpeed: spinSpeed, zoomFactors: zoomFactors, reverseVerticalDirection: false, reverseHorizontalDirection: false, baseJpgQlt: 80, zoomJpgQlt: 90, showHint: showSpinViewerContainerHint, useInitialAnimation: true, animationIntervalStart: 100, animationIntervalPeak: 100, animationFramesCount: 5, preloadingTimeout: 30000 }, api: spinViewerApi, messages: playerParams.messages } }, visible: isSpinViewerVisible, css: { &quot;zoomable&quot;: isSpinViewerLoadedWithoutErrors }"><div class="asos-media-players amp-relative">
    <div class="amp-spin-viewer amp-relative" data-bind="css: { &quot;pannable&quot;: isPannable() }">
        <div class="amp-spinner amp-relative">
            <div class="amp-page amp-spin">
                <div class="amp-page amp-hint" data-bind="fadeVisible: isHintVisible" style="display: none;">
                    <div class="amp-hint-container" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">
                        <div class="amp-hint-gesture amp-first">
                            <div class="amp-hint-gesture-img sprite drag"></div>
                        </div>
                        <div class="amp-clear"></div>
                        <div class="amp-hint-gesture amp-first">
                            <span data-bind="text: messages.hintDragText">Drag to view 360</span>
                        </div>
                        <div class="amp-clear"></div>
                    </div>
                </div>
                <div class="amp-page amp-overlay"></div>
                <!-- ko if: !touchDevice -->
                <span class="sr-only" aria-live="polite" data-bind="text: zoomLevelText"></span>
                <button class="amp-zoom" data-bind="attr: { 'aria-describedby': hintId }, click: handleClick, event: { keydown: handleKeyDown, keyup: handleKeyUp, blur: handleOnBlur, focus: handleOnFocus }, clickBubble: false" aria-describedby="5tdz19" style="font-family: Arial, Bangla572, sans-serif;">
                    <span class="sprite zoomPlus" data-bind="css: { zoomPlus: zoomPlus, zoomMinus: zoomMinus }"></span>
                </button>
                <p class="zoom-hint" data-bind="text: messages.zoomHint, css: { showHint: showHint }, attr: { id: hintId }" aria-hidden="true" id="5tdz19">Click to zoom. Use keyboard arrow keys to pan image</p>
                <!-- /ko -->
                <div class="amp-page amp-images"></div>
            </div>
            <div class="amp-page amp-loading" data-bind="visible: isLoadingPageVisible" style="display: none;">
                <div class="amp-loading-img"></div>
                <span data-bind="text: loadingPercentage() + '%'">0%</span>
            </div>
            <div class="amp-page amp-page-message amp-error-page" data-bind="visible: isErrorPageVisible" style="display: none;">
                <div class="amp-message-container">
                    <div class="amp-message-box">
                        <h2 data-bind="html: messages.errorHeaderText" style="font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Oops!</h2>
                        <p data-bind="html: messages.spinsetErrorMessageText" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Something's gone wrong. Please check your connection and refresh the video.</p>
                        <div class="amp-button amp-button-black" data-bind="html: messages.refreshButtonText, click: refreshButtonClicked" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla572, sans-serif;">Refresh</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                </div>
</div>

<!-- ko if: isMobile--><!-- /ko -->
</div>
      </div>
        <div class="layout-aside">
            <div class="aside-content">
                <div class="product-hero">
                    <h1 style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla518, sans-serif;">Nike Air Max Dawn sneakers in white/malachite</h1>
        <script type="text/javascript">window.asos.performance.markAndMeasure('pdp:title_displayed');</script>
                    <!-- ko if: state.productData.isInStock && product && isMobile --><!-- /ko -->
                    <div class="product-price" id="product-price" data-bind="component: { name: &quot;product-price&quot;, params: {state: state, showGermanVatMessage: false, isDisplayPrice: true } }"><div class="grid-row rendered price-container">
          <span class="sr-in-doc-flow" aria-live="polite" data-bind="text: getAriaLabel()"> $210.00 </span>
         
        </div>
       
         
                 
        
                    <div id="product-promo-default" data-bind="style: { display: !state.isPromotable() ? &quot;block&quot; : &quot;none&quot;}" style="display: none;"></div>
                  </div>
            </div>
            <section>
                <div class="colour-size colour-component">
                    <div class="grid-row colour-section">
                        <label for="colour-select-201492129" class="disabled">COLOUR:</label>
                        <span class="product-colour" >White/Green</span>
                      
                    </div>
                </div>
            </section>
            <section>
                <div class="colour-size size-component">
                    <div class="size-section" data-bind="visible: sizeSectionVisible()">
                        <div style="display: table; width: 100%">
                            <label for="main-size-select-0" style="display: table-cell; vertical-align: bottom; font-family: futura-pt-n7, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla215, sans-serif;">SIZE:</label>
                            <div style="display: table-cell; vertical-align: top; width: 100%">
                               
                                <div class="fit-analytics upper" style="line-height: 1.57; letter-spacing: 0.4px; float: right;">
                                    <div class="table" style="font-family: futura-pt-n4, futura-pt, Tahoma, Geneva, Verdana, Arial, Bangla215, sans-serif;">
                                        <div class="cell" >
                                            <div class="circle" style="float: left">
                                                <span class="no-recommendation"></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- /ko -->
                            </div>
                        </div>
                        <!-- ko if: !isOneSize -->
                       
                        <!-- /ko -->
                        <div class="colour-size-select">
                            <select id="main-size-select-0"><option value="">Please select</option><option value="">AU 6</option><option value="">AU 6.5</option><option value="">AU 7</option><option value="" disabled="">AU 7.5 - Out of stock</option><option value="" disabled="">AU 8 - Out of stock</option><option value="" disabled="">AU 8.5 - Out of stock</option><option value="" disabled="">AU 9 - Out of stock</option><option value="" disabled="">AU 9.5 - Out of stock</option><option value="" disabled="">AU 10 - Out of stock</option><option value="" disabled="">AU 10.5 - Out of stock</option><option value="" disabled="">AU 11 - Out of stock</option><option value="" disabled="">AU 11.5 - Out of stock</option><option value="" disabled="">AU 12 - Out of stock</option><option value="" disabled="">AU 13 - Out of stock</option></select>
                            <!-- ko if: noSizeSelected() && !isDesktopMixMatch --><!-- /ko -->
                        </div>
                    </div>
                   
                </div>
            </section>
        </div>

        </div>
    </section>
</div>

@endsection