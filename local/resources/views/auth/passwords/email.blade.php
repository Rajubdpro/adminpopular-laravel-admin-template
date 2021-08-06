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
                
                @if (session('status'))
                <br>
                <div class="alert alert-success text-center" role="alert">
                    {{ session('status') }}
                </div>
                @endif
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('local/public/contents/frontend/images/auth.jpg')}}" style="width: 504px;height: auto;">
                    </div>
                    <div class="col-md-6">

                        <form class="login-form" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>Reset Password</h3>
                            <div class="form-group">
                                <label class="control-label">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <div class="utility">
                                    <p class="semibold-text mb-2"><a class="text-dark" href="{{ route('register') }}">Create an Account ?</a></p>
                                    <p class="semibold-text mb-2"><a class="text-dark" href="{{ route('login') }}">Sign In ?</a></p>
                                </div>
                            </div>
                            <div class="form-group btn-container">
                                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>{{ __('Send Password Reset Link') }}</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection