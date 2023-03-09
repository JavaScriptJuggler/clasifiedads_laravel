@extends('frontend.layout.app')
@section('content')
    <!--=====================================
                        BANNER PART START
            =======================================-->
    <section class="banner-part">
        <div class="container">
            <div class="banner-content">
                <h1>You can #Buy, #Rent, #Booking anything from here.</h1>
                <p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs
                    and more in the world.</p>
                <a href="ad-list-column3.html" class="btn btn-outline">
                    <i class="fas fa-eye"></i>
                    <span>Show all ads</span>
                </a>
            </div>
        </div>
    </section>
    <!--=====================================
                            BANNER PART END
                =======================================-->


    <!--=====================================
                            SUGGEST PART START
                =======================================-->
    <section class="suggest-part">
        <div class="container">
            <div class="suggest-slider slider-arrow">
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/automobile.png" alt="car">
                    <h6>automobile</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/furniture.png" alt="furniture">
                    <h6>furniture</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/properties.png" alt="house">
                    <h6>properties</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/fashion.png" alt="food">
                    <h6>fashion</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/electronics.png" alt="cycle">
                    <h6>electronics</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/hospitality.png" alt="clothes">
                    <h6>hospitality</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/gadgets.png" alt="computer">
                    <h6>gadgets</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/education.png" alt="phone">
                    <h6>education</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/software.png" alt="scooter">
                    <h6>software</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/food.png" alt="television">
                    <h6>food</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/services.png" alt="truck">
                    <h6>services</h6>
                    <p>(4,521) ads</p>
                </a>
                <a href="ad-list-column3.html" class="suggest-card">
                    <img src="/frontend_assets/images/suggest/animals.png" alt="pet">
                    <h6>animals</h6>
                    <p>(4,521) ads</p>
                </a>
            </div>
        </div>
    </section>
    <!--=====================================
                            SUGGEST PART END
                =======================================-->


    <!--=====================================
                            FEATURE PART START
                =======================================-->
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5">
                    <div class="section-side-heading">
                        <h2>Find your needs in our best <span>Featured Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur fugiat eaque alias nobis doloremque culpa nam.
                        </p>
                        <a href="ad-list-column3.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all featured</span>
                        </a>
                    </div>
                </div>
                <div class="col-md-7 col-lg-7">
                    <div class="feature-card-slider slider-arrow">
                        <div class="feature-card">
                            <a href="#" class="feature-img">
                                <img src="/frontend_assets/images/product/10.jpg" alt="feature">
                            </a>
                            <div class="cross-inline-badge feature-badge">
                                <span>featured</span>
                                <i class="fas fa-book-open"></i>
                            </div>
                            <button type="button" class="feature-wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <div class="feature-content">
                                <ol class="breadcrumb feature-category">
                                    <li><span class="flat-badge rent">rent</span></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">private car</li>
                                </ol>
                                <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum
                                        maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                <div class="feature-meta">
                                    <span class="feature-price">$1200<small>/Monthly</small></span>
                                    <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <a href="#" class="feature-img">
                                <img src="/frontend_assets/images/product/01.jpg" alt="feature">
                            </a>
                            <div class="cross-inline-badge feature-badge">
                                <span>featured</span>
                                <i class="fas fa-book-open"></i>
                            </div>
                            <button type="button" class="feature-wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <div class="feature-content">
                                <ol class="breadcrumb feature-category">
                                    <li><span class="flat-badge booking">booking</span></li>
                                    <li class="breadcrumb-item"><a href="#">Property</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">House</li>
                                </ol>
                                <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum
                                        maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                <div class="feature-meta">
                                    <span class="feature-price">$800<small>/perday</small></span>
                                    <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <a href="#" class="feature-img">
                                <img src="/frontend_assets/images/product/08.jpg" alt="feature">
                            </a>
                            <div class="cross-inline-badge feature-badge">
                                <span>featured</span>
                                <i class="fas fa-book-open"></i>
                            </div>
                            <button type="button" class="feature-wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <div class="feature-content">
                                <ol class="breadcrumb feature-category">
                                    <li><span class="flat-badge sale">sale</span></li>
                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">iphone</li>
                                </ol>
                                <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum
                                        maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                <div class="feature-meta">
                                    <span class="feature-price">$1150<small>/Negotiable</small></span>
                                    <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <a href="#" class="feature-img">
                                <img src="/frontend_assets/images/product/06.jpg" alt="feature">
                            </a>
                            <div class="cross-inline-badge feature-badge">
                                <span>featured</span>
                                <i class="fas fa-book-open"></i>
                            </div>
                            <button type="button" class="feature-wish">
                                <i class="fas fa-heart"></i>
                            </button>
                            <div class="feature-content">
                                <ol class="breadcrumb feature-category">
                                    <li><span class="flat-badge sale">sale</span></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cycle</li>
                                </ol>
                                <h3 class="feature-title"><a href="ad-details-left.html">Unde eveniet ducimus nostrum
                                        maiores soluta temporibus ipsum dolor sit amet.</a></h3>
                                <div class="feature-meta">
                                    <span class="feature-price">$455<small>/fixed</small></span>
                                    <span class="feature-time"><i class="fas fa-clock"></i>56 minute ago</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="feature-thumb-slider">
                        <div class="feature-thumb"><img src="/frontend_assets/images/product/10.jpg" alt="feature">
                        </div>
                        <div class="feature-thumb"><img src="/frontend_assets/images/product/01.jpg" alt="feature">
                        </div>
                        <div class="feature-thumb"><img src="/frontend_assets/images/product/08.jpg" alt="feature">
                        </div>
                        <div class="feature-thumb"><img src="/frontend_assets/images/product/06.jpg" alt="feature">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                            FEATURE PART END
                =======================================-->


    <!--=====================================
                            RECOMEND PART START
                =======================================-->
    <section class="section recomend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Our Recommend <span>Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="recomend-slider slider-arrow">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/01.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">booking</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Duplex House</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1500<span>/Per Day</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/03.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">stationary</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">books</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$470<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/10.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge rent">rent</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">private car</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$3300<span>/per month</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/09.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">animals</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cat</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$900<span>/Negotiable</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/02.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-clipboard-check"></i>
                                    <span>recommend</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">fashion</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">shoes</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$384<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-50">
                        <a href="ad-list-column3.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all recommend</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                            RECOMEND PART START
                =======================================-->


    <!--=====================================
                            TREND PART START
                =======================================-->
    <section class="section trend-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Popular Trending <span>Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-11 col-lg-8 col-xl-6">
                    <div class="product-card standard">
                        <div class="product-media">
                            <div class="product-img">
                                <img src="/frontend_assets/images/product/01.jpg" alt="product">
                            </div>
                            <div class="cross-vertical-badge product-badge">
                                <i class="fas fa-bolt"></i>
                                <span>trending</span>
                            </div>
                            <div class="product-type">
                                <span class="flat-badge booking">booking</span>
                            </div>
                            <ul class="product-action">
                                <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <ol class="breadcrumb product-category">
                                <li><i class="fas fa-tags"></i></li>
                                <li class="breadcrumb-item"><a href="#">property</a></li>
                                <li class="breadcrumb-item active" aria-current="page">house</li>
                            </ol>
                            <h5 class="product-title">
                                <a href="ad-details-right.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                            </h5>
                            <div class="product-meta">
                                <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                <span><i class="fas fa-clock"></i>30 min ago</span>
                            </div>
                            <div class="product-info">
                                <h5 class="product-price">$974<span>/per day</span></h5>
                                <div class="product-btn">
                                    <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                    <button type="button" title="Wishlist" class="far fa-heart"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-8 col-xl-6">
                    <div class="product-card standard">
                        <div class="product-media">
                            <div class="product-img">
                                <img src="/frontend_assets/images/product/02.jpg" alt="product">
                            </div>
                            <div class="cross-vertical-badge product-badge">
                                <i class="fas fa-bolt"></i>
                                <span>trending</span>
                            </div>
                            <div class="product-type">
                                <span class="flat-badge sale">sale</span>
                            </div>
                            <ul class="product-action">
                                <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <ol class="breadcrumb product-category">
                                <li><i class="fas fa-tags"></i></li>
                                <li class="breadcrumb-item"><a href="#">fashion</a></li>
                                <li class="breadcrumb-item active" aria-current="page">shoes</li>
                            </ol>
                            <h5 class="product-title">
                                <a href="ad-details-right.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                            </h5>
                            <div class="product-meta">
                                <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                <span><i class="fas fa-clock"></i>30 min ago</span>
                            </div>
                            <div class="product-info">
                                <h5 class="product-price">$384<span>/fixed</span></h5>
                                <div class="product-btn">
                                    <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                    <button type="button" title="Wishlist" class="far fa-heart"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-8 col-xl-6">
                    <div class="product-card standard">
                        <div class="product-media">
                            <div class="product-img">
                                <img src="/frontend_assets/images/product/03.jpg" alt="product">
                            </div>
                            <div class="cross-vertical-badge product-badge">
                                <i class="fas fa-bolt"></i>
                                <span>trending</span>
                            </div>
                            <div class="product-type">
                                <span class="flat-badge sale">sale</span>
                            </div>
                            <ul class="product-action">
                                <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <ol class="breadcrumb product-category">
                                <li><i class="fas fa-tags"></i></li>
                                <li class="breadcrumb-item"><a href="#">stationary</a></li>
                                <li class="breadcrumb-item active" aria-current="page">book</li>
                            </ol>
                            <h5 class="product-title">
                                <a href="ad-details-right.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                            </h5>
                            <div class="product-meta">
                                <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                <span><i class="fas fa-clock"></i>30 min ago</span>
                            </div>
                            <div class="product-info">
                                <h5 class="product-price">$78<span>/Negotiable</span></h5>
                                <div class="product-btn">
                                    <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                    <button type="button" title="Wishlist" class="far fa-heart"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-8 col-xl-6">
                    <div class="product-card standard">
                        <div class="product-media">
                            <div class="product-img">
                                <img src="/frontend_assets/images/product/04.jpg" alt="product">
                            </div>
                            <div class="cross-vertical-badge product-badge">
                                <i class="fas fa-bolt"></i>
                                <span>trending</span>
                            </div>
                            <div class="product-type">
                                <span class="flat-badge sale">sale</span>
                            </div>
                            <ul class="product-action">
                                <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <ol class="breadcrumb product-category">
                                <li><i class="fas fa-tags"></i></li>
                                <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                <li class="breadcrumb-item active" aria-current="page">television</li>
                            </ol>
                            <h5 class="product-title">
                                <a href="ad-details-right.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                            </h5>
                            <div class="product-meta">
                                <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                <span><i class="fas fa-clock"></i>30 min ago</span>
                            </div>
                            <div class="product-info">
                                <h5 class="product-price">$756<span>/fixed</span></h5>
                                <div class="product-btn">
                                    <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                    <button type="button" title="Wishlist" class="far fa-heart"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-8 col-xl-6">
                    <div class="product-card standard">
                        <div class="product-media">
                            <div class="product-img">
                                <img src="/frontend_assets/images/product/05.jpg" alt="product">
                            </div>
                            <div class="cross-vertical-badge product-badge">
                                <i class="fas fa-bolt"></i>
                                <span>trending</span>
                            </div>
                            <div class="product-type">
                                <span class="flat-badge sale">sale</span>
                            </div>
                            <ul class="product-action">
                                <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <ol class="breadcrumb product-category">
                                <li><i class="fas fa-tags"></i></li>
                                <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                <li class="breadcrumb-item active" aria-current="page">headphone</li>
                            </ol>
                            <h5 class="product-title">
                                <a href="ad-details-right.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                            </h5>
                            <div class="product-meta">
                                <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                <span><i class="fas fa-clock"></i>30 min ago</span>
                            </div>
                            <div class="product-info">
                                <h5 class="product-price">$245<span>/Negotiable</span></h5>
                                <div class="product-btn">
                                    <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                    <button type="button" title="Wishlist" class="far fa-heart"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-11 col-lg-8 col-xl-6">
                    <div class="product-card standard">
                        <div class="product-media">
                            <div class="product-img">
                                <img src="/frontend_assets/images/product/06.jpg" alt="product">
                            </div>
                            <div class="cross-vertical-badge product-badge">
                                <i class="fas fa-bolt"></i>
                                <span>trending</span>
                            </div>
                            <div class="product-type">
                                <span class="flat-badge rent">rent</span>
                            </div>
                            <ul class="product-action">
                                <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                            </ul>
                        </div>
                        <div class="product-content">
                            <ol class="breadcrumb product-category">
                                <li><i class="fas fa-tags"></i></li>
                                <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                <li class="breadcrumb-item active" aria-current="page">cycle</li>
                            </ol>
                            <h5 class="product-title">
                                <a href="ad-details-right.html">Lorem ipsum dolor sit amet consect adipisicing elit</a>
                            </h5>
                            <div class="product-meta">
                                <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                <span><i class="fas fa-clock"></i>30 min ago</span>
                            </div>
                            <div class="product-info">
                                <h5 class="product-price">$75<span>/per hour</span></h5>
                                <div class="product-btn">
                                    <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                    <button type="button" title="Wishlist" class="far fa-heart"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
                        <a href="ad-list-column3.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all trend</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                            TREND PART END
                =======================================-->


    <!--=====================================
                            NICHE PART START
                =======================================-->
    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Browse Our Top <span>Niche</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="niche-nav">
                        <ul class="nav nav-tabs">
                            <li><a href="#ratings" class="nav-link active" data-toggle="tab">top ratings</a></li>
                            <li><a href="#advertiser" class="nav-link" data-toggle="tab">top advertiser</a></li>
                            <li><a href="#engaged" class="nav-link" data-toggle="tab">top engaged</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="tab-pane active" id="ratings">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/07.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">booking</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">resort</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1590<span>/per week</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/08.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">mobile</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$454<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/09.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">animal</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cat</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$235<span>/Negotiable</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/10.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge rent">rent</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">private car</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$768<span>/per month</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/11.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">booking</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1470<span>/per day</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/13.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">laptop</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1550<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/14.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge rent">rent</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">bike</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$90<span>/per hour</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/15.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">camera</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1200<span>/Negotiable</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Rating ads -->

            <div class="tab-pane " id="advertiser">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/08.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">mobile</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$454<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/07.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">booking</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">resort</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1590<span>/per week</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/10.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge rent">rent</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">private car</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$768<span>/per month</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/09.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">animal</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cat</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$235<span>/Negotiable</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/13.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">laptop</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1550<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/11.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">booking</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1470<span>/per day</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/15.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">camera</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1200<span>/Negotiable</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/14.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge rent">rent</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">bike</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$90<span>/per hour</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Advertiser ads -->

            <div class="tab-pane" id="engaged">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/15.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">camera</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1200<span>/Negotiable</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/07.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">booking</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">resort</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1590<span>/per week</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/09.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">animal</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">cat</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$235<span>/Negotiable</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/10.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge rent">rent</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">private car</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$768<span>/per month</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/08.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">gadget</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">mobile</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$454<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/13.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge sale">sale</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">electronics</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">laptop</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1550<span>/fixed</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/14.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge rent">rent</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">automobile</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">bike</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$90<span>/per hour</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-img">
                                    <img src="/frontend_assets/images/product/11.jpg" alt="product">
                                </div>
                                <div class="cross-vertical-badge product-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>top niche</span>
                                </div>
                                <div class="product-type">
                                    <span class="flat-badge booking">booking</span>
                                </div>
                                <ul class="product-action">
                                    <li class="view"><i class="fas fa-eye"></i><span>264</span></li>
                                    <li class="click"><i class="fas fa-mouse"></i><span>134</span></li>
                                    <li class="rating"><i class="fas fa-star"></i><span>4.5/7</span></li>
                                </ul>
                            </div>
                            <div class="product-content">
                                <ol class="breadcrumb product-category">
                                    <li><i class="fas fa-tags"></i></li>
                                    <li class="breadcrumb-item"><a href="#">Luxury</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Duplex house</li>
                                </ol>
                                <h5 class="product-title">
                                    <a href="ad-details-left.html">Lorem ipsum dolor sit amet consect adipisicing
                                        elit</a>
                                </h5>
                                <div class="product-meta">
                                    <span><i class="fas fa-map-marker-alt"></i>Uttara, Dhaka</span>
                                    <span><i class="fas fa-clock"></i>30 min ago</span>
                                </div>
                                <div class="product-info">
                                    <h5 class="product-price">$1470<span>/per day</span></h5>
                                    <div class="product-btn">
                                        <a href="compare.html" title="Compare" class="fas fa-compress"></a>
                                        <button type="button" title="Wishlist" class="far fa-heart"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- Engaged ads -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
                        <a href="ad-list-column3.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all ads</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                            NICHE PART END
                =======================================-->


    <!--=====================================
                            CITY PART START
                =======================================-->
    <section class="section city-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Top Cities by <span>Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <a href="ad-list-column3.html" class="city-card"
                        style="background: url(/frontend_assets/images/cities/01.jpg) no-repeat center; background-size: cover">
                        <div class="city-content">
                            <h4>Los Angeles</h4>
                            <p>(25) ads</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="ad-list-column3.html" class="city-card"
                        style="background: url(/frontend_assets/images/cities/02.jpg) no-repeat center; background-size: cover">
                        <div class="city-content">
                            <h4>san francisco</h4>
                            <p>(25) ads</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-5">
                    <a href="ad-list-column3.html" class="city-card"
                        style="background: url(/frontend_assets/images/cities/03.jpg) no-repeat center; background-size: cover">
                        <div class="city-content">
                            <h4>california</h4>
                            <p>(25) ads</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-5">
                    <a href="ad-list-column3.html" class="city-card"
                        style="background: url(/frontend_assets/images/cities/04.jpg) no-repeat center; background-size: cover">
                        <div class="city-content">
                            <h4>new york</h4>
                            <p>(25) ads</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4">
                    <a href="ad-list-column3.html" class="city-card"
                        style="background: url(/frontend_assets/images/cities/05.jpg) no-repeat center; background-size: cover">
                        <div class="city-content">
                            <h4>manhattan</h4>
                            <p>(25) ads</p>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <a href="ad-list-column3.html" class="city-card"
                        style="background: url(/frontend_assets/images/cities/06.jpg) no-repeat center; background-size: cover">
                        <div class="city-content">
                            <h4>Baltimore</h4>
                            <p>(25) ads</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
                        <a href="cities.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all Cities</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                            CITY PART END
                =======================================-->


    <!--=====================================
                            CATEGORY PART START
                =======================================-->
    <section class="section category-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Top Categories by <span>Ads</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="category-card">
                        <div class="category-head">
                            <img src="/frontend_assets/images/category/electronics.jpg" alt="category">
                            <a href="#" class="category-content">
                                <h4>electronics</h4>
                                <p>(3678)</p>
                            </a>
                        </div>
                        <ul class="category-list">
                            <li><a href="#">
                                    <h6>television</h6>
                                    <p>(34)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>Generetor</h6>
                                    <p>(24)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>Washing machine</h6>
                                    <p>(12)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>air condition</h6>
                                    <p>(19)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>iron</h6>
                                    <p>(56)</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="category-card">
                        <div class="category-head">
                            <img src="/frontend_assets/images/category/gadgets.jpg" alt="category">
                            <a href="#" class="category-content">
                                <h4>gadgets</h4>
                                <p>(3678)</p>
                            </a>
                        </div>
                        <ul class="category-list">
                            <li><a href="#">
                                    <h6>computer</h6>
                                    <p>(34)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>mobile</h6>
                                    <p>(24)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>camera</h6>
                                    <p>(12)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>dron</h6>
                                    <p>(19)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>airphone</h6>
                                    <p>(56)</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="category-card">
                        <div class="category-head">
                            <img src="/frontend_assets/images/category/furnitures.jpg" alt="category">
                            <a href="#" class="category-content">
                                <h4>furnitures</h4>
                                <p>(3678)</p>
                            </a>
                        </div>
                        <ul class="category-list">
                            <li><a href="#">
                                    <h6>dyning table</h6>
                                    <p>(34)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>chair</h6>
                                    <p>(24)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>sofa</h6>
                                    <p>(12)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>tea table</h6>
                                    <p>(19)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>dressing table</h6>
                                    <p>(56)</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="category-card">
                        <div class="category-head">
                            <img src="/frontend_assets/images/category/animals.jpg" alt="category">
                            <a href="#" class="category-content">
                                <h4>animals</h4>
                                <p>(3678)</p>
                            </a>
                        </div>
                        <ul class="category-list">
                            <li><a href="#">
                                    <h6>dyning table</h6>
                                    <p>(34)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>chair</h6>
                                    <p>(24)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>sofa</h6>
                                    <p>(12)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>tea table</h6>
                                    <p>(19)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>dressing table</h6>
                                    <p>(56)</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="category-card">
                        <div class="category-head">
                            <img src="/frontend_assets/images/category/fashions.jpg" alt="category">
                            <a href="#" class="category-content">
                                <h4>fashions</h4>
                                <p>(3678)</p>
                            </a>
                        </div>
                        <ul class="category-list">
                            <li><a href="#">
                                    <h6>jeans</h6>
                                    <p>(34)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>underware</h6>
                                    <p>(24)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>shirt</h6>
                                    <p>(12)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>jacket</h6>
                                    <p>(19)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>shorts</h6>
                                    <p>(56)</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="category-card">
                        <div class="category-head">
                            <img src="/frontend_assets/images/category/motorbikes.jpg" alt="category">
                            <a href="#" class="category-content">
                                <h4>motorbikes</h4>
                                <p>(3678)</p>
                            </a>
                        </div>
                        <ul class="category-list">
                            <li><a href="#">
                                    <h6>dyning table</h6>
                                    <p>(34)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>chair</h6>
                                    <p>(24)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>sofa</h6>
                                    <p>(12)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>tea table</h6>
                                    <p>(19)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>dressing table</h6>
                                    <p>(56)</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="category-card">
                        <div class="category-head">
                            <img src="/frontend_assets/images/category/properties.jpg" alt="category">
                            <a href="#" class="category-content">
                                <h4>properties</h4>
                                <p>(3678)</p>
                            </a>
                        </div>
                        <ul class="category-list">
                            <li><a href="#">
                                    <h6>dyning table</h6>
                                    <p>(34)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>chair</h6>
                                    <p>(24)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>sofa</h6>
                                    <p>(12)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>tea table</h6>
                                    <p>(19)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>dressing table</h6>
                                    <p>(56)</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                    <div class="category-card">
                        <div class="category-head">
                            <img src="/frontend_assets/images/category/automobiles.jpg" alt="category">
                            <a href="#" class="category-content">
                                <h4>automobiles</h4>
                                <p>(3678)</p>
                            </a>
                        </div>
                        <ul class="category-list">
                            <li><a href="#">
                                    <h6>dyning table</h6>
                                    <p>(34)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>chair</h6>
                                    <p>(24)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>sofa</h6>
                                    <p>(12)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>tea table</h6>
                                    <p>(19)</p>
                                </a></li>
                            <li><a href="#">
                                    <h6>dressing table</h6>
                                    <p>(56)</p>
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-20">
                        <a href="category-list.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all categories</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                            CATEGORY PART END
                =======================================-->


    <!--=====================================
                            INTRO PART START
                =======================================-->
    <section class="intro-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Do you have something to advertise?</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                        <a href="ad-post.html" class="btn btn-outline">
                            <i class="fas fa-plus-circle"></i>
                            <span>post your ad</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================
                            INTRO PART END
                =======================================-->
@endsection
