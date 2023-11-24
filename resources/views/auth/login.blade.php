@extends('layouts.app')
@section('content')
<div class="uk-width-small-1-2 uk-container-center">
    <div class="uk-float-right">
        @if (Route::has('login'))
            <div class="uk-padding-small">
                <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline"><span uk-icon="icon: home"></span></span></a>
            </div>
        @endif
    </div>
    <div class="uk-flex-row">
        <div class="uk-position-center">
            <div class="uk-card uk-width-large@s uk-padding-small border-navi-blue border-1">
                <div class="uk-card-header uk-text-center"><span uk-icon="icon: bolt; ratio: 2"></span>LOGO</div>
                <div class="uk-card-body uk-padding-medium">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="uk-grid-row-large">
                            <label for="email" class="uk-width-small">{{ __('Email Address') }}</label>
                            <div class="uk-margin-small-bottom">
                                <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="uk-flex-row">
                            <label for="password" class="uk-width-small">{{ __('Password') }}</label>
                            <div class="uk-margin-small-bottom">
                                <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="uk-flex-row">
                            <div class="uk-margin-medium-bottom">
                                <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
                                    <label class="uk-width-small uk-form-label text-white"><input class="uk-checkbox uk-background-secondary" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}</label>
                                </div>
                            </div>
                        </div>

                        <div class="uk-flex-row">
                            <div class="uk-margin-small-bottom">
                                <button type="submit" class="uk-button bg-navi-blue">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <p>
                                        <a class="uk-link-muted uk-text-small" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </p>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
