@extends('layouts.app')

@section('content')


<section class="login-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <h1 class="text-center">Building Manager</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="login-box col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('local/public/contents/frontend/images/auth.jpg')}}" style="width: 500px;height: auto;">
                    </div>
                    <div class="col-md-6">
                        <form class="login-form" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>{{ __('Reset Password') }}</h3>
                            <div class="form-group">
                                <label class="control-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="control-label">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="control-label">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <div class="utility">
                                    <p class="semibold-text mb-2"><a class="text-dark" href="{{ route('register') }}">Create an Account ?</a></p>
                                    <p class="semibold-text mb-2"><a href="{{ route('password.request') }}">Forgot Password ?</a></p>
                                </div>
                            </div>
                            <div class="form-group btn-container">
                                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>{{ __('Reset Password') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection