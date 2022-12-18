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
            <img src="{{asset('contents/frontend/images/auth.jpg')}}" style="width: 500px;height: auto;">
          </div>
          <div class="col-md-6">
            <form class="login-form" method="POST" action="{{ route('login') }}">
              @csrf
              <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
              <div class="form-group">
                <label class="control-label">USERNAME</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <label class="control-label">PASSWORD</label>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <div class="utility">
                  <p class="semibold-text mb-2"><a class="text-dark" href="{{ route('register') }}">Create an Account ?</a></p>
                  <p class="semibold-text mb-2"><a href="{{ route('password.request') }}">Forgot Password ?</a></p>
                </div>
              </div>
              <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
