{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from omah.dexignzone.com/laravel/demo/page-register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 00:00:35 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Register</title>
    <meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/d_assets/images/favicon.png">
    <link href="/d_assets/css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
				<div class="col-md-6">
      <div class="authincation-content">
          <div class="row no-gutters">
              <div class="col-xl-12">
                  <div class="auth-form">
                      <div class="text-center mb-3">
                        <a href="{{ route('welcome') }}"><img  src="/asset/images/logo.png" style="width: 300px" alt=""></a>
                      </div>
                      <h4 class="text-center mb-4">Sign up your account</h4>
                      <form action="{{ route('register') }}" method="POST"> @csrf
                          <div class="form-group">
                              <label class="mb-1"><strong>Name</strong></label>
                              <input type="text" name="name" class="form-control" placeholder="username">
                          </div>
                          <div class="form-group">
                              <label class="mb-1"><strong>Email</strong></label>
                              <input type="email" name="email" class="form-control" placeholder="hello@example.com">
                          </div>
                          <div class="form-group">
                              <label class="mb-1"><strong>Password</strong></label>
                              <input type="password" name="password" class="form-control" >
                          </div>
                          <div class="form-group">
                              <label class="mb-1"><strong>Confirm Password</strong></label>
                              <input type="password" name="password_confirmation" class="form-control">
                          </div>
                          <div class="text-center mt-4">
                              <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                          </div>
                      </form>
                      <div class="new-account mt-3">
                          <p>Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
            </div>
        </div>
    </div>
<script src="/d_assets/vendor/global/global.min.js" type="text/javascript"></script>
					<script src="/d_assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
				<script src="/d_assets/js/custom.min.js" type="text/javascript"></script>
				<script src="/d_assets/js/deznav-init.js" type="text/javascript"></script>
	
	<script id="DZScript" src="../../../dzassets.s3.amazonaws.com/w3-global8bb6.js?btn_dir=right"></script>


	<!--		<script src="https://omah.dexignzone.com/laravel/demo/js/custom.min.js" type="text/javascript"></script>
			<script src="https://omah.dexignzone.com/laravel/demo/js/deznav-init.js" type="text/javascript"></script> -->
<!--	
 	--></body>


<!-- Mirrored from omah.dexignzone.com/laravel/demo/page-register by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Aug 2023 00:00:35 GMT -->
</html>