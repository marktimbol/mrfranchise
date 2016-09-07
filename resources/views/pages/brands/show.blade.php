@extends('layouts.app')

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
	<link rel="stylesheet" href="{{ elixir('css/carousel.css') }}" />
@endsection

@section('content')
	<div class="Brand Queens-chips">
		<div class="Brand__header Flex">
			<div class="Brand__logo--container Flex Flex--column">
				<div class="Brand__logo Flex Flex--center Flex-1">
					logo svg animation
				</div>

				<div class="Brand__inquiry Flex Flex--center Flex-1">
					inquiry
				</div>
			</div>

			<div class="Brand__hero Flex Flex--column Flex--center">
				<h2 class="Brand__hero--title">Queens Chips</h2>
				<p class="Brand__hero--description">
					Amsterdam is a city of tulips, windmills, museums, bicycles.
					A city that everyone who visits the witch, with its atmosphere so fascinating.
					Amsterdam is a city to live and to explore by foot, discovering in its streets
					a must in the international street food: french fries Dutch.
				</p>
				<p class="Brand__hero--description">
					<strong>STREET FOOD STYLE. THE TASTE THAT DOES TREND.</strong>
				</p>
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
{{-- 						<div class="custom-navigation">
							<a href="#" class="flex-prev">
								<i class="fa fa-chevron-left" aria-hidden="true"></i>
							</a>
							<div class="custom-controls-container"></div>
							<a href="#" class="flex-next">
								<i class="fa fa-chevron-right" aria-hidden="true"></i>
							</a>
						</div> --}}
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
												tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
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
				<div class="Column-6 Flex Flex--column">
					<div class="Social Flex Flex-1">
						<div class="Social__instagram Flex Flex--center Flex-1">
							<a href="#" class="Flex Flex--center Flex-1">
								<i class="fa fa-instagram fa-3x color-white" aria-hidden="true"></i>
							</a>
						</div>
						<div class="Social__twitter Flex Flex--center Flex-1">
							<a href="#" class="Flex Flex--center Flex-1">
								<i class="fa fa-twitter fa-3x color-white" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div class="Social Flex Flex-1">
						<div class="Social__facebook Flex Flex--center Flex-1">
							<a href="#" class="Flex Flex--center Flex-1">
								<i class="fa fa-facebook fa-3x color-white" aria-hidden="true"></i>
							</a>
						</div>
						<div class="Social__email Flex Flex--center Flex-1">
							<a href="#" class="Flex Flex--center Flex-1">
								<i class="fa fa-envelope fa-3x color-white" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="Column-6">
					<div class="About Flex Flex--column">
						<h3 class="Section__title theme-color">About Us</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						</p>
					</div>
				</div>	
			</div>
			<div class="Row">
				<div class="Column-9">
					<div class="FindUs">
						<div id="GoogleMap"></div>
					</div>
				</div>
				<div class="Column-3 Flex Flex--column">
					<div class="Newsletter Flex Flex-1 Flex--center">
						<h3 class="Section__title">Newsletter</h3>
					</div>
					<div class="Promo Flex Flex-1 Flex--center">
						<h3 class="Section__title">Promo</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('footer_scripts')
	<script async defer
	     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSKpdBCSwSHuTwon9f1mR8wuYsyVE9dfI&callback=initMap">
	</script>
	<script src="{{ elixir('js/carousel.js') }}"></script>
	<script src="{{ elixir('js/video.js') }}"></script>
	<script src="{{ elixir('js/map.js') }}"></script>
@endsection