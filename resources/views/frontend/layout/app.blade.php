<!DOCTYPE html>
<html lang="en">

@include('frontend.layout.partials.head')

<body>
    <!--=====================================
                    HEADER PART START
        =======================================-->
    @include('frontend.layout.partials.header')
    <!--=====================================
                    HEADER PART END
        =======================================-->


    <!--=====================================
                    SIDEBAR PART START
        =======================================-->
    {{-- <aside class="sidebar-part">
        <div class="sidebar-body">
            <div class="sidebar-header">
                <a href="index.html" class="sidebar-logo"><img src="/frontend_assets/images/logo.png"
                        alt="logo"></a>
                <button class="sidebar-cross"><i class="fas fa-times"></i></button>
            </div>
            <div class="sidebar-content">
                <div class="sidebar-profile">
                    <a href="#" class="sidebar-avatar"><img src="/frontend_assets/images/avatar/01.jpg"
                            alt="avatar"></a>
                    <h4><a href="#" class="sidebar-name">Jackon Honson</a></h4>
                    <a href="ad-post.html" class="btn btn-inline sidebar-post">
                        <i class="fas fa-plus-circle"></i>
                        <span>post your ad</span>
                    </a>
                </div>
                <div class="sidebar-menu">
                    <ul class="nav nav-tabs">
                        <li><a href="#main-menu" class="nav-link active" data-toggle="tab">Main Menu</a></li>
                        <li><a href="#author-menu" class="nav-link" data-toggle="tab">Author Menu</a></li>
                    </ul>

                    <div class="tab-pane active" id="main-menu">
                        <ul class="navbar-list">
                            <li class="navbar-item"><a class="navbar-link" href="index.html">Home</a></li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>Categories</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="category-list.html">category list</a></li>
                                    <li><a class="dropdown-link" href="category-details.html">category details</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>Advertise List</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="ad-list-column3.html">ad list column 3</a></li>
                                    <li><a class="dropdown-link" href="ad-list-column2.html">ad list column 2</a></li>
                                    <li><a class="dropdown-link" href="ad-list-column1.html">ad list column 1</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>Advertise details</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="ad-details-grid.html">ad details grid</a></li>
                                    <li><a class="dropdown-link" href="ad-details-left.html">ad details left</a></li>
                                    <li><a class="dropdown-link" href="ad-details-right.html">ad details right</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>Pages</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="about.html">About Us</a></li>
                                    <li><a class="dropdown-link" href="compare.html">Ad Compare</a></li>
                                    <li><a class="dropdown-link" href="cities.html">Ad by Cities</a></li>
                                    <li><a class="dropdown-link" href="price.html">Pricing Plan</a></li>
                                    <li><a class="dropdown-link" href="user-form.html">User Form</a></li>
                                    <li><a class="dropdown-link" href="404.html">404</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="#">
                                    <span>blogs</span>
                                    <i class="fas fa-plus"></i>
                                </a>
                                <ul class="dropdown-list">
                                    <li><a class="dropdown-link" href="blog-list.html">Blog list</a></li>
                                    <li><a class="dropdown-link" href="blog-details.html">blog details</a></li>
                                </ul>
                            </li>
                            <li class="navbar-item"><a class="navbar-link" href="contact.html">Contact</a></li>
                        </ul>
                    </div>

                    <div class="tab-pane" id="author-menu">
                        <ul class="navbar-list">
                            <li class="navbar-item"><a class="navbar-link" href="dashboard.html">Dashboard</a></li>
                            <li class="navbar-item"><a class="navbar-link" href="profile.html">Profile</a></li>
                            <li class="navbar-item"><a class="navbar-link" href="ad-post.html">Ad Post</a></li>
                            <li class="navbar-item"><a class="navbar-link" href="my-ads.html">My Ads</a></li>
                            <li class="navbar-item"><a class="navbar-link" href="setting.html">Settings</a></li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="bookmark.html">
                                    <span>bookmark</span>
                                    <span>0</span>
                                </a>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="message.html">
                                    <span>Message</span>
                                    <span>0</span>
                                </a>
                            </li>
                            <li class="navbar-item navbar-dropdown">
                                <a class="navbar-link" href="notification.html">
                                    <span>Notification</span>
                                    <span>0</span>
                                </a>
                            </li>
                            <li class="navbar-item"><a class="navbar-link" href="user-form.html">Logout</a></li>
                        </ul>
                    </div>
                </div>

                <div class="sidebar-footer">
                    <p>All Rights Reserved By <a href="#">Classicads</a></p>
                    <p>Developed By <a href="https://themeforest.net/user/mironcoder">Mironcoder</a></p>
                </div>
            </div>
        </div>
    </aside> --}}
    <!--=====================================
                    SIDEBAR PART END
        =======================================-->


    <!--=====================================
                    MOBILE-NAV PART START
        =======================================-->
    {{-- <nav class="mobile-nav">
        <div class="container">
            <div class="mobile-group">
                <a href="index.html" class="mobile-widget">
                    <i class="fas fa-home"></i>
                    <span>home</span>
                </a>
                <a href="user-form.html" class="mobile-widget">
                    <i class="fas fa-user"></i>
                    <span>join me</span>
                </a>
                <a href="ad-post.html" class="mobile-widget plus-btn">
                    <i class="fas fa-plus"></i>
                    <span>Ad Post</span>
                </a>
                <a href="notification.html" class="mobile-widget">
                    <i class="fas fa-bell"></i>
                    <span>notify</span>
                    <sup>0</sup>
                </a>
                <a href="message.html" class="mobile-widget">
                    <i class="fas fa-envelope"></i>
                    <span>message</span>
                    <sup>0</sup>
                </a>
            </div>
        </div>
    </nav> --}}
    <!--=====================================
                    MOBILE-NAV PART END
        =======================================-->


    @yield('content')


    <!--=====================================
                     PRICE PART START
        =======================================-->
    {{-- <section class="price-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Best Reliable Pricing Plans</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4">
                    <div class="price-card">
                        <div class="price-head">
                            <i class="flaticon-bicycle"></i>
                            <h3>$00</h3>
                            <h4>Free Plan</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>1 Regular Ad for 7 days</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Credit card required</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Top or Featured Ad</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Ad will be bumped up</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Limited Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <a href="user-form.html" class="btn btn-inline">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="price-card price-active">
                        <div class="price-head">
                            <i class="flaticon-car-wash"></i>
                            <h3>$23</h3>
                            <h4>Standard Plan</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>1 Recom Ad for 30 days</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Featured Ad Available</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Ad will be bumped up</p>
                            </li>
                            <li>
                                <i class="fas fa-times"></i>
                                <p>No Top Ad Available</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Basic Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <a href="user-form.html" class="btn btn-inline">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="price-card">
                        <div class="price-head">
                            <i class="flaticon-airplane"></i>
                            <h3>$49</h3>
                            <h4>Premium Plan</h4>
                        </div>
                        <ul class="price-list">
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>1 Featured Ad for 60 days</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Access to All features</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>With Recommended</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Ad Top Category</p>
                            </li>
                            <li>
                                <i class="fas fa-plus"></i>
                                <p>Priority Support</p>
                            </li>
                        </ul>
                        <div class="price-btn">
                            <a href="user-form.html" class="btn btn-inline">
                                <i class="fas fa-sign-in-alt"></i>
                                <span>Register Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                     PRICE PART END
        =======================================-->


    <!--=====================================
                     BLOG PART START
        =======================================-->
    {{-- <section class="blog-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-center-heading">
                        <h2>Read Our <span>Recent Articles</span></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit aspernatur illum vel sunt libero
                            voluptatum repudiandae veniam maxime tenetur.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-slider slider-arrow">
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="/frontend_assets/images/blog/01.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="marketing">Marketing</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="/frontend_assets/images/avatar/01.jpg" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p><a href="#">MironMahmud</a></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>02 Feb 2021</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum
                                            quaerat volupt.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                        dolore labore laborum perspiciatis...</p>
                                </div>
                                <a href="blog-details.html" class="blog-read">
                                    <span>read more</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="/frontend_assets/images/blog/02.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="advertise">advertise</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="/frontend_assets/images/avatar/02.jpg" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p><a href="#">LabonnoKhan</a></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>02 Feb 2021</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum
                                            quaerat volupt.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                        dolore labore laborum perspiciatis...</p>
                                </div>
                                <a href="blog-details.html" class="blog-read">
                                    <span>read more</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="/frontend_assets/images/blog/03.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="safety">safety</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="/frontend_assets/images/avatar/03.jpg" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p><a href="#">MironMahmud</a></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>02 Feb 2021</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum
                                            quaerat volupt.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                        dolore labore laborum perspiciatis...</p>
                                </div>
                                <a href="blog-details.html" class="blog-read">
                                    <span>read more</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                        <div class="blog-card">
                            <div class="blog-img">
                                <img src="/frontend_assets/images/blog/04.jpg" alt="blog">
                                <div class="blog-overlay">
                                    <span class="security">security</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <a href="#" class="blog-avatar">
                                    <img src="/frontend_assets/images/avatar/04.jpg" alt="avatar">
                                </a>
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fas fa-user"></i>
                                        <p><a href="#">TahminaBonny</a></p>
                                    </li>
                                    <li>
                                        <i class="fas fa-clock"></i>
                                        <p>02 Feb 2021</p>
                                    </li>
                                </ul>
                                <div class="blog-text">
                                    <h4><a href="blog-details.html">Lorem ipsum dolor sit amet eius minus elit cum
                                            quaerat volupt.</a></h4>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus veniam ad
                                        dolore labore laborum perspiciatis...</p>
                                </div>
                                <a href="blog-details.html" class="blog-read">
                                    <span>read more</span>
                                    <i class="fas fa-long-arrow-alt-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog-btn">
                        <a href="blog-list.html" class="btn btn-inline">
                            <i class="fas fa-eye"></i>
                            <span>view all blogs</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--=====================================
                     BLOG PART END
        =======================================-->


    <!--=====================================
                    FOOTER PART PART
        =======================================-->
    @include('frontend.layout.partials.footer')
    <!--=====================================
                    FOOTER PART END
        =======================================-->


    <!--=====================================
                  CURRENCY MODAL PART START
        =======================================-->
    {{-- <div class="modal fade" id="currency">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>Choose a Currency</h4>
                    <button class="fas fa-times" data-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <button class="modal-link active">United States Doller (USD) - $</button>
                    <button class="modal-link">Euro (EUR) - €</button>
                    <button class="modal-link">British Pound (GBP) - £</button>
                    <button class="modal-link">Australian Dollar (AUD) - A$</button>
                    <button class="modal-link">Canadian Dollar (CAD) - C$</button>
                </div>
            </div>
        </div>
    </div> --}}
    <!--=====================================
                  CURRENCY MODAL PART END
        =======================================-->


    <!--=====================================
                    JS LINK PART START
        =======================================-->
    <!-- VENDOR -->
    @include('frontend.layout.partials.scripts')
    <!--=====================================
                    JS LINK PART END
        =======================================-->
</body>

</html>
