<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('Assets/favicon.png')}}">

    <link rel="stylesheet" href="{{url('css/style.css')}}">
    <link rel="stylesheet" href="{{url('css/viewProduct.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{url('js/jquery-3.5.1.js')}}"></script>
    <script src="{{url('js/viewProduct.js')}}"></script>
    <title>Fave</title>
</head>
<body>

<nav id="navbar">
        <div class="container">
            <div class="nav-logo">
                <a href="/">
                    <img src="{{ asset('Assets/logo-website.png')}}" alt="">
                </a>
            </div>
            <ul class="nav-list category">
                <li class="nav-item"><a href="/all">All</a></li>
                <li class="nav-item"><a href="/category/women">Women</a></li>
                <li class="nav-item"><a href="/category/men">Men</a></li>
            </ul>
            <ul class="nav-list">
                <li class="nav-item">
                    <div id="search-wrapper">
                        <a id="search-bar">
                            <img src="{{ asset('Assets/category-search.png')}}" alt="">
                            <span><input type="text" name="search" id="search"></span>
                        </a>
                        <div id="search-box">
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/cart" style="display: flex; align-items: center;">
                        <img src="{{ asset('Assets/home-shopping-cart.png')}}" alt="">
                    </a>
                </li>
                @if (auth()->check())
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <li class="nav-item"><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" 
                        id="login-btn">LOGOUT</a></li>
                    </form>
                @else
                <li class="nav-item"><a href="/login" id="login-btn">LOGIN</a></li>
                @endif
                <li>
                    <a href="#">
                        <div class="hamburger-btn" id="hamburger-btn" onclick="toggleEvent(this.id), toggleEvent('side-navbar')">
                            <div class="line-1"></div>
                            <div class="line-2"></div>
                            <div class="line-3"></div>
                        </div>
                    </a>
                    <div class="side-navbar" id="side-navbar">
                        <div class="navbar-item">
                            <div id="close-btn" style="width: 100%;"><a href="#" onclick="toggleEvent('hamburger-btn'),toggleEvent('side-navbar')"><img src="{{asset('Assets/navbar-x-btn.png')}}" alt=""></a></div>
                            <a id="search-bar-mobile">
                                <img src="{{ asset('Assets/category-search.png')}}" alt="">
                                <input type="text" name="search-2" id="search-2">
                            </a>
                            <a href="/all">All</a>
                            <a href="/category/women">Women</a>
                            <a href="/category/men">Men</a>                       
                        </div>
                        @if (auth()->check())
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <div id="login-btn-mobile"><a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" 
                                >LOGOUT</a></div>
                            </form>
                        @else
                        <div id="login-btn-mobile"><a href="/login">LOGIN</a></div>
                        @endif
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <section class="view-section">
        <div class="container">
            <div class="image-wrapper">
                <div class="image-box">
                    <div class="img-slider">

                        @foreach($item->pictures as $picture)
                        <div class="product-img">
                            <img src="{{asset('Assets/' . $picture->location)}}" alt="">
                        </div>
                        @endforeach

                    </div>
                    <div class="dot-list">

                        @foreach($item->pictures as $picture)
                        <div class="dot" onclick="currentSlide({{$loop->iteration}})"></div>
                        @endforeach

                    </div>
                </div>
                <a id="next-btn"><img src="{{url('Assets/product-arrow-right.png')}}" alt="" style="cursor: pointer;" onclick="nextSlide(1)" ></a>
            </div>
            <div class="product-content">
                <div class="product-header">
                    <div class="product-title">
                        <h1>{{$item->id}}</h1>
                        <div class="product-rating">
                        @for ( $i = 0; $i < $item->rating; $i++)
                            <span class="fa fa-star checked"></span>
                        @endfor
                        @for ( $i = $item->rating; $i < 5; $i++ )
                            <span class="fa fa-star"></span>
                        @endfor
                            <span class="description"> {{$item->rating}}/5</span>
                        </div>
                    </div>
                    @if( $item->discount > 0)
                        <div class="product-price discount">
                            <p>Rp {{$item->price}}</p>
                            <input type="hidden" class="price-input" value="{{$item->price}}">
                            <input type="hidden" class="discount-input" value="{{$item->discount}}">
                            <p class="price-discount"></p>
                        </div>
                    @else
                        <div class="product-price">
                        <p>Rp {{$item->price}}</p>
                        </div>
                    @endif
                    
                </div>
                <div class="product-desc">
                    <p>{{$item->description}}</p>
                </div>
                <form action="/add-to-cart" method="POST" class="product-form">
                    @csrf
                    <input type="hidden" name="item_id" value="{{$item->id}}">
                    <div class="product-select">
                        <select name="size" id="size">
                            <option value="" selected disabled hidden>Select Size</option>
                            <option value="Small (S)">Small (S)</option>
                            <option value="Medium (M)">Medium (M)</option>
                            <option value="Large (L)">Large (L)</option>
                        </select>
                    </div>
                    <div class="submit-btn">
                        <div style="cursor: pointer;">
                            <p>ADD TO CART</p> 
                            <img src="{{url('Assets/arrow-right.png')}}" alt="">
                        </div>
                    </div> 
                </form>
            </div>
        </div>
    </section>
    <section class="footer-section">
        <div class="container">
            <div class="left-footer">
                <img src="{{url('Assets/logo-website.png')}}" alt="">
                <p>We are a family of brands, driven by our desire to make great design available to everyone in a sustainable way. Together we offer fashion, design and services, that enable people to be inspired and to express their own personal style, making it easier to live in a more circular way.</p>
                <div class="social-media">
                    <a href="#"><img src="{{url('Assets/home-icon-instagram.png')}}" alt=""></a>
                    <a href="#"><img src="{{url('Assets/home-icon-twitter.png')}}" alt=""></a>
                </div>
            </div>
            <div class="right-footer">
                <h1>New in FAVE?</h1>
                <p>Suscribe to our monthly magazine for more fashion mix and match tips & tricks!</p>
                <div class="subscribe">
                    <form action="">
                        <input type="text" name="email" id="email" placeholder="someone@example.com" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>


    <script>
        $(document).ready(function(){
            $('.price-discount').each(function(){
                let $price = $(this).parent().find('.price-input').val();
                let $discount = $(this).parent().find('.discount-input').val();
                console.log($price);
                let $priceDiscount = Math.floor($price - ($price*$discount/100));
                $(this).text('Now Rp ' + $priceDiscount);
            });

            


        });
    </script>
    <script src="{{url('js/navbar.js')}}"></script>

</body>


</html>

