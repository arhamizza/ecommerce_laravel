@extends('layout.core')
@section('title', 'Login')
@section('contents')

<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Login</a></li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <div class="page-login">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="account-border">
                    <div class="row">
                        <div class="col-sm-6 new-customer">
                            <div class="well">
                                <h2><i class="fa fa-file-o" aria-hidden="true"></i> New Customer</h2>
                                <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                            </div>
                            <div class="bottom-form">
                                <a href="#" class="btn btn-default pull-right">Continue</a>
                            </div>
                        </div>

                        <form action="#" method="POST" enctype="{{ route('login') }}">
                            @csrf
                            <div class="col-sm-6 customer-login">
                                <div class="well">
                                    <h2><i class="fa fa-file-text-o" aria-hidden="true"></i> Returning Customer</h2>
                                    <p><strong>I am a returning customer</strong></p>
                                    <div class="form-group">
                                            <label class="control-label " for="input-email">{{ __('Email Address') }}</label>

                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label " for="input-password">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>


                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="bottom-form">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="forgot">{{ __('Forgot Your Password?') }}</a>
                                    @endif

                                    <input type="submit" value="Login" class="btn btn-default pull-right" >


                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- //Main Container -->



@endsection