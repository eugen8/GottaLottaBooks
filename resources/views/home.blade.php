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
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>





<div>
Current User Email: 
</br>
{{Auth::user()->email}}
</div>
    {{ Auth::user()->name }} <span class="caret"></span>
<a href="{{ url('/logout') }}"> Logout </a>


@endauth 
@endsection

