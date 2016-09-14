@extends('layouts.app')

@section('pageTitle', "Al's Beef")

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
	<link rel="stylesheet" href="{{ elixir('css/carousel.css') }}" />
@endsection

@section('bodyClass', 'Als-beef')

@section('content')
	<div class="Brand">
		<div class="Brand__header Flex">
			<div class="Brand__logo--container Flex Flex--column">
				<div class="Brand__logo Flex Flex--center Flex-1">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="300px" height="257px" viewBox="0 0 300 257" style="enable-background:new 0 0 300 257;" xml:space="preserve">
					<style type="text/css">
					<![CDATA[
						.st0{fill:#FBEC0A;}
						.st1{fill:#FFFFFF;}
						.st2{fill:#010101;}
					]]>
					</style>
					<g>
						<path class="st2" d="M143.2,83c-2.6,2.9-19.6,24.7-19.6,24.7c1.3-0.5,3.9-0.6,5-0.6s4.1,0.9,4.1,0.9c1.6-3.4,3.9-7.8,5.8-12.3
							C140.9,90.6,141.5,88.4,143.2,83z"/>
						<path class="st2" d="M229.4,110.3c-0.4,0.4-6.6,9.4-6.6,9.4c0.6,3.6,5.1,5.4,6.3,5.4c1.2,0,4.1-0.9,4.1-6.4
							S229.4,110.3,229.4,110.3z"/>
						<path class="st2" d="M253.8,152c0-0.1,0-5.3,0-5.3h-2.3l0,0c-0.2-5.4-5.4-4.9-5.4-4.9c-0.5-1,0.5-3.3,0.6-5.6
							c0.1-5.2-1.6-12.4-2.2-14.8c-0.4-1.4-0.8-2.8-1.3-4.7c0.4,0.1,0.8,0.1,1.1,0.1c3.6,0,6-3.1,6-6.6c0-6.3-7.1-12.2-14.1-12.5
							c-3.7-0.2-6.1,0.1-8.8,1.7c0-2.7-0.8-5.2-2.3-7.2c-1.9-2.5-5.8-4.2-9-4.2c-2.2,0-5.8,0.1-8.4,1.4c0.1-0.1,0.6-2.1,0.6-2.8
							c0.3-2.6-1.1-4.6-2.2-5.5c-1.8-1.7-5.3-3-9-3c-9-0.1-18.8,5.7-19.1,5.9c0-0.5-1.7,0.2-1.7-5.8c0-6-7.9-8.1-10.2-8l-4.7,0.2
							c-7.1,0.4-14.2-0.4-20.9-1.1c-5.2-0.6-10.2-1.1-14.9-1.1c-14.7,0-26.3,7.8-31.9,12.5c-8.8,7.3-14.2,15.9-14.2,22.6
							c0,3.3,1,8.5,4.3,11.4c-0.8,0.1-1.6,0-1.6,0c-10,0-20.5,6.7-29.1,18.5c-7.8,10.7-12.4,23.4-12.4,34c0,10.3,7.3,15.2,13.2,15.2
							c5.6,0,13.1-3.5,20.7-8.5c0.8,3.5,2.3,7.3,4.9,9.8c0,0.1,0,5.3,0,5.3h174.4c0,0,0-5.2,0-5.3c4.4-4.1,5.6-11.7,5.6-15.8
							C259.4,163.7,258.2,156.1,253.8,152z M213.2,93c3.8,0,5.4,3.1,5.4,6.1c0,4.2-4.3,8.9-10.8,8.9c0,0,2.9-2.4,3.3-5
							c-1.6-0.6-4-2.2-4-4.9S209.8,93,213.2,93z M131.3,145.2c-7.7,0-8.8-7.4-8.8-9.1c0-4.5,2.9-10.9,6.2-19.1c0,0-2.9-0.5-3.8-0.5
							c-9.1,0-17.1,10.2-27,23.6c-10.2,13.7-33.5,35.8-45.1,35.8c-7.2,0-7.3-7.2-7.3-9c0-19.6,18.4-47.6,36.6-47.6c0,0-3.4,3.4-3.4,9
							c0,5.6,5.1,5.4,6.4,5.4c11.2,0,27.1-17.2,31.7-22.3c4.6-5.1,15.9-18,15.9-24.7c0-6.7-7.6-6.2-8.6-6.2c-6.9,0-16.8,7.8-16.8,14.2
							c0,4.3,4.3,5.9,5,6.1c0,0-8.3,10.3-17.2,10.3c-8.9,0-10.8-5.4-10.8-7.9c0-9.9,19.4-30.1,41.2-30.1c10.5,0,23,2.9,36.1,2.2
							c0,0-22.9,26.9-22.9,41.2c0,5.7,5.1,8,8.2,8c1.1,0,2.2-0.2,3.2-0.7C150.1,123.4,146,145.2,131.3,145.2z M199.3,85.7
							c0,4.1-9.2,13.2-12.7,16.9c-3.4,3.5-10.1,12.1-10.1,17.7c0,4.7,4.3,6.8,7.5,6.8s7.7-2.4,7.7-2.4c-2.4,4.3-11,20.5-23.5,20.5
							c-6.9,0-9.9-3.7-9.9-7.3c0-9,13.1-22.9,16.2-27c3-4.1,9-11.2,9-16.5c0-5.3-1.5-5.7-1.9-6.4c0,0,6-5,13.9-5
							C199.9,83.1,199.3,85.3,199.3,85.7z M241.3,110.7c-0.7,0-1.2-1.5-1.5-2.2s-0.9-2-2.8-2c-1.9,0-2.9,1.9-2.9,3.4
							c0,1.5,1.9,9.5,2.6,12.2c0.7,2.7,2.1,9.2,2.1,13.6s-2.6,9.8-8.5,9.8c-5.8,0-12.4-7.8-14.3-10.3c0,0-4.5,4.6-8.4,4.6
							s-5.1-3.1-5.1-5.1c0-3.3,1.8-10.4,8.9-13.1c7.5-2.9,8.6-4.5,11.6-8.5c3.5-4.6,6.6-10.5,11.1-10.5c4.4,0,8.3,3.4,8.3,7
							C242.4,110.5,242,110.7,241.3,110.7z"/>
						<g>
							<path class="st0" d="M138.7,116.1c0-14.4,22.9-41.2,22.9-41.2c-13.1,0.6-25.6-2.2-36.1-2.2c-21.8,0-41.2,20.3-41.2,30.1
								c0,2.5,1.9,7.9,10.8,7.9c8.9,0,17.6-10.7,17.6-10.7c-1.4,0.1-5.5-1.4-5.5-5.7c0-6.3,9.9-14.2,16.8-14.2c1,0,8.6-0.5,8.6,6.2
								c0,6.7-11.3,19.6-15.9,24.7c-4.6,5.1-20.5,22.3-31.7,22.3c-1.3,0-6.4,0.2-6.4-5.4s3.4-9,3.4-9c-18.2,0-36.6,28-36.6,47.6
								c0,1.8,0.1,9,7.3,9c11.6,0,35-22.1,45.1-35.8c9.9-13.4,17.9-23.6,27-23.6c1,0,3.8,0.5,3.8,0.5c-3.3,8.2-6.2,14.7-6.2,19.1
								c0,1.7,1.1,9.1,8.8,9.1c14.7,0,18.7-21.7,18.7-21.7c-1,0.5-2.2,0.7-3.2,0.7C143.7,124.1,138.7,121.8,138.7,116.1z M128.7,107.1
								c-1.1,0-3.7,0.1-5,0.6c0,0,17-21.8,19.6-24.7c-1.8,5.4-2.4,7.7-4.6,12.8c-1.9,4.5-4.3,8.9-5.8,12.3
								C132.8,108,129.8,107.1,128.7,107.1z"/>
							<path class="st0" d="M191.7,124.7c-2.4,4.3-11,20.5-23.5,20.5c-6.9,0-9.9-3.7-9.9-7.3c0-9,13.1-22.9,16.2-27c3-4.1,9-11.2,9-16.5
								c0-5.3-1.5-5.7-1.9-6.4c0,0,6-5,13.9-5c4.4,0,3.8,2.2,3.8,2.6c0,4.1-9.2,13.2-12.7,16.9c-3.4,3.5-10.1,12.1-10.1,17.7
								c0,4.7,4.3,6.8,7.5,6.8S191.7,124.7,191.7,124.7z"/>
							<path class="st0" d="M211.1,103c-1.6-0.6-4-2.2-4-4.9s2.7-5.1,6.1-5.1c3.8,0,5.4,3.1,5.4,6.1c0,4.2-4.3,8.9-10.8,8.9
								C207.8,108,210.7,105.6,211.1,103z"/>
							<path class="st0" d="M234.2,102.6c-4.4,0-7.6,5.9-11.1,10.5c-3.1,4-4.1,5.6-11.6,8.5c-7.1,2.7-8.9,9.8-8.9,13.1
								c0,2,1.3,5.1,5.1,5.1s8.4-4.6,8.4-4.6c1.9,2.4,8.4,10.3,14.3,10.3c5.8,0,8.5-5.5,8.5-9.8c0-4.3-1.3-10.9-2.1-13.6
								c-0.7-2.7-2.6-10.8-2.6-12.2s0.9-3.4,2.9-3.4c1.9,0,2.6,1.3,2.8,2c0.2,0.7,0.8,2.2,1.5,2.2s1.1-0.2,1.1-1.1
								C242.4,106,238.6,102.6,234.2,102.6z M229.1,125.1c-1.2,0-5.7-1.8-6.3-5.4c0,0,6.2-9,6.6-9.4c0,0,3.8,2.9,3.8,8.4
								C233.2,124.2,230.3,125.1,229.1,125.1z"/>
						</g>
						<path class="st1" d="M130.4,105.3c-0.6-0.2-1.8-0.2-2.4-0.1c2.6-3.3,7.2-9.4,10.6-13.8c-0.3,0.8-1.8,4.4-2.2,5.3
							C136.4,96.7,130.6,105,130.4,105.3z"/>
						<path class="st1" d="M124.1,82.1c-3.1,0.7-6.8,3.5-8.9,5.5c-2.5,2.3-4.4,5.1-4.4,6.8c0,3.4,2,4.4,2,4.4c-1.7,0-3.8-2-3.8-4.3
							C109.1,89.4,118,82.1,124.1,82.1L124.1,82.1z"/>
						<path class="st1" d="M146.1,122.4c-2.2-0.2-5.5-2-5.5-6.3c0-13.5,22.2-39.7,22.5-40l1.1-1.3l2.9-0.2l-2.4,2.8
							c-6.1,7.2-22,28.1-22,38.6C142.6,120.5,144.7,121.8,146.1,122.4z"/>
						<path class="st1" d="M134.4,146.7c13.3-2.9,17.3-22.1,17.4-22.9l0.2-1.2l2.3-0.9l-0.5,2.5C153.8,125.1,149.9,144,134.4,146.7z"/>
						<path class="st1" d="M124.9,118.2c-7.2,1.4-15.4,12.7-23.8,24.1c-8.3,11.1-28.8,31.8-44.7,34.8c13.4-3.5,34.1-24.1,43-36.1
							C109.2,127.7,116.9,118.2,124.9,118.2z"/>
						<path class="st1" d="M83.6,131.7c-0.7-0.1-1.5-0.3-2.3-1c-0.5-0.5-0.8-1.4-0.8-2.6c0-4.7,3.5-8.8,3.6-9l2.7-0.1
							c-0.1,0.1-4.7,5.2-4.7,9C82.1,130.7,83.6,131.7,83.6,131.7z"/>
						<path class="st1" d="M117.8,99.9c-1.9,2.3-9.2,11.3-19,12.3c8.1-2.1,14.6-10.1,14.9-10.5l1.1-1.5
							C116.1,100.2,117.8,99.9,117.8,99.9z"/>
						<path class="st1" d="M172,146.6c11-2.6,18.4-15.9,21-20.3l1.8-3.2l3.1-1.4l-3,5.4C192.5,131.5,183.9,145.4,172,146.6z"/>
						<path class="st1" d="M202.4,86.7L202.4,86.7c-0.2,4.5-4.1,9.6-12.3,18.1l-0.6,0.7c-4.2,4.4-9.1,11.9-9.1,15.3
							c0,3.1,2.7,4.5,2.7,4.5c-2.1-0.3-4.7-1.7-4.7-4.8c0-4.5,5.7-12.5,9.5-16.4l0.6-0.7c7.6-7.8,12.6-13.7,12.6-17.5l0,0.1l0,0
							c0-0.3,0.1-1.2-0.3-2.1C200.8,83.6,202.4,84.7,202.4,86.7z"/>
						<path class="st1" d="M213.9,108.5c5.1-1.8,8.1-5,8.1-9.2c0-2-0.6-3.5-3.1-5c1.2,1.6,1.4,2.8,1.4,4.8
							C220.4,102.8,218,106.6,213.9,108.5"/>
						<path class="st1" d="M241,103.6c2.2,1.6,3.3,3.4,3.3,6c0,0.5-0.1,1.7-1.1,2.4c-0.2,0.2,0,0.5,0.4,0.6c0.4,0.1,2.4-0.2,2.5-2.9
							C246.1,107.6,243.6,105.1,241,103.6z"/>
						<path class="st1" d="M240.6,121.1c0.6,2.3,2.2,9.5,2.2,14.6c0,5.9-4.8,11.2-10.9,11.5c5.5-0.9,8.8-6.1,8.8-11.5
							c0-4.8-1.5-11.8-2.1-14c-0.9-3.6-2.5-10.7-2.5-11.7c0-0.3,0.2-1.5,1-1.5c0.6,0,1.2,0.3,1.2,0.3s-0.2,1.5-0.1,2.1
							C238.2,111.3,240.1,119,240.6,121.1z"/>
						<path class="st1" d="M207.7,141.6c3.4-0.2,6.3-2.2,8.2-3.7l1.2,1.6C214.9,141,211.7,142.4,207.7,141.6z"/>
						<path class="st1" d="M229.1,123.2c-0.7-0.1-3.4-1.2-4.3-3.2c1.5-2.2,3.5-5,4.7-6.8c0.3,0.5,0.7,1.2,1,1.9c-1,1.5-3.4,4.7-3.7,5.2
							C226.9,120.3,227.5,122.1,229.1,123.2z"/>
						<g>
							<g>
								<path class="st1" d="M95.3,151.3l153.6,0v2.9c4.2,1.8,5.6,9.5,5.6,13.3s-1.5,11.5-5.6,13.3v2.9H84.4v-2.9
									c-4.2-1.8-5.6-9.5-5.6-13.3c0-0.7-0.1,0.4,0-0.6C78.8,166.9,85.3,161.9,95.3,151.3z"/>
								<g>
									<path class="st2" d="M246.4,153.4H92.3l-0.9,0.8c0,0,153.7,0,154.5,0c0,0.5,0,1.9,0,1.9l0.3,0.1c3.2,1.2,5.4,5.7,5.4,11.2
										c0,5.5-2.2,10-5.4,11.2l-0.3,0.1c0,0,0,1.4,0,1.9c-0.8,0-157.9,0-158.7,0c0-0.5,0-1.9,0-1.9l-0.3-0.1c-3.2-1.2-5.4-5.7-5.4-11.2
										c0-1.3,0.2-3.4,0.5-4.7l-0.9,0.6c-0.3,1.3-0.4,2.7-0.4,4c0,5.7,2.2,10.4,5.6,11.9c0,0.4,0,2.2,0,2.2h160.3c0,0,0-1.8,0-2.2
										c3.4-1.5,5.6-6.2,5.6-11.9c0-5.7-2.2-10.4-5.6-11.9c0-0.4,0-2.2,0-2.2H246.4z"/>
								</g>
							</g>
							<g>
								<g>
									<path class="st2" d="M97.3,175.6h-7.9v-2.3h1c0.7,0,0.9-0.1,0.9-0.2c0-0.1,0.2-0.3,0.2-1.1v-8.9c0-0.8-0.1-1-0.2-1.1
										c0,0-0.2-0.2-0.9-0.2h-1v-2.3h7.9v2.3h-1c-0.7,0-0.9,0.1-0.9,0.2c0,0.1-0.2,0.3-0.2,1.1v8.9c0,0.8,0.1,1,0.2,1.1
										c0,0,0.2,0.2,0.9,0.2h1V175.6L97.3,175.6z"/>
								</g>
								<g>
									<path class="st2" d="M108.9,175.6h-8.1v-2.3h1.1c0.7,0,0.9-0.1,0.9-0.2c0-0.1,0.2-0.3,0.2-1.1v-10.1h0c-1,0-1.6,0.3-2,0.9
										c-0.4,0.6-0.6,1.7-0.6,3.2v0.2h-2.1v-6.6h13.4v6.6h-2.2V166c0-1.5-0.2-2.6-0.6-3.2c-0.4-0.6-1.1-0.9-2-0.9h0V172
										c0,0.8,0.1,1,0.2,1.1c0,0,0.2,0.2,0.9,0.2h1.1V175.6L108.9,175.6z"/>
								</g>
								<g>
									<path class="st2" d="M126.1,175.6h-7.6v-2.3h0.9c0.6,0,0.8-0.1,0.9-0.1c0.1-0.1,0.1-0.2,0.1-0.4c0,0,0-0.1,0-0.3
										c0-0.1-0.1-0.3-0.1-0.4l-0.5-1.5H116l-0.5,1.5c-0.1,0.2-0.1,0.3-0.1,0.4s0,0.2,0,0.2c0,0.2,0,0.3,0.1,0.4c0,0,0.2,0.1,0.7,0.1
										h1.1v2.3h-6.5v-2.3h0.9c0.3,0,0.6-0.1,0.8-0.3c0.1-0.1,0.3-0.4,0.6-1.2l3.6-12.2h3.8l3.6,12.2c0.2,0.8,0.4,1.1,0.5,1.2
										c0.1,0.1,0.4,0.2,0.8,0.2h0.7V175.6L126.1,175.6z M116.7,168.2h2.5l-1.2-4.1L116.7,168.2L116.7,168.2z"/>
								</g>
								<g>
									<path class="st2" d="M139.7,175.6h-13.1v-2.3h1c0.7,0,0.9-0.1,0.9-0.2c0-0.1,0.2-0.3,0.2-1.1v-8.9c0-0.8-0.1-1-0.2-1.1
										c0,0-0.2-0.2-0.9-0.2h-1v-2.3h7.9v2.3h-1.1c-0.7,0-0.9,0.1-0.9,0.2c0,0.1-0.2,0.3-0.2,1.1v10.1h1.9c1.3,0,2.2-0.3,2.6-0.8
										c0.4-0.6,0.7-1.8,0.8-3.6l0-0.2h2.1V175.6L139.7,175.6z"/>
								</g>
								<g>
									<path class="st2" d="M148.1,175.6h-7.9v-2.3h1c0.7,0,0.9-0.1,0.9-0.2c0-0.1,0.2-0.3,0.2-1.1v-8.9c0-0.8-0.1-1-0.2-1.1
										c0,0-0.2-0.2-0.9-0.2h-1v-2.3h7.9v2.3h-1c-0.7,0-0.9,0.1-0.9,0.2c0,0.1-0.2,0.3-0.2,1.1v8.9c0,0.8,0.1,1,0.2,1.1
										c0,0,0.2,0.2,0.9,0.2h1V175.6L148.1,175.6z"/>
								</g>
								<g>
									<path class="st2" d="M164.2,175.6h-7.6v-2.3h0.9c0.6,0,0.8-0.1,0.9-0.1c0.1-0.1,0.1-0.2,0.1-0.4c0,0,0-0.1,0-0.3
										c0-0.1-0.1-0.3-0.1-0.4l-0.5-1.5H154l-0.5,1.5c-0.1,0.2-0.1,0.3-0.1,0.4c0,0.1,0,0.2,0,0.2c0,0.2,0,0.3,0.1,0.4
										c0,0,0.2,0.1,0.7,0.1h1.1v2.3h-6.5v-2.3h0.9c0.3,0,0.6-0.1,0.8-0.3c0.1-0.1,0.3-0.4,0.6-1.2l3.6-12.2h3.8l3.6,12.2
										c0.2,0.8,0.4,1.1,0.5,1.2c0.1,0.1,0.4,0.2,0.8,0.2h0.7V175.6L164.2,175.6z M154.7,168.2h2.5l-1.2-4.1L154.7,168.2L154.7,168.2z"
										/>
								</g>
								<g>
									<path class="st2" d="M178.8,175.6H175l-5.8-11.5v8c0,0.8,0.1,1,0.2,1.1c0,0,0.2,0.2,0.9,0.2h1.1v2.3h-6.8v-2.3h0.9
										c0.7,0,0.9-0.1,0.9-0.2c0-0.1,0.2-0.3,0.2-1.1v-8.9c0-0.8-0.1-1-0.2-1.1c0,0-0.2-0.2-0.9-0.2h-0.9v-2.3h6.3l0.1,0.1l5.2,10.4
										v-6.9c0-0.8-0.1-1-0.2-1.1c0,0-0.2-0.2-0.9-0.2H174v-2.3h6.7v2.3h-0.8c-0.7,0-0.9,0.1-0.9,0.2c0,0.1-0.2,0.3-0.2,1.1V175.6
										L178.8,175.6z"/>
								</g>
								<g>
									<path class="st2" d="M194.9,175.6h-8.1v-2.3h1c0.7,0,0.9-0.1,0.9-0.2c0-0.1,0.2-0.3,0.2-1.1v-8.9c0-0.8-0.1-1-0.2-1.1
										c0,0-0.2-0.2-0.9-0.2h-1v-2.3h8.3c1.8,0,3.1,0.3,4,0.9c0.9,0.6,1.3,1.6,1.3,3c0,0.9-0.3,1.7-0.7,2.4c-0.4,0.5-0.9,0.9-1.5,1.2
										c0.8,0.3,1.5,0.7,2,1.2c0.6,0.7,0.9,1.7,0.9,2.8c0,1.6-0.5,2.7-1.4,3.4C198.6,175.2,197.1,175.6,194.9,175.6L194.9,175.6z
										 M192.7,173.3h1.1c1.2,0,2.1-0.2,2.6-0.6c0.5-0.4,0.7-1,0.7-1.9c0-0.9-0.2-1.5-0.7-1.8c-0.5-0.4-1.4-0.5-2.6-0.5h-1.1V173.3
										L192.7,173.3z M192.7,166.2h0.9c1.1,0,1.8-0.2,2.2-0.5c0.4-0.3,0.6-0.9,0.6-1.7c0-0.8-0.2-1.3-0.6-1.6c-0.4-0.3-1.1-0.5-2.2-0.5
										h-1V166.2L192.7,166.2z"/>
								</g>
								<g>
									<path class="st2" d="M215.5,175.6h-13.8v-2.3h1c0.7,0,0.9-0.1,0.9-0.2c0-0.1,0.2-0.3,0.2-1.1v-8.9c0-0.8-0.1-1-0.2-1.1
										c0,0-0.2-0.2-0.9-0.2h-1v-2.3h13.8v6.4h-2.1l0-0.2c-0.1-1.6-0.3-2.7-0.8-3.2c-0.4-0.5-1.3-0.7-2.7-0.7h-2.5v4.2h0.5
										c0.7,0,1.1-0.1,1.3-0.4c0.1-0.2,0.3-0.7,0.3-2v-0.2h2.1v7.8h-2.1v-0.9c0-0.8-0.1-1.3-0.4-1.6c-0.2-0.3-0.6-0.4-1.3-0.4h-0.5v4.8
										h2.2c1.4,0,2.4-0.3,2.8-0.8c0.5-0.6,0.7-1.8,0.8-3.6l0-0.2h2.1V175.6L215.5,175.6z"/>
								</g>
								<g>
									<path class="st2" d="M230.1,175.6h-13.8v-2.3h1c0.7,0,0.9-0.1,0.9-0.2c0-0.1,0.2-0.3,0.2-1.1v-8.9c0-0.8-0.1-1-0.2-1.1
										c0-0.1-0.2-0.2-0.9-0.2h-1v-2.3h13.8v6.4H228l0-0.2c-0.1-1.6-0.3-2.7-0.8-3.2c-0.4-0.5-1.3-0.7-2.7-0.7h-2.5v4.2h0.6
										c0.7,0,1.1-0.1,1.3-0.4c0.1-0.2,0.3-0.7,0.3-2l0-0.2h2.1v7.8h-2.1v-0.9c0-0.8-0.1-1.3-0.4-1.6c-0.2-0.3-0.6-0.4-1.3-0.4h-0.6
										v4.8h2.2c1.4,0,2.4-0.3,2.8-0.8c0.5-0.6,0.7-1.8,0.8-3.6l0-0.2h2.1V175.6L230.1,175.6z"/>
								</g>
								<g>
									<path class="st2" d="M239,175.6h-8.1v-2.3h1c0.7,0,0.9-0.1,1-0.2c0-0.1,0.2-0.3,0.2-1.1v-8.9c0-0.8-0.1-1-0.2-1.1
										c0,0-0.2-0.2-1-0.2h-1v-2.3h13.3v6.8h-2.1l0-0.2c-0.1-1.8-0.3-2.9-0.8-3.5c-0.4-0.5-1.3-0.8-2.8-0.8h-1.7v4.2h0.4
										c0.5,0,0.9-0.1,1-0.4c0.1-0.2,0.3-0.7,0.3-2l0-0.2h2.1v7.8h-2.1v-0.9c0-0.8-0.1-1.3-0.3-1.6c-0.2-0.3-0.5-0.4-1-0.4h-0.4v3.6
										c0,0.8,0.1,1,0.2,1.1c0,0,0.2,0.2,1,0.2h1.1V175.6L239,175.6z"/>
								</g>
							</g>
						</g>
						<path class="st1" d="M245.1,146.6v-2h-0.7v-0.4h1.9v0.4h-0.7v2H245.1L245.1,146.6z M246.6,146.6v-2.4h0.7l0.4,1.6l0.4-1.6h0.7v2.4
							h-0.5v-1.9l-0.5,1.9h-0.5l-0.5-1.9v1.9H246.6z"/>
					</g>
					</svg>
				</div>

				<div class="Brand__inquiry Flex Flex--center Flex-1 Flex--column">
					<button type="button" class="btn btn-default" data-toggle="modal" data-target="#FormInquiry">
						Inquire now
					</button>
				</div>
			</div>

			<div class="Brand__hero Flex Flex--center">
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
											<img src="/images/als-beef/slides/slide.jpg" alt="Al's Beef" title="Al's Beef" class="img-responsive" />
										</li>
										<li>
											<img src="/images/als-beef/slides/slide.jpg" alt="Al's Beef" title="Al's Beef" class="img-responsive" />
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
								<h3 class="Section__title">About Al's Beef</h3>
								<p>
									Al's beef is dry roasted in a secret recipe blend of 100% pure spices and natural juices. Our beef is pure. The Au Jus or 'Gravy' as Al calls it, gives our beef its unmistakable flavor.  We will add as little or as much gravy to your sandwich as you want. But most Al's connoisseurs prefer their beef sandwich wet or dipped, right into the gravy, and then add sweet and hot peppers.
								</p>
								<p>&nbsp;</p>
								<h3 class="Section__title">Immediate Opportunities</h3>
								<p>
									Our Brands always looking to expand.<br />
									Right now we're excited about - but not limited to - opportunities in these exciting locations!
								</p>
				                <ul>
									<li>Bahrain</li>
				               		<li>Oman</li>   
				               		<li>Egypt</li>     
				                </ul>	

								<p>&nbsp;</p>
				                <h3 class="Section__title">Who we're looking for?</h3>
								<ul>
									<li>People passionate about Al's Beef</li>
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
					<div class="Newsletter Flex Flex-1 Flex--center Flex--column min-height-200">
						<h3 class="Section__title">Newsletter</h3>
						<form method="POST">
							{{ csrf_field() }}
							<div class="form-group">
								<input type="text" name="email" class="form-control input-newsletter" placeholder="Join our weekly newsletter" />
							</div>
						</form>
					</div>
					<div class="SocialMedias Flex Flex-1">
						<div class="Social Flex Flex-1 Flex--column">
							<div class="Social__email Flex Flex--center Flex-1">
								<a href='#' target="_blank" class="Flex Flex--center Flex-1">
									<i class="fa fa-envelope fa-3x color-white" aria-hidden="true"></i>
								</a>
							</div>
							<div class="Social__twitter Flex Flex--center Flex-1">
								<a href="#" target="_blank" class="Flex Flex--center Flex-1">
									<i class="fa fa-twitter fa-3x color-white" aria-hidden="true"></i>
								</a>
							</div>
						</div>
						<div class="Social Flex Flex-1 Flex--column">
							<div class="Social__facebook Flex Flex--center Flex-1">
								<a href="#" target="_blank" class="Flex Flex--center Flex-1">
									<i class="fa fa-facebook fa-3x color-white" aria-hidden="true"></i>
								</a>
							</div>
							<div class="Social__instagram Flex Flex--center Flex-1">
								<a href="#" target="_blank" class="Flex Flex--center Flex-1">
									<i class="fa fa-instagram fa-3x color-white" aria-hidden="true"></i>
								</a>
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
						<h4 class="modal-title">Al's Beef Video</h4>
					</div>
					<div class="modal-body">
						<video id="brand-video" class="video-js" controls muted preload="auto" data-setup="{}">
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
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

		@include('public.brands._inquiry')
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