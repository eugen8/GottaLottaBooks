<!DOCTYPE html>

<html lang="en">

 <head>

   @include('layout.partials.head')

 </head>

 <body>


<div class="container">
@include('layout.partials.nav')


@include('layout.partials.header')

<div class ="mt-5">
@yield('content')
</div>

@include('layout.partials.footer')




</div>

@include('layout.partials.footer-scripts')
 </body>

</html>