@extends('layouts.app')

@section('pageTitle', "Queen's Chips")

@section('header_styles')
	<link rel="stylesheet" href="/css/brand.css" />
@endsection

@section('bodyClass', 'Queens-chips Single-brand')

@section('content')
	<div class="Brand">
		<div class="Brand__header Flex">
			<div class="Flex Flex--column Column-3">
				<div class="Brand__logo Flex Flex--center Flex-1">
					{!! file_get_contents(public_path() . '/images/queens-chips/logo.svg') !!}
				</div>

				@include('public.brands._inquiry-button')
			</div>

			<div class="Brand__hero Flex Flex--center Column-9">
				<button class="btn btn-link" data-toggle="modal" data-target="#VideoModal">
					<div class="play-video-icon Flex Flex--center">
						<span></span>
					</div>
				</button>
			</div>
		</div>

		<div class="Brand__content">
			<div class="Row">
				<div class="Column-9">
					<div class="Row Flex--column">
						<div class="Column-12">
							<div class="Brand__images">
								<div class="flexslider">
									<ul class="slides">
										@foreach( range(1, 6) as $index )
										<li>
											<img src="/images/queens-chips/slides/slide{{$index}}.jpg" alt="Queen's Chips" title="Queen's Chips" class="img-responsive" />
										</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Column-3 Flex Flex--column">
					<div class="Brand__emoji Flex Flex-1 Flex--center">
						<h3 class="Section__title emoji">:)</h3>
					</div>
					<div class="Brand__testimonials Flex Flex-1 Flex--center Flex--column">
						<i class="fa fa-quote-left fa-3x color-white"></i>
						<div class="testimonials">
							<ul class="slides">
								<li class="Brand__testimonial">
									<blockquote>
										<p class="Brand__testimonial--text color-white">
											Freshly prepared chips. Huge portions provide excellent value for the money. Lots of interesting sauce choices to add a little 'zest' to the chips.
										</p>
									</blockquote>
								</li>
							</ul>
						</div>

					</div>
				</div>
			</div>
			<div class="Row">
				<div class="Column-12">
					<div class="About">
						<div class="row">
							<div class="col-md-7">
								<h1 class="Section__title">About Queen's Chips</h1>
								<p>
									Amsterdam is a city of tulips, windmills, museums, bicycles.
									A city that everyone who visits the witch, with its atmosphere so fascinating.
									Amsterdam is a city to live and to explore by foot, discovering in its streets
									a must in the international street food: french fries Dutch.
								</p>
								<p>
									<strong>STREET FOOD STYLE. THE TASTE THAT DOES TREND.</strong>
								</p>
								<p>&nbsp;</p>
								<h3 class="Section__title">Immediate Opportunities</h3>
								<p>
									Our Brands always looking to expand.<br />
									Right now we're excited about - but not limited to - opportunities in these exciting locations!
								</p>
								<ul>
									<li>For other locations:</li>       		
								</ul>
								<p>&nbsp;</p>
				                <h3 class="Section__title">Who we're looking for?</h3>
								<ul>
									<li>People passionate about Queen's Chips</li>
									<li>People who want to own their own business/control their own destiny</li>
									<li>People with strong leadership skills</li>
									<li>People who will be actively engaged in delivering the PERFECT GUEST EXPERIENCE and restaurant profitability</li>
									<li>People with a proven track record of success in business</li>
									<li>People with strong local knowledge and relationships in the community they will do business in</li>
								</ul>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>

		<div class="modal fade" id="VideoModal" tabindex="-1" role="dialog">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
						<img src="/images/logo.png" alt="Mr. Franchise logo" title="Mr. Franchise logo" class="img-responsive" />
					</div>
					<div class="modal-body">
						<video id="brand-video" class="video-js" controls muted preload="auto" data-setup="{}">
							<source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a web browser that
								<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
							</p>
						</video>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		@include('public.brands._inquiry-form')

	</div>
@endsection

@section('content_after_container')
	@include('public.brands._get-started', [
		'website'	=> 'http://www.queenschips.eu/'
	])
@endsection

@section('footer_scripts')
	<script src="/js/brand.js"></script>
@endsection