<!DOCTYPE html>

<html lang="en">

 <head>

   @include('layout.partials.head')

 </head>

 <body>


<div class="container">
@include('layout.partials.nav')


@include('layout.partials.header')

@yield('content')


@include('layout.partials.footer')


@include('layout.partials.footer-scripts')

</div>


 </body>

</html>