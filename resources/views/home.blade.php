<!DOCTYPE html>
<html lang="en">
<head>
@include('partials.head')
</head>
<body>

@include('partials.navbar')

    <section class="landing-section">
        <div class="container">
            <div class="landing-title">
                <p>WHERE YOU ARE MORE THAN <span>NUMBER ONE.</span></p>
            </div>
            <div class="new-arrival">
                <div class="title">
                    <p>NEW ARRIVALS</p>
                </div>
                <div class="slider-wrapper">
                    <div class="item-slider">
                        <div class="item active">
                            <a href="/item/Shone%20Joy">
                                <img src="{{ asset('Assets/arrival-1-1.png')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="/item/Sabrina%20Ruffle%20Hem%20Top">
                                <img src="{{ asset('Assets/arrival-2-1.png')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="/item/Victoria%20Front%20Shirt">
                                <img src="{{ asset('Assets/arrival-3-1.png')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="/item/Reena%20Mini%20Dress">
                                <img src="{{ asset('Assets/arrival-4-1.png')}}" alt="">
                            </a>
                        </div>
                        <div class="item">
                            <a href="/item/Kori%20Bomber">
                                <img src="{{ asset('Assets/arrival-5-1.png')}}" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="dot-list">
                        <div class="dot active" onclick="currentSlide(1)"></div>
                        <div class="dot" onclick="currentSlide(2)"></div>
                        <div class="dot" onclick="currentSlide(3)"></div>
                        <div class="dot" onclick="currentSlide(4)"></div>
                        <div class="dot" onclick="currentSlide(5)"></div>
                    </div>
                </div>
                <a onclick="nextSlide(1)" id="next"><img src="{{ asset('Assets/home-arrow-right-circle.png')}}" alt=""></a>
            </div> 
        </div>
    </section>
    <section class="promo-section">
        <div class="container">
            <h1>SPECIAL OFFER! <span>ONLY THIS WEEK</span></h1>
            <h2 id="countdown">05 Days 12 Hours 23 Minutes Left</h2>
            <div class="promo-content">
                <div class="promo-item">
                    <div class="promo-img">
                        <img src=" {{ asset('Assets/sale-1-1.png')}}" alt="">
                        <span><a href="/item/Hawaian%20Midi%20Dress"> 30% OFF</a></span>
                    </div>
                    <div class="promo-text">
                        <h3>30% OFF FOR HAWAIAN DRESS</h3>
                        <p>Summer is near! Never be<span id="dots-1">...</span><span id="read-more-1" class="read-more"> stuck in a style rut anymore with these easy-to-pair bodycon and flared fits.</span></p>
                        <a onclick="readMore('read-more-1','dots-1',this.id)" style="cursor: pointer;" class="read-more-btn" id="more-1">Read More...</a>
                        <div class="promo-hot">
                            <img src=" {{ asset('Assets/home-hot-icon.png')}}" alt="">
                            <p>12 left!</p>
                        </div>
                    </div>
                </div>
                <div class="promo-item">
                    <div class="promo-img">
                        <img src="{{ asset('Assets/sale-2-1.png')}}" alt="">
                        <span><a href="/item/Dani%20Active%20Crop"> 70% OFF</a></span>
                    </div>
                    <div class="promo-text">
                        <h3>70% OFF FOR BLACK ACTIVE SET</h3>
                        <p>Time to make your move<span id="dots-2">...</span><span id="read-more-2" class="read-more"> with activewear essentials that are designed for peak performance.</span></p>
                        <a onclick="readMore('read-more-2','dots-2',this.id)" style="cursor: pointer;" class="read-more-btn" id="more-2">Read More...</a>
                        <div class="promo-hot">
                            <img src="{{ asset('Assets/home-hot-icon.png')}}" alt="">
                            <p>8 left!</p>
                        </div>     
                    </div>
                </div>
                <div class="promo-item">
                    <div class="promo-img">
                        <img src="{{ asset('Assets/sale-3-1.png')}}" alt="">
                        <span><a href="/item/Maternity%20Drawstring%20Dress"> 20% OFF</a></span>
                    </div>
                    <div class="promo-text">
                        <h3>20% FOR MATERNITY DRESS</h3>
                        <p>Lorem ipsum dolor sit<span id="dots-3">...</span><span id="read-more-3" class="read-more"> amet, consectetur adipiscing elit. Id rutrum vitae velit imperdiet.</span></p>
                        <a onclick="readMore('read-more-3','dots-3',this.id)" style="cursor: pointer;" class="read-more-btn" id="more-3">Read More...</a>
                        <div class="promo-hot">
                            <img src="{{ asset('Assets/home-hot-icon.png')}}" alt="">
                            <p>10 left!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="overview-section">
        <div class="container">
            <div class="overview-box">
                <img src="{{ asset('Assets/home-women-wear.png')}}" alt="">
                <div class="overview-content">
                    <h1>WOMEN WEAR</h1>
                    <p>Romantic, trendy or casual – shop our full selection of ladies’ wear here.</p>
                    <div>
                        <a href="/category/women">SHOP NOW <span><img src="{{ asset('Assets/arrow-right.png')}}" alt=""></span></a>
                    </div>
                </div>
            </div>
            <div class="overview-box">
                <div class="overview-content">
                    <h1>MEN WEAR</h1>
                    <p>Check out all the freshest styles your closet needs in our men's clothing range. </p>
                    <div>
                        <a href="/category/men">SHOP NOW <span><img src="{{ asset('Assets/arrow-right.png')}}" alt=""></span></a>
                    </div>
                </div>
                <div class="overview-img"></div>
                <img src="{{ asset('Assets/home-men-wear.png')}}" alt="">
            </div>
        </div>
    </section>
    <section class="footer-section">
        <div class="container">
            <div class="left-footer">
                <img src="{{ asset('Assets/logo-website.png')}}" alt="">
                <p>We are a family of brands, driven by our desire to make great design available to everyone in a sustainable way. Together we offer fashion, design and services, that enable people to be inspired and to express their own personal style, making it easier to live in a more circular way.</p>
                <div class="social-media">
                    <a href="#"><img src="{{ asset('Assets/home-icon-instagram.png')}}" alt=""></a>
                    <a href="#"><img src="{{ asset('Assets/home-icon-twitter.png')}}" alt=""></a>
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

    <script src="{{url('./js/navbar.js')}}"></script>
</body>
</html>