@extends('layout.core')
@section('title', 'Register')
@section('contents')
<!-- Main Container  -->
<div class="main-container container">
    <ul class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i></a></li>
        <li><a href="#">Account</a></li>
        <li><a href="#">Register</a></li>
    </ul>

    <div class="row">
        <div id="content" class="col-sm-12">
            <h2 class="title">Register Account</h2>
            <p>If you already have an account with us, please login at the <a href="{{ route('login') }}">login page</a>.</p>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <fieldset id="account">
                    <legend>Your Personal Details</legend>
                    <div class="form-group required" style="display: none;">
                        <label class="col-sm-2 control-label">Customer Group</label>
                        <div class="col-sm-10">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="customer_group_id" value="1" checked="checked"> Default
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>
                        <div class="form-group required">
                            <div class="col-sm-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                            <div class="col-sm-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group required">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                            <div class="col-sm-10">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-sm-10">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="" class="col-md-4 col-form-label text-md-end">Ingin mendaftar sebagai apa?</label>
                            <div class="col-sm-10">
                            <select class="form-select col-sm-4" name="role_as" >
                                <option value="0">Pembeli</option>
                                <option value="2">Penjual</option>
                            </select>
                            </div>
                        </div>
                    </div>
                </fieldset>

                <div class="buttons">
                    <div class="pull-right">

                        <button type="submit" class="btn btn-primary">
                            {{ __('Register') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- //Main Container -->
@endsection
