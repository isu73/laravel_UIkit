@extends('layouts.app')
@section('content')
    <div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s" uk-grid>
        <div class=""></div>
        <div class="uk-margin-medium uk-padding-small">
            <div class="uk-text-center">
                <h3 class="text-white">{{ __('Registration') }}</h3>
            </div>
            <form class="uk-grid-small" uk-grid>
                    <div class="uk-width-1-2@s">
                        <label for="firstname"  class="uk-form-label text-white">{{ __('First Name') }}</label>
                        <input class="uk-input" type="text"  aria-label="50">
                    </div>
                    <div class="uk-width-1-2@s">
                        <label for="lastname"  class="uk-form-label text-white">{{ __('Last Name') }}</label>
                        <input class="uk-input" type="text" aria-label="50">
                    </div>
                    <div class="uk-width-1-1">
                    <label for="company"  class="uk-form-label text-white">{{ __('Company Name') }}</label>
                    <input id="company" type="text" class="uk-input @error('company') is-invalid @enderror" name="company" value="{{ old('company') }}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                    <div class="uk-width-1-1">
                        <label for="email"  class="uk-form-label text-white">{{ __('Email') }}</label>
                        <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="uk-width-1-1">
                        <label for="password"  class="uk-form-label text-white">{{ __('Password') }}</label>
                        <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                        @enderror
                    </div>
                    <div class="uk-width-1-1 uk-margin-medium-bottom">
                        <label for="password-confirm"  class="uk-form-label text-white">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="uk-input" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="uk-flex-row">
                        <div class="uk-margin-small-bottom">
                            <button type="submit" class="uk-button bg-navi-blue">
                                {{ __('Registration') }}
                            </button>
                        </div>
                    </div>
                </form>
        </div>
        <div class="uk-text-right">
            @if (Route::has('login'))
                <div class="uk-padding-small">
                    <a href="/" class="text-sm text-gray-700 dark:text-gray-500 underline"><span uk-icon="icon: home"></span></span></a>
                </div>
            @endif
        </div>
    </div>
@endsection
