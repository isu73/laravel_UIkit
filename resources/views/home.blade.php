@extends('layouts.loginboard')
@section('content')
@error('success')
  <div class="alert bg-warning alert-dismissible fade show" role="alert">
  <strong>{{ $message }}</strong>
  <button type="button" class="btn-close shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@enderror
<div class="text-center text-white p-4" style="border: 1px solid rgba(67, 195, 209, 0.65); height: 380px; width: 350px; border-radius: 5px">
  <img src="{{ asset('images/finger-logo-wchar.png') }}" alt="Finger" style="width: 130px; height: auto"/>
    <div class="center p-5">
      <form action="pinlogin" method="POST"  class="needs-validation" novalidate>
        @csrf
        <div class="col align-self-cente">
          <label for="userPIN" class="form-label text-white"><h5><b>{{__('PIN code')}}</b></h5></label>
          <input type="password" class="form-control bg-transparent shadow-none text-white @error('user_pin') is-invalid @enderror @if(session()->has('user_pin')) is-invalid @endif" 
          name="user_pin" id="userPIN" pattern="[^[0-9]*$]{4-6}" autocomplete="off" required autofocus>
          <span class="invalid-feedback" role="alert"><small><b>PIN Required!</b></small></span>
          @error('user_pin')
            <span class="text-danger" role="alert"><small><b>{{ $message }}</b></small></span>
          @enderror
          <button type="submit" name="submitUserPIN" class="btn btn-primary text-white shadow-none w-100 mt-3">Use</button> 
          <div class="d-grid gap-2">
            <a href="forgottenpin" class="btn btn-link shadow-none text-secondary">Forgot your pin?</a>
            <button onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-link shadow-none text-secondary">Logout</button>
          </div>
        </div>
      </form>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
</div>
@endsection
