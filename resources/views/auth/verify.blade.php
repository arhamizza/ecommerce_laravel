@extends('layout.core')
@section('title', 'verify')
@section('contents')
<div class="container text-center verif">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header verif1">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body verif1">
                    @if (session('resent'))
                        <div class="alert alert-success  mb-2" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline verif1" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-primary p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
