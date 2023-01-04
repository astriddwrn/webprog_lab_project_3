<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{url('./css/style.css')}}">
    <script src="{{url('./js/jquery-3.5.1.js')}}"></script>
    <script src="{{url('./js/script.js')}}"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
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
    <div class="container">
         @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
        @endif
        <div class=" text-center mt-5 ">
            <h1 >Add Product</h1>
        </div>

        <div class="row ">
            <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                    <div class="card-body bg-light">
                        <div class = "container">
                            <form id="contact-form" role="form" action="{{ route('dashboard.store') }}" method="POST">
                            @csrf
                            
                                <div class="controls">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Product Name</label>
                                                <input id="form_name" type="text" name="id" class="form-control" required >                                                    
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Choose Category</label>
                                                <select id="form_need" name="category_id" class="form-control" required>
                                                    <option value="" selected disabled>--Select Category--</option>
                                                    <option value="women">Women</option>
                                                    <option value="men">Men</option>
                                                </select>                               
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Rating (1-5)</label>
                                                <input id="form_name" type="number" name="rating" class="form-control" required>                       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Price (Rp)</label>
                                                <input id="form_name" type="number" name="price" class="form-control" required>                       
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="form_need">Discount (%)</label>
                                                <input id="form_name" type="number" name="discount" class="form-control" required>                       
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="form_name">Description</label>
                                                <div><textarea id="description" name="description" rows="4" cols="50" required></textarea></div>                               
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Add Product" >        
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>