@extends('layouts.app')

@section('pageTitle', "Krush Burger")

@section('header_styles')
	<link rel="stylesheet" href="/css/brand.css" />
@endsection

@section('bodyClass', 'Krush-burger')

@section('content')
	<div class="Brand">
		<div class="Brand__header Flex">
			<div class="Flex Flex--column Column-3">
				<div class="Brand__logo Flex Flex--center Flex-1">
					{!! file_get_contents(public_path() . '/images/krush-burger/logo.svg') !!}
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
										<li>
											<img src="/images/krush-burger/slides/slide.jpg" alt="Queen's Chips" title="Queen's Chips" class="img-responsive" />
										</li>
										<li>
											<img src="/images/krush-burger/slides/slide.jpg" alt="Queen's Chips" title="Queen's Chips" class="img-responsive" />
										</li>
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
								@foreach( range(1,3) as $testimonial)
									<li class="Brand__testimonial">
										<blockquote>
											<p class="Brand__testimonial--text color-white">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											</p>
										</blockquote>
									</li>
								@endforeach
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
								<h1 class="Section__title">About Krush Burger</h1>
								<p>
									Krush Burger is committed to providing a unique burger experience in a fun and lively atmosphere. We prepare our signatures sauces in-house daily, cook our fresh never-frozen Angus Beef to order and hand toast each freshly baked Brioche Bun.
								</p>
								<p>
									Krush Burger, wholly owned by Krush Burger International LLC was founded in 2011 and is headquartered in Roseville, CA. 
								</p>
								<p>&nbsp;</p>
								<h3 class="Section__title">Immediate Opportunities</h3>
								<p>
									Our Brands always looking to expand.<br />
									Right now we're excited about - but not limited to - opportunities in these exciting locations!
								</p>
								<ul>
									<li>KSA (Middle &amp; East Region)</li>
									<li>Bahrain</li>
									<li>Kuwait</li>
									<li>Oman</li>
									<li>Egypt</li>		
								</ul>
								<p>&nbsp;</p>
				                <h3 class="Section__title">Who we're looking for?</h3>
								<ul>
									<li>People passionate about Krush Burger</li>
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
							<source src="https://www.youtube.com/embed/EjJ77qejNV0" type='video/mp4'>
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
	<div class="Download-container">
		<div class="container">
			<div class="Row">
				<div class="Column-6">
					<h3 class="Section__title">Download our App</h3>

					<ul class="Flex">
						<li>
							<a href="#" class="Download Download--appstore">
								Available on the App Store
							</a>
						</li>	
						
						<li>
							<a href="#" class="Download Download--google-play">
								Android app on Google Play
							</a>
						</li>	
					</ul>
				</div>

{{-- 				<div class="Column-6 Flex Flex--column Flex--end">
					<h3 class="Section__title">Ready to get started? Get in touch</h3>
					<div>
						<button type="button" class="btn btn-lg btn-default" data-toggle="modal" data-target="#FormInquiry">
							Inquire Now
						</button>
						<a href="/contact" class="btn btn-lg btn-default">Contact Us</a>
						<a href="#" class="btn btn-lg btn-default">Visit Website</a>
					</div>
				</div> --}}
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="/js/brand.js"></script>
@endsection