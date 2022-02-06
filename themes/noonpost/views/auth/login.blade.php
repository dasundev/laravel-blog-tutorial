@extends('layouts.master')

@section('content')
    <!--Login-->
    <section class="section pt-55 mb-50">
        <div class="container">
            <div class="sign widget">
                <div class="section-title">
                    <h5>{{ __('Login') }}</h5>
                </div>
                <form  action="{{ route('login') }}" class="sign-form widget-form" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email*" name="email" value="{{ old('email') }}">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password*" name="password" value="">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="sign-controls form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="rememberMe" name="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="rememberMe">{{ __('Remember Me') }}</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="btn-link ml-auto" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-custom">Login</button>
                    </div>
                    <p class="form-group text-center">Don't have an account? <a href="register.html" class="btn-link">Create One</a> </p>
                </form>
            </div>
        </div>
    </section>
    @include('includes.newsletter')
@endsection
