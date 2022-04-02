      
   



   <!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani |@yield('title')</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('website/ogani-master/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('website/ogani-master/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('website/ogani-master/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('website/ogani-master/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('website/ogani-master/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('website/ogani-master/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('website/ogani-master/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('website/ogani-master/css/style.css')}}"  type="text/css">
</head>

<body>
      
      <!-- Page Preloder -->
      <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('storage/product-image/'.$appsetting->image) }} " alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>{{ !(session()->get('cart'))?'0':count(session()->get('cart'))}}</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
     
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('shop')}}">Shop</a></li>
                <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{route('addCart')}}">Shoping Cart</a></li>
                                    <li><a href="{{route('checkout')}}">Check Out</a></li>
                                </ul>
                 </li>   
                <li><a href="{{route('blog')}}">Blog</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> {{$appsetting->email_name}}  </li>
                <li>{{$appsetting->offer_heading}}</li>
        </div>
    </div>
    <!-- Humberger End -->

   

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> {{$appsetting->email_name}} </li>
                                <li>{{$appsetting->offer_heading}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            
                            <div class="header__top__right__auth">
                                <a href="{{route('userlogin')}}"><i class="fa fa-sign-in"></i> Login</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{route('userregister')}}"><i class="fa fa-user-plus"></i>Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="{{ asset('storage/product-image/'.$appsetting->image) }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">Home</a></li>
                            <li><a href="{{route('shop')}}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="{{route('addCart')}}">Shoping Cart</a></li>
                                    <li><a href="{{route('checkout')}}">Check Out</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('blog')}}">Blog</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>{{ !(session()->get('cart'))?'0':count(session()->get('cart'))}}</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    
 <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                           
                           @foreach ($product as $values)
                                <li><a href="#">{{$values->c_name}}</a></li>
                           @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>{{$appsetting->phone}}</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </section> 
      

    @yield('content')

   

   


<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="./index.html"><img src=" {{ asset('storage/product-image/'.$appsetting->image) }} "
                                alt=""></a>
                    </div>
                    <ul>
                        <li>Address: {{$appsetting->location}}</li>
                        <li>Phone: {{$appsetting->phone}}</li>
                        <li>Email: {{$appsetting->email_name}}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">About Our Shop</a></li>
                        <li><a href="#">Secure Shopping</a></li>
                        <li><a href="#">Delivery infomation</a></li>
                        <li><a href="{{route('webprivercy')}}">Privacy Policy</a></li>
                        <li><a href="#">Our Sitemap</a></li>
                    </ul>
                    <ul>
                        <li><a href="#">Who We Are</a></li>
                        <li><a href="#">Our Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Innovation</a></li>
                        <li><a href="#">Testimonials</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="footer__widget">
                    <h6>Join Our Newsletter Now</h6>
                    <p>{{$appsetting->newsletter_heading}}</p>
                    <form action="send-notification">
                        <input type="text" placeholder="Enter your mail" required>
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="footer__copyright">
                    <div class="footer__copyright__text">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            <script>
                                document.write(new Date().getFullYear());
                            </script> <i
                                class="fa fa-heart" aria-hidden="true"> {{$appsetting->footer}}</i> <a href="https://colorlib.com"
                                target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="footer__copyright__payment"><img
                            src=" {{ asset('website/ogani-master/img/payment-item.png') }}  " alt=""></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="{{ asset('website/ogani-master/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('website/ogani-master/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('website/ogani-master/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('website/ogani-master/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('website/ogani-master/js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('website/ogani-master/js/mixitup.min.js') }}"></script>
<script src="{{ asset('website/ogani-master/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('website/ogani-master/js/main.js') }}"></script>



</body>

</html>
