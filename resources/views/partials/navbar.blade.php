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
                    <form action="{{ route('search') }}" method="GET">
                        <div id="search-wrapper">
                            <a id="search-bar">
                                <img src="{{ asset('Assets/category-search.png')}}" alt="">
                                <input type="text" name="search" id="search">
                            </a>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a href="/cart" style="display: flex; align-items: center;">
                    <img src="{{ asset('Assets/home-shopping-cart.png')}}" alt="">
                </a>
            </li>
            
            @if (auth()->check())
                @if (auth()->user()->role_as == '1')
                    <li class="nav-item"><a href="{{ url('/admin/dashboard') }}" id="login-btn">Dashboard</a></li>
                @endif
                <li class="nav-item"><a href="{{ url('/profile') }}" id="login-btn">Profile</a></li>
                
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