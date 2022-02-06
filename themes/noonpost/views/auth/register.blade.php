@extends('layouts.master')

@section('content')
    <!--register-->
    <section class="section pt-55 mb-50">
        <div class="container-fluid">
            <div class="sign widget">
                <div class="section-title">
                    <h5>{{ __('Register') }}</h5>
                </div>

                <form class="sign-form widget-form" action="{{ route('register') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Your name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Your password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-type password">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn-custom">{{ __('Register') }}</button>
                    </div>
                    <p class="form-group text-center">Already have an account? <a href="{{ route('login') }}" class="btn-link">Login</a> </p>
                </form>
            </div>
        </div>
    </section>
    @include('includes.newsletter')
@endsection
