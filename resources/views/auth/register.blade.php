<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label value="{{ __('Name') }}" />
                <x-jet-input class="block mt-1 w-full" type="text" name="name" :value="old('name')" autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Gender') }}" />
                <div class="row">
                    <x-jet-input class="mt-1" type="radio" name="gender" value="Female" :value="old('gender')"/> Female
                    <x-jet-input class="mt-1" type="radio" name="gender" value="Male" :value="old('gender')" /> Male
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="date_of_birth" value="Date of Birth" />
                <x-jet-input id="date_of_birth" name="date_of_birth" type="date" class="mt-1 block w-full"  :value="old('date_of_birth')" autocomplete="date_of_birth"/>
            </div>

            <div class="mt-4">
                <x-jet-label for="country" value="{{ __('Country') }}" />
                <select id="country" name="country" class="block mt-1 w-full" :value="old('country')" autocomplete="country">
                    <option value="">--Please choose your country-</option>
                    <option value="Indonesia">
                        Indonesia
                    </option>
                    <option value="United State">
                        United State
                    </option>
                </select>
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Email') }}" />
                <x-jet-input class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password" autocomplete="new-password" :value="old('password')"  />
            </div>

            <div class="mt-4">
                <x-jet-label value="{{ __('Confirm Password') }}" />
                <x-jet-input class="block mt-1 w-full" type="password" name="password_confirmation" autocomplete="new-password" :value="old('password_confirmation')"  />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>


<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbatos</title>
    <link rel="icon" href="{{ asset('Assets/favicon.png')}}">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('./css/auth.css') }}">
</head>
<body>
    
    
        <div class="main-cont row nopadding">
            <div class="left-section position-relative nopadding col-xl-5 col-lg-4 col-0">
                
                <img src="{{ url('./assets/signup-1.png ') }}" alt="" class="position-fixed background">
            </div>
            <div class="right-section pt-5 col-xl-7 col-lg-8 col-12 d-flex flex-direction-row justify-content-center">
                <div class="d-flex flex-column mt-md-5 mt-0 mx-md-5 mx-1">
                <a href=""><img src="  {{ url('./assets/logo-website.png ') }}" alt="" class="logo m-5 position-absolute"></a>

                @error('email')
                    <div class="row">
                        <div class="col-12 mt-3">
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        </div>
                    </div>
                @enderror

                    <div class="title">SHOPPING THE WAY<br><span class="bold"><i>YOU LIKE IT!</i></b></span></div>
                    <div class="slogan mb-3">Welcome. Please fill the form below to start shopping in style.</div>
    
                    <form method="POST" action="{{ route('register') }}" class="form-signup d-flex flex-column">
                        @csrf
                            <div class="label-off mt-4">Name</div>
                            <input type="text" name="name" id="name" class="border-success" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" :value="old('name')">
                            <div class="label-off mt-4">Email</div>
                            <input type="email" name="email" id="email" class="border-success" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" :value="old('email')">
                            <div class="label-off mt-4">Password</div>
                            <input type="password" name="password" id="password" class="border-success" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" >
                            <div class="label-off mt-4">Confirm Password</div>
                            <input type="password" name="password_confirmation" id="password_confirmation" class="border-success" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
                            <div class="mt-3 d-flex flex-row align-items-center radio-error">
                                <input type="radio" name="radio" id="radio" value="Agree">
                                <label for="radio" class="mx-3">I Agree to Term and Conditions</label>
                            </div>
                            <div>
                                
                            </div>
                            <div class="d-flex flex-column align-items-center mt-3">
                                <button type="submit" class="col-md-8 col-12 mt-5 py-1">CREATE ACCOUNT</button>
                                <a href="{{ route('login') }}" class="my-3 mb-5"><i>Login Into Account</i></a>
                            </div>
                        
                    </form>
                </div>
            </div>
        </div>
    
    <script src="https://www.markuptag.com/bootstrap/5/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('./js/jquery-3.5.1.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>
    <script src="{{ url('./js/auth.js') }}"></script>
    
     
</body>
</html> -->