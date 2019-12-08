@extends('layout.mainlayout')
@push('head')
<!-- Styles -->
<!-- <link href="{{ asset('css/pizza.css') }}" rel="stylesheet"> -->
<!-- Scripts -->
@endpush
@section('content')
<div id="content" class="container">

<!-- iterate through the list of books and display each book --> 
<div class="row">
@foreach ($books as $book)
            <div class="col-4 card">
            <!--Iteration number is: {{$loop->index}}-->
        <img class="card-img-top"
             src="http://covers.openlibrary.org/b/isbn/{{$book->isbn}}-M.jpg" height="300" width="300" alt="Card image">
        <div class="card-body">
          <h3 class="card-title">{{$book->title}}</h3>
          <h5 class="card-title">ISBN: {{$book->isbn}}</h5>
          <h5 class="card-title">Author(s): {{$book->authors}}</h5>
          <p class="card-text">{{$book->description}}</p>
          <a href="/glb/book/{{$book->id}}" class="btn btn-primary">See Details</a>
        </div>
        </div>
@endforeach
</div>

</div><!--content end-->

@endsection
@push('footer-scripts')
<!-- <script type="text/javascript" src="{{ URL::asset('js/loadBooks.js') }}"></script> -->
@endpush

