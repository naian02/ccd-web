<!-- Preloader -->
<div class="preloader">
    <div class="loader-inner">
        <div class="sk-folding-cube">
            <div class="sk-cube1 sk-cube"></div>
            <div class="sk-cube2 sk-cube"></div>
            <div class="sk-cube4 sk-cube"></div>
            <div class="sk-cube3 sk-cube"></div>
        </div>
    </div>
</div>
<!-- Preloader End-->
<!-- header -->
<div id="header--fixed" class="header">
    <div class="nav-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-5 col-lg-4">
                    <div class="phone">
                        <i class="fa fa-volume-control-phone"></i>+63 930 920 7762
                    </div>
                    <div class="email">
                        <i class="fa fa-envelope"></i>creativecanvad@gmail.com
                    </div>
                   
                </div>
                <div class="hidden-xs hidden-sm col-md-3 col-lg-4 ">
                  <!--to input item -->
                </div>
                <div class="hidden-xs col-sm-6 col-md-4 col-lg-4">
                    <div class="social">
                        <a class="icon-facebook" href="https://www.facebook.com/profile.php?id=61567169319044"><i class="fa fa-facebook-square"></i></a>
                        <a class="icon-twitter" href="#"><i class="fa fa-twitter-square"></i></a>
                        <a class="icon-pinterest" href="#"><i class="fa fa-pinterest-square"></i></a>
                        <a class="icon-google-plus" href="#"><i class="fa fa-google-plus-square"></i></a>
                    </div>
                    <a class="join-top" href="login.html"><i class="fa fa-user-circle"></i>SUBCRIBE</a>
                    <!--
                    <div class="dropdown currency-switchr">
                        <button class="currency-btn" id="currency" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe"></i>URO
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="currency">
                            <li><a href="#">USD</a></li>
                            <li><a href="#">AUD</a></li>
                        </ul>
                    </div>
                    <div class="dropdown language-switchr">
                        <button class="language-btn" id="language" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-globe"></i>ENG
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="language">
                            <li><a href="#">SPN</a></li>
                            <li><a href="#">GER</a></li>
                        </ul>
                    </div>
                -->
                </div>
            </div>
        </div>
    </div>

    <div id="main-nav" class="main-nav">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{route ('home.index')}}"><img class="retina" src="images/ccd.gif" alt="logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="main-navbar">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a href="{{route ('home.index')}}">Home</a></li>
                        <li><a href="{{route ('about.index')}}">About Us</a></li>
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">About Us <span class="caret"></span></a>
                            
                            <ul class="dropdown-menu">
                                <li class="dropdown dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Cause</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="cause.html">Cause</a></li>
                                        <li><a href="cause-details.html">Cause Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-submenu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">About</a>
                                    <ul class="dropdown-menu">
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="our-team.html">Our Team</a></li>
                                        <li><a href="our-partner.html">Our Pertnar</a></li>
                                    </ul>
                                </li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="404.html">404 Page</a></li>
                                <li><a href="element.html">Element</a></li>
                            </ul>
                            
                        </li>-->
                        <li><a href="{{route ('teams.index')}}">Our Teams</a></li>
                         <!--
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Our Teams<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="event.html">Event</a></li>
                                <li><a href="event-details.html">Event Details</a></li>
                            </ul>
                        </li>
                        -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog-2.html">Blog 2</a></li>
                                <li><a href="single-blog.html">Single Blog</a></li>
                                <li><a href="search-archive.html">Search Archive</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="product.html">Product</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                    <!--
                    <ul class="nav navbar-nav navbar-right hidden-xs">
                        <li class="top-cart">
                            <i class="fa fa-shopping-bag"></i>
                            <a href="cart.html" class="top-amount">$0.00</a>
                        </li>
                    </ul>
                    -->
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- header End-->
