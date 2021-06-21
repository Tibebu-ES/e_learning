@extends('layouts.authorize')

@section('auth_content')
    <section>
        <div class="container">
            <div class="signin-content">
                <div class="signin-image">
                    <figure><a href="{{ url('/') }}"><img src="{{asset('img/admin/admin-logo.png')}}" alt="sing up image"></a></figure>
                </div>

                <div class="signin-form">
                    <h2 class="form-title">Admin - Sign in</h2>
                    <form method="POST" action="{{ route('admin.login.submit') }}" class="register-form" id="login-form">
                        @csrf
                        <div class="form-group">
                            <label for="email"><i class="fa fa-address-book"></i></label>
                            <input type="text" name="email" id="your_name" placeholder="Email"/>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password"><i class="fa fa-lock"></i></label>
                            <input type="password" name="password" id="your_pass" placeholder="Password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group form-button">
                            <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        </div>
                    </form>

                    <br>
                    @if(Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                </div>
            </div>
        </div>
    </section>
@endsection
