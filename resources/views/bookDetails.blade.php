@extends('layout.mainlayout')

@section('content')

<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{$book->image_url}}" class ="img-fluid" alt ="Responsive image"></div>

						</div>
						<!-- <ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-2" data-toggle="tab"><img src="image2.jpg" /></a></li>
						  <li><a data-target="#pic-3" data-toggle="tab"><img src="image3.jpg" /></a></li>
						</ul> -->
					</div>
					
					<div class="details col-md-6">
						<h2 class="product-title">{{$book->title}}</h2>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<h3>About the book</h3>
						<p class="product-description">{{$book->description}}</p>
						<h4 class="price">Author: <span>{{$book->authors}}</span></h4>
						<p class="vote"><strong>2</strong> of users have the book right now. <strong> Mai Huynh, Hien Ho</strong></p>
						<h4 class="sizes">Owners:
							<span class="owner1" data-toggle="tooltip" title="small">Mike Nguyen, &nbsp; </span>
							<span class="owner2" data-toggle="tooltip" title="medium">Jacob Lietz, &nbsp; </span>
							<span class="onwer3" data-toggle="tooltip" title="large">Steven Banks</span>
						</h4>
						<h4 class="zipcode">Zipcode: 50131 </h4>
						<h4 class ="zipcode">City/State: Iowa</h4>

						<div class="action">
							<button class="add-to-cart btn btn-default" type="button">Contact Owner</button>
							<!-- <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button> -->
						</div>
<<<<<<< HEAD
						@endforeach
=======
>>>>>>> a0984b5... bookDetails (#16)
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection