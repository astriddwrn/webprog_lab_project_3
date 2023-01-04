<!DOCTYPE html>
<html lang="en">
<<head>
@include('partials.head')
</head>
<body>

@include('partials.navbar')

    <section class="all-category"> 
        <div class="container">
            
                @if($category)
                    @if ($category->id == 'men')
                        <div class="banner men">
                            <h1>MEN WEAR</h1>
                            <p>Check out all the freshest styles your closet needs in our men's clothing range. </p>
                        </div>
                    @elseif ($category->id == 'women')
                        <div class="banner women">
                            <h1>WOMEN WEAR</h1>
                            <p>Romantic, trendy or casual – shop our full selection of ladies’ wear here. </p>
                        </div>
                    @endif
                @else 
                    <div class="banner all">
                        <h1>ALL FASHION</h1>
                        <p>You have no limits in your clothing.<br>Let you face the world in style.</p>
                    </div>
                @endif
            
            <div class="all-gallery">
                @if($category)
                    @foreach($category->items as $item)
                    <div class="item">
                    <div class="item-image">
                    @foreach($item->pictures as $picture)
                        @if($loop->first)
                        <img src="{{asset('Assets/' . $picture->location)}}" alt="">
                        @endif
                    @endforeach

                        <div class="overlay">
                            <a href="/item/{{$item->id}}">View</a>
                        </div>
                    
                    </div>
                    
                    <div class="item-info" style="text-transform: uppercase;">
                        <h2>{{$item->id}}</h2>
                    </div>
                    @if( $item->discount > 0)
                        <div class="item-price discount">
                            <p>Rp {{$item->price}}</p>
                            <p class="price-discount"></p>
                            <input type="hidden" class="price-input" value="{{$item->price}}">
                            <input type="hidden" class="discount-input" value="{{$item->discount}}">
                            
                        </div>
                    @else
                        <div class="item-price">
                        <p>Rp {{$item->price}}</p>
                        </div>
                    @endif
                </div>
                @endforeach
                
                @elseif($items)
                    @foreach($items as $item)
                    <div class="item">
                    <div class="item-image">
                    @foreach($item->pictures as $picture)
                        @if($loop->first)
                        <img src="{{asset('Assets/' . $picture->location)}}" alt="">
                        @endif
                    @endforeach

                        <div class="overlay">
                            <a href="/item/{{$item->id}}">View</a>
                        </div>
                    
                    </div>
                    
                    <div class="item-info" style="text-transform: uppercase;">
                        <h2>{{$item->id}}</h2>
                    </div>
                    @if( $item->discount > 0)
                        <div class="item-price discount">
                            <p>Rp {{$item->price}}</p>
                            <p class="price-discount"></p>
                            <input type="hidden" class="price-input" value="{{$item->price}}">
                            <input type="hidden" class="discount-input" value="{{$item->discount}}">
                            
                        </div>
                    @else
                        <div class="item-price">
                        <p>Rp {{$item->price}}</p>
                        </div>
                    @endif
                </div>
                @endforeach
                @endif
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
                let $priceDiscount = Math.floor($price - ($price*$discount/100));
                $(this).text('Now Rp ' + $priceDiscount);
            })
        });
    </script>
    <script src="{{url('js/navbar.js')}}"></script>
</body>
</html>