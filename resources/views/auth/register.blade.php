@extends('layouts.app')

@section('content')


<section class="login-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="logo">
                    <h1 class="text-center">AdminPopular</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">

            <div class="login-box col-md-10">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{asset('contents/frontend/images/auth.jpg')}}" style="height: 100%; width:100%">
                    </div>
                    <div class="col-md-6">
                        <form class="login-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>
                            <div class="form-group">
                                <label for="name" class="control-label">{{ __('Name') }}</label>

                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>

                            <div class="form-group">
                                <label for="email" class="control-label">{{ __('E-Mail Address') }}</label>

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <button type="submit" class="btn btn-primary btn-block">
                                        {{ __('Register') }}
                                    </button>
                            </div>

                            <div class="form-group">
                                <div class="utility">
                                <p class="semibold-text mb-2"><a class="text-dark" href="{{ route('login') }}">Sign in?</a></p>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>






@endsection
