
@extends('layouts.home')

@section('pageTitle', 'Home')

@section('bodyClass', 'Home')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="Home__title">Bringing<span>Partners Together</span></h2>
			</div>
			<div class="col-md-8">
				<p class="Home__description">
					Explore dozens of franchises not only one. Speak with existing owners. More information is better than less.
				</p>
				<p>
					<button type="button" class="btn btn-lg btn-primary" data-toggle="modal" data-target="#FormInquiry">
						Inquire Now
					</button>
					<a href="/our-brands" class="btn btn-lg btn-default">Our Brands</a>
				</p>
			</div>
		</div>
	</div>

	@include('public.brands._inquiry-form')
@endsection