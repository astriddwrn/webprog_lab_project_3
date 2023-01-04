<!DOCTYPE html>
<html lang="en">
<head>
@include('partials.head')
</head>
<body>

@include('partials.navbar')
    <h2 class="text-center my-4">Profile</h2>
    <div class="row w-100 d-flex flex-column align-items-center">
            <div class="col-5">
                <div class="card mb-3">
                <div class="card-body">
                    <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->name }}
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->email }}
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Gender</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->gender }}
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Date of Birth</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->date_of_birth }}
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    <div class="col-sm-3">
                        <h6 class="mb-0">Country</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                        {{ $user->country }}
                    </div>
                    </div>
                    <hr>
                    <div class="row">
                    
                    
                    <form method="POST" action="{{ route('logout') }}">
                        <div class="col-sm-12">
                        @csrf
                        <a href="{{ route('logout') }}" style="color: inherit;"><button type="button" class="btn btn-secondary w-100 text-white" onclick="event.preventDefault(); this.closest('form').submit();" >Logout</a></button>
                        </div>
                    </form>    
                
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>