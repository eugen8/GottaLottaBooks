@extends('layout.mainlayout')

@section('content')
   
<div>
Information to change should show below here
</div>

@guest

    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>

@if (Route::has('register'))
        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
@endif
</div>


@endguest

@auth

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  {{Auth::user()->name}}
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">View my books</button>
    <button class="dropdown-item" type="button"> Edit Profile</button>
    <a class="dropdown-item" href="{{ url('/logout') }}"> Logout </a>
  </div>
</div>
@endauth 
@endsection

