<header class="header-part">
    <div class="container">
        <div class="header-content">
            <div class="header-left">
                {{--  <button type="button" class="header-widget sidebar-btn">
                    <i class="fas fa-align-left"></i>
                </button> --}}
                <a href="{{ url('/') }}" class="header-logo">
                    <img src="{{ asset('frontend_assets/images/logo.png') }}" alt="logo">
                </a>
                <a href="{{ route('login') }}" class="header-widget header-user">
                    <img src="{{ asset('frontend_assets/images/user.png') }}" alt="user">
                    <span>Login</span>
                </a>
                <button type="button" class="header-widget search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <form class="header-form">
                <div class="header-search">
                    <button type="submit" title="Search Submit "><i class="fas fa-search"></i></button>
                    <input type="text" placeholder="Search, Whatever you needs...">
                    <button type="button" title="Search Option" class="option-btn"><i
                            class="fas fa-sliders-h"></i></button>
                </div>
                <div class="header-option">
                    <div class="option-grid">
                        <div class="option-group"><input type="text" placeholder="City"></div>
                        <div class="option-group"><input type="text" placeholder="State"></div>
                        <div class="option-group"><input type="text" placeholder="Min Price"></div>
                        <div class="option-group"><input type="text" placeholder="Max Price"></div>
                        <button type="submit"><i class="fas fa-search"></i><span>Search</span></button>
                    </div>
                </div>
            </form>
            <div class="header-right">
                {{-- <ul class="header-list">
                    <li class="header-item">
                        <a href="bookmark.html" class="header-widget">
                            <i class="fas fa-heart"></i>
                            <sup>0</sup>
                        </a>
                    </li>
                    <li class="header-item">
                        <button type="button" class="header-widget">
                            <i class="fas fa-envelope"></i>
                            <sup>0</sup>
                        </button>
                        <div class="dropdown-card">
                            <div class="dropdown-header">
                                <h5>message (2)</h5>
                                <a href="message.html">view all</a>
                            </div>
                            <ul class="message-list">
                                <li class="message-item unread">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="/frontend_assets/images/avatar/01.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>miron mahmud <span>now</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                        <span class="message-count">4</span>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="/frontend_assets/images/avatar/03.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>shipu ahmed <span>3m</span></h6>
                                            <p><span>me:</span>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-item unread">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img">
                                            <img src="/frontend_assets/images/avatar/02.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>tahmina bonny <span>2h</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                        <span class="message-count">12</span>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="/frontend_assets/images/avatar/04.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>nasrullah <span>5d</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img">
                                            <img src="/frontend_assets/images/user.png" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>saikul azam <span>7w</span></h6>
                                            <p><span>me:</span>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="/frontend_assets/images/avatar/02.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>munni akter <span>9m</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                                <li class="message-item">
                                    <a href="message.html" class="message-link">
                                        <div class="message-img active">
                                            <img src="/frontend_assets/images/avatar/03.jpg" alt="avatar">
                                        </div>
                                        <div class="message-text">
                                            <h6>shahin alam <span>1y</span></h6>
                                            <p>How are you my best frien...</p>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="header-item">
                        <button type="button" class="header-widget">
                            <i class="fas fa-bell"></i>
                            <sup>0</sup>
                        </button>
                        <div class="dropdown-card">
                            <div class="dropdown-header">
                                <h5>Notification (1)</h5>
                                <a href="notification.html">view all</a>
                            </div>
                            <ul class="notify-list">
                                <li class="notify-item active">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="/frontend_assets/images/avatar/01.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>miron mahmud</span> has added the
                                                advertisement post of your <span>booking</span> to his wishlist.</p>
                                            <span class="notify-time">just now</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="/frontend_assets/images/avatar/02.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>tahmina bonny</span> gave you a
                                                <span>comment</span> and 5 star <span>review.</span>
                                            </p>
                                            <span class="notify-time">2 hours ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="/frontend_assets/images/avatar/03.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>shipu ahmed</span> and <span>4
                                                    other</span> have seen your contact number</p>
                                            <span class="notify-time">3 minutes ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="/frontend_assets/images/avatar/02.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>miron mahmud</span> has added the
                                                advertisement post of your <span>booking</span> to his wishlist.</p>
                                            <span class="notify-time">5 days ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="/frontend_assets/images/avatar/04.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>labonno khan</span> gave you a
                                                <span>comment</span> and 5 star <span>review.</span>
                                            </p>
                                            <span class="notify-time">4 months ago</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="notify-item">
                                    <a href="#" class="notify-link">
                                        <div class="notify-img">
                                            <img src="/frontend_assets/images/avatar/01.jpg" alt="avatar">
                                        </div>
                                        <div class="notify-content">
                                            <p class="notify-text"><span>azam khan</span> and <span>4 other</span>
                                                have seen your contact number</p>
                                            <span class="notify-time">1 years ago</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul> --}}
                <a href="{{ route('register') }}" class="btn btn-inline post-btn">
                    <i class="fas fa-plus-circle"></i>
                    <span>post your ad</span>
                </a>
            </div>
        </div>
    </div>
</header>
