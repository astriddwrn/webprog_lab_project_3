<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title></title>
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



<style>
body {
    color: #404E67;
    font-family: 'Open Sans', sans-serif;
}
.table-wrapper {
    width: 700px;
    margin: 30px auto;
    background: #fff;
    padding: 20px;	
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {
    padding-bottom: 10px;
    margin: 0 0 10px;
}
.table-title h2 {
    margin: 6px 0 0;
    font-size: 22px;
}
.table-title .add-new {
    float: right;
    height: 30px;
    font-weight: bold;
    font-size: 12px;
    text-shadow: none;
    min-width: 100px;
    border-radius: 50px;
    line-height: 13px;
}
.table-title .add-new i {
    margin-right: 4px;
}
table.table {
    table-layout: fixed;
}
table.table tr th, table.table tr td {
    border-color: #e9e9e9;
}
table.table th i {
    font-size: 13px;
    margin: 0 5px;
    cursor: pointer;
}
table.table th:last-child {
    width: 100px;
}
table.table td a {
    cursor: pointer;
    display: inline-block;
    margin: 0 5px;
    min-width: 24px;
}    
table.table td a.add {
    color: #27C46B;
}
table.table td a.edit {
    color: #FFC107;
}
table.table td a.delete {
    color: #E34724;
}
table.table td i {
    font-size: 19px;
}
table.table td a.add i {
    font-size: 24px;
    margin-right: -1px;
    position: relative;
    top: 3px;
}    
table.table .form-control {
    height: 32px;
    line-height: 32px;
    box-shadow: none;
    border-radius: 2px;
}
table.table .form-control.error {
    border-color: #f50000;
}
table.table td .add {
    display: none;
}
</style>

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

<div class="d-flex flex-column align-items-center">
    <div class="row">
        <div class="margin-tb ">
            <div class="">
                <h2>Dashboard</h2>
            </div>
            <div class="my-4">
                <a class="btn btn-success" href="{{ route('dashboard.create') }}"> Create New item</a>
            </div>
        </div>
    </div>
    @if($errors->any())
            {!! implode('', $errors->all('<div>:message</div>')) !!}
    @endif
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered w-75">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Catgory</th>
            <th>Rating</th>
            <th>Price</th>
            <th>Discount</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($items as $item)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $item->id }}</td>
            <td>{{ $item->category->id }}</td>
            <td>{{ $item->rating }}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount }}%</td>
            <td>
                <form action="{{ route('dashboard.destroy',$item->id) }}" method="POST">

                    <a class="btn btn-primary" href="{{ route('dashboard.edit',$item->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
</body>
</html>