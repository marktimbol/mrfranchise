@extends('layouts.app')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
	<link rel="stylesheet" href="{{ elixir('css/carousel.css') }}" />
@endsection

@section('content')
	<div class="Brand">
		<div class="Brand__header Flex">
			<div class="Brand__logo--container Flex Flex--column">
				<div class="Brand__logo Flex Flex--center Flex-1">
					logo svg animation
				</div>

				<div class="Brand__inquiry Flex Flex--center Flex-1 Flex--column">
					<h3 class="Section__title">Convinced?</h3>
					<a href="#" class="btn btn-lg btn-inquire">Inquire now</a>
				</div>
			</div>

			<div class="Brand__hero Flex Flex--end">
				<div class="Brand__hero--content">
					<p class="Brand__hero--description">
						Amsterdam is a city of tulips, windmills, museums, bicycles.
						A city that everyone who visits the witch, with its atmosphere so fascinating.
						Amsterdam is a city to live and to explore by foot, discovering in its streets
						a must in the international street food: french fries Dutch.<br /><br />
						<strong>STREET FOOD STYLE. THE TASTE THAT DOES TREND.</strong>
					</p>
				</div>
			</div>
		</div>

		<div class="Brand__content">
			<div class="Row">
				<div class="Column-9">
					<div class="Brand__images">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="/images/queens-chips.jpg" alt="Queen's Chips" title="Queen's Chips" class="img-responsive" />
								</li>
								<li>
									<img src="/images/queens-chips.jpg" alt="Queen's Chips" title="Queen's Chips" class="img-responsive" />
								</li>
							</ul>
						</div>
					</div>

					<div class="Brand__video">
						<video id="brand-video" class="video-js" controls preload="auto"
							poster="/images/queens-chips-preview.jpg" data-setup="{}"
						>
							<source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
							<p class="vjs-no-js">
								To view this video please enable JavaScript, and consider upgrading to a web browser that
								<a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
							</p>
							<span id="playButton">
								<i class="fa fa-play-circle-o" aria-hidden="true"></i>
							</span>
						</video>
					</div>
				</div>
				<div class="Column-3 Flex Flex--column">
					<div class="Brand__branding Flex Flex--center">
						<h3 class="Section__title emoji">:)</h3>
					</div>
					<div class="Brand__menus has-padding-20">
						<h3 class="Section__title">Menus</h3>
						<div class="has-vertical-scroll">
							@foreach( range(1,3) as $index )
								<div class="Row Brand__menu">
									<div class="Column-3">
										<img src="/images/menu.png" alt="Menu" title="Menu" class="img-responsive Brand__menu--image" />
									</div>
									<div class="Column-9">
										<h5 class="Brand__menu--name color-white">Menu Name</h5>
										<p class="Brand__menu--description color-white">
											Lorem ipsum dolor sit amet, consectetur adipisicing...
										</p>
									</div>
								</div>
							@endforeach
							<div class="Row">
								<p>
									<a href="#" class="btn btn-link">View all menus</a>
								</p>
							</div>
						</div>
					</div>
					<div class="Brand__testimonials Flex Flex--center Flex--column">
						<i class="fa fa-quote-left fa-3x color-white"></i>
						<div class="testimonials">
							<ul class="slides">
								@foreach( range(1,3) as $index )
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
								<h3 class="Section__title">Immediate Opportunities</h3>
								<p>
									Our Brands always looking to expand.<br />
									Right now we're excited about - but not limited to - opportunities in these exciting locations!
								</p>
								<ul>
									<li>For other locations:</li>       		                       		
								</ul>
								<p>&nbsp;</p>
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
			<div class="Row">
				<div class="Column-9">
					<div class="FindUs--container">
						<div id="GoogleMap"></div>
						<div class="FindUs">
							<div class="FindUs__content Flex Flex--center Flex--column">
								<h3 class="Section__title">Find Nearby</h3>
								<div class="form-group">
									<input type="text" name="city" class="form-control" placeholder="Enter your city" />
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="Column-3 Flex Flex--column">
					<div class="Newsletter Flex Flex-1 Flex--center Flex--column">
						<h3 class="Section__title">Newsletter</h3>
						<form method="POST">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="text" name="email" class="form-control input-bordered" placeholder="Join our weekly newsletter" />
							</div>
						</form>
					</div>
					<div class="SocialMedias Flex Flex-1">
						<div class="Social Flex Flex-1 Flex--column">
							<div class="Social__email Flex Flex--center Flex-1">
								<a href="mailto:mark.timbol@hotmail.com" class="Flex Flex--center Flex-1">
									<i class="fa fa-envelope fa-3x color-white" aria-hidden="true"></i>
								</a>
							</div>
							<div class="Social__twitter Flex Flex--center Flex-1">
								<a href="http://twitter.com" class="Flex Flex--center Flex-1">
									<i class="fa fa-twitter fa-3x color-white" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<div class="Social Flex Flex-1 Flex--column">
							<div class="Social__facebook Flex Flex--center Flex-1">
								<a href="http://facebook.com" class="Flex Flex--center Flex-1">
									<i class="fa fa-facebook fa-3x color-white" aria-hidden="true"></i>
								</a>
							</div>
							<div class="Social__instagram Flex Flex--center Flex-1">
								<a href="http://instagram.com" class="Flex Flex--center Flex-1">
									<i class="fa fa-instagram fa-3x color-white" aria-hidden="true"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script src="{{ elixir('js/carousel.js') }}"></script>
	<script src="{{ elixir('js/video.js') }}"></script>
	<script src="{{ elixir('js/map.js') }}"></script>
	<script async defer
	     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDhZv02uNCor_FCBsIeJIeCE4nlcnLPIY&callback=initMap">
	</script>
@endsection