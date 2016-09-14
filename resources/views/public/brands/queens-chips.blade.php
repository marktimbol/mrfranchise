@extends('layouts.app')

@section('pageTitle', "Queen's Chips")

@section('header_styles')
	<link rel="stylesheet" href="{{ elixir('css/video.css') }}" />
	<link rel="stylesheet" href="{{ elixir('css/carousel.css') }}" />
@endsection

@section('bodyClass', 'Queens-chips')

@section('content')
	<div class="Brand">
		<div class="Brand__header Flex">
			<div class="Brand__logo--container Flex Flex--column">
				<div class="Brand__logo Flex Flex--center Flex-1">
					<?xml version="1.0" encoding="utf-8"?>
					<!-- Generator: Adobe Illustrator 16.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
					<!DOCTYPE svg PUBLIC "-//W3C//DTD SVG 1.1//EN" "http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd">
					<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="300px" height="257px" viewBox="0 0 300 257" style="enable-background:new 0 0 300 257;" xml:space="preserve">
					<style type="text/css">
					<![CDATA[
						.st0{fill:#FCCE0D;}
						.st1{fill:#FFFFFF;}
					]]>
					</style>
					<g>
						<g>
							<g>
								<path class="st0" d="M136.5,3.2c12.4,8.6,24.7,17.2,37.1,25.8c0,11.4,0,22.8,0,34.2c7.2-4.1,14.3-8.6,21.5-12.7
									c-0.7,5.3-1.8,10.6-2.6,15.8c-1.4,8-2.7,15.9-4.1,23.9c-0.2,1-0.3,2-0.4,3c0.1,6.8,0,13.5,0.1,20.3c0,2.6,0,5.2-1.1,7.6
									c-1.8,4.2-5.3,7.4-9.1,9.8c-4.2,2.7-8.9,4.4-13.6,5.7c-6.2,1.6-12.6,2.5-19,2.5c-10.8,0.2-21.8-1.3-31.7-5.8
									c-4.4-2.1-8.7-4.9-11.6-8.9c-1.2-1.6-2.1-3.5-2.6-5.5c-0.5-2-0.4-4.2-0.4-6.2c0-5.2,0-10.5,0-15.7c0-0.8,0.2-1.6,0.1-2.4
									c-2.7-14.7-5.4-29.4-8.1-44.1c4.1,2.2,8,4.8,12,7.1c2.1,1.2,4.2,2.6,6.4,3.7c0-5.6-0.1-11.2,0.1-16.7c2.5-1.6,4.9-3.3,7.3-5
									c6.6-4.5,13.1-9.2,19.7-13.7C136.5,18.3,136.4,10.8,136.5,3.2z M141.4,12.6c0,3.2,0,6.5,0,9.7c1.7-1,3.2-2.4,5-3.3
									c0.1,1,0.1,2,0,3.1c0,16,0,32.1,0,48.1c0,13.6-0.1,27.1,0,40.7c2.7-0.1,5.4-0.3,8.1-0.8c2.2-13.2,4.6-26.3,6.8-39.5
									c2.2-1.3,4.5-2.7,6.7-4.1c0.3-0.2,0.5-0.5,0.5-0.9c0-11,0-22,0-33c0.3-1.3-1-1.8-1.8-2.4C158.3,24.4,149.9,18.4,141.4,12.6z
									 M131.1,35.5c-5.6,3.9-11.2,7.8-16.8,11.7c0,5.7,0,11.4,0,17.1c3.3,2,6.6,4,9.9,5.9c0.3,0.2,0.6,0.4,0.6,0.7
									c1.4,8.5,2.8,17,4.2,25.5c0.8,4.5,1.4,9.1,2.3,13.6c3.4,0.4,6.7,0.8,10.1,0.8c0.2-4.2,0-8.4,0.1-12.6c0-23.3,0-46.7,0-70
									C138,30.6,134.6,33.2,131.1,35.5z M188.4,60.1c-4.1,2.4-8.2,4.9-12.4,7.4c-3.4,1.9-6.6,4.1-10.1,6c-0.4,1.2-0.5,2.5-0.8,3.8
									c-1.9,10.6-3.7,21.2-5.5,31.9c1.2,0,2.3-0.4,3.5-0.7c3.4-0.9,6.8-2.2,10-3.8c3.5-1.8,6.8-4.2,8.8-7.7c0.6-0.9,0.7-2,0.9-3.1
									C184.6,82.5,186.6,71.3,188.4,60.1z M97.8,60.3c1.9,10.3,3.8,20.7,5.7,31c0.3,2.4,0.9,4.8,2.3,6.7c2.5,3.5,6.2,5.7,10,7.5
									c3.3,1.4,6.6,2.7,10.2,3.3c-1.2-8.2-2.7-16.3-4-24.4c-0.6-3.7-1.1-7.4-1.9-11c-1.2-0.5-2.2-1.3-3.3-1.9
									c-6.2-3.8-12.4-7.4-18.6-11.2C98.1,60.4,97.9,60.3,97.8,60.3z M104,103.5c-0.1,3.6,0,7.2,0,10.8c0,1.3-0.1,2.7,0.3,4
									c0.5,1.8,1.5,3.4,2.8,4.7c2.8,3,6.5,5,10.2,6.6c11,4.5,23.2,5.4,35,4.3c4.5-0.6,9-1.3,13.3-2.8c4.7-1.5,9.2-3.5,13-6.7
									c2.4-2.1,4.6-5,4.5-8.4c0-4.2,0.1-8.3,0-12.5c-4.1,4.1-9.4,6.7-14.9,8.6c-6.3,2.2-13,3.2-19.6,3.7c-11.1,0.5-22.4-0.7-32.8-4.8
									C111.4,109.1,107.3,106.7,104,103.5z"/>
							</g>
							<path class="st0" d="M106.3,115.1c0.3-1.1,1.4-1.5,2.4-1.7c0.8,0.3,1.7,0.5,2.1,1.2c0.6,0.8,0.5,1.7,0.2,2.6
								c-0.5,0.5-1,1.2-1.8,1.2C107.5,118.8,105.6,116.9,106.3,115.1z"/>
							<path class="st0" d="M177.5,113.8c1.5-0.3,3.1,1.1,2.8,2.6c-0.1,1.9-2.9,3.1-4.3,1.7c-0.9-0.7-0.9-1.9-0.6-2.9
								C175.9,114.6,176.7,114,177.5,113.8z"/>
							<path class="st0" d="M116.4,118.5c1.5-0.8,3.9,0.2,4.1,2c0.1,1-0.4,1.9-1.2,2.4c-1.6,0.8-4-0.2-4.1-2.1
								C115,119.8,115.6,118.9,116.4,118.5z"/>
							<path class="st0" d="M168.3,118.5c1.6-0.4,3.3,0.9,3,2.6c-0.1,2.5-4.3,3.3-5.2,0.9C165.5,120.4,166.8,118.7,168.3,118.5z"/>
							<path class="st0" d="M126.7,121.2c1.3-0.3,3.1,0.1,3.6,1.5c0.7,1.6-0.9,3.6-2.6,3.3c-1.3,0-2.7-1.1-2.6-2.5
								C125,122.5,125.8,121.6,126.7,121.2z"/>
							<path class="st0" d="M157.5,121.5c0.9-0.3,2.1-0.5,2.9,0.2c0.9,0.6,1.2,1.8,0.9,2.7c-0.6,2.1-4.1,2.4-5,0.4
								C155.6,123.6,156.3,121.9,157.5,121.5z"/>
							<path class="st0" d="M137,122.6c1-0.2,2.1-0.2,2.9,0.4c1.1,0.8,1.3,2.5,0.3,3.5c-1.2,1.4-3.8,1.1-4.6-0.6
								C135,124.7,135.6,123,137,122.6z"/>
							<path class="st0" d="M146,123.7c1-1.5,3.6-1.8,4.7-0.2c0.5,0.6,0.5,1.5,0.3,2.2c-0.7,1.8-3.5,2.3-4.7,0.8
								C145.6,125.8,145.7,124.6,146,123.7z"/>
						</g>
						<g>
							<g>
								<path class="st1" d="M229.5,152.6c3-1,6.4,1.8,6.1,5c-0.1,3-3.4,5.1-6.1,4.3c-2.3-0.6-3.9-3.1-3.4-5.5
									C226.3,154.6,227.8,153.1,229.5,152.6z M229.5,153.2c-2.5,0.7-3.8,3.9-2.5,6.2c1.2,2.3,4.5,2.8,6.4,1.2c1.6-1.3,2.1-3.8,1-5.6
									C233.5,153.3,231.3,152.6,229.5,153.2z"/>
							</g>
							<g>
								<path class="st1" d="M228.7,154.5c1.2,0.1,2.5-0.2,3.6,0.3c1.2,0.7,0.9,2.5-0.3,3c0.4,0.6,0.8,1.2,1.2,1.8c-0.4,0-0.9,0-1.3,0
									c-0.3-0.6-0.7-1.1-1-1.6c-0.2,0-0.7,0-0.9,0c0,0.6,0,1.1-0.1,1.7c-0.4,0-0.8,0-1.1-0.1C228.8,157.9,228.8,156.2,228.7,154.5z
									 M229.9,155.5c0,0.5,0,1,0,1.5c0.6,0,1.2,0.1,1.7-0.1c0.3-0.3,0.3-0.6,0.2-1C231.4,155.4,230.6,155.6,229.9,155.5z"/>
							</g>
							<g>
								<path class="st1" d="M71.2,160.3c4.7-2,10.8-0.9,14.1,3.1c3.2,3.7,3.3,9.4,0.6,13.4c0.7,0.6,1.5,1.3,2.2,1.9
									c-1,1.2-2.1,2.3-3.1,3.4c-0.9-0.6-1.5-1.6-2.5-2.1c-2.5,1.5-5.5,2.1-8.4,1.6c-3.1-0.4-6.1-2.2-7.8-4.9c-1.9-2.8-2.3-6.4-1.3-9.6
									C65.8,164.2,68.2,161.6,71.2,160.3z M69.9,168.2c-1,2.8-0.1,6.3,2.4,8c1.9,1.4,4.6,1.6,6.8,0.6c-1.2-1-2.4-2-3.6-3
									c1-1.2,2.1-2.2,3.1-3.4c1.2,1.1,2.4,2.2,3.7,3.2c0.9-2.5,0.7-5.7-1.2-7.7c-1.4-1.6-3.7-2.3-5.7-2.1
									C72.8,164,70.6,165.9,69.9,168.2z"/>
							</g>
							<path class="st1" d="M206.8,163.1c1.1-2.2,3.4-3.4,5.8-3.7c3.3-0.3,6.8,0.5,9.4,2.7c-0.8,1.2-1.6,2.5-2.6,3.6
								c-2-1.4-4.6-2.6-7.1-1.9c-1.1,0.3-1.7,1.6-1.2,2.7c0.7,0.9,1.9,1.2,2.9,1.5c2.4,0.6,5,1.1,6.9,2.8c1.9,1.6,2.1,4.5,1.3,6.7
								c-0.7,2.1-2.7,3.4-4.8,3.9c-4.3,1-8.9-0.3-12.3-3.1c1-1.1,1.9-2.3,3-3.4c1.7,1.5,3.9,2.6,6.3,2.6c1.1,0,2.3-0.1,3.1-1
								c0.7-0.9,0.3-2.3-0.7-2.7c-2.8-1.4-6.1-1.4-8.7-3.2C205.9,168.9,205.7,165.5,206.8,163.1z"/>
							<path class="st1" d="M94.2,159.7c1.6,0,3.2,0,4.9,0c0,4.2,0,8.4,0,12.5c0,1.6,0.5,3.5,1.9,4.4c1.7,1.1,4,1.1,5.7,0
								c1.4-1,1.9-2.8,1.9-4.4c0-4.2,0-8.3,0-12.5c1.6,0,3.2,0,4.8,0c0,4.1,0,8.1,0,12.2c0,2.4-0.5,5-2.1,6.9c-1.8,2.2-4.7,3-7.5,3
								c-2.6,0.1-5.5-0.7-7.3-2.6c-1.8-1.9-2.3-4.5-2.3-7C94.2,168,94.2,163.9,94.2,159.7z"/>
							<path class="st1" d="M120.9,160.8c0-0.4,0.1-0.8,0.1-1.2c5.5,0.1,11,0,16.5,0c0,1.4,0,2.8,0,4.3c-3.9,0.1-7.9,0-11.8,0
								c0,1.5,0,2.9,0,4.4c3.5,0,6.9,0,10.4,0c0,1.4,0,2.9,0,4.3c-3.5,0-6.9,0-10.4,0c0,1.5,0,3,0,4.5c4,0,8,0,11.9,0c0,1.4,0,2.9,0,4.3
								c-5.6,0-11.2,0-16.7,0C120.9,174.6,120.9,167.7,120.9,160.8z"/>
							<path class="st1" d="M144.4,159.7c5.5,0.1,11.1,0,16.6,0c0,1.4,0,2.8,0,4.3c-3.9,0.1-7.9,0-11.8,0c0,1.5,0,2.9,0,4.4
								c3.4,0,6.9,0,10.3,0c0.1,1.4,0,2.9,0.1,4.3c-3.5,0-6.9,0-10.4,0c0,1.5,0,3,0,4.6c4,0,8,0,11.9,0c0,1.4,0,2.9,0,4.3
								c-5.6,0-11.2,0-16.8,0C144.4,174.2,144.4,166.9,144.4,159.7z"/>
							<path class="st1" d="M168,159.7c1.5,0.1,3.1-0.2,4.6,0.2c2.1,2.9,4.4,5.8,6.6,8.7c1.2,1.5,2.3,3,3.5,4.5c0-4.4,0-8.9,0-13.3
								c1.6,0,3.2,0,4.8,0c0,7.3,0,14.6,0,21.8c-1.4-0.1-2.8,0.1-4.2-0.1c-3.6-4.5-7.1-9.2-10.6-13.7c-0.1,4.6,0,9.2,0,13.8
								c-1.6,0-3.2,0-4.8,0C168,174.2,168,167,168,159.7z"/>
							<path class="st1" d="M194.8,159.7c1.7,0,3.4,0,5.1,0c-0.1,2.5,0.4,5.1-0.6,7.5c-0.9,1.9-3.2,2.6-5.2,2.6c-0.1-0.7-0.3-1.3-0.4-2
								c0.9-0.2,1.8-0.4,2.4-1c0.5-0.5,0.6-1.3,0.7-2c-0.7,0-1.4,0-2,0C194.8,163,194.8,161.4,194.8,159.7z"/>
							<path class="st1" d="M93.7,191.8c4.1-1,8.7-0.1,11.7,2.9c-0.9,1.3-2,2.4-3.1,3.6c-1.8-1.8-4.4-2.8-7-2.3c-0.1,0.4-0.3,0.6-0.6,0.2
								c-3.6,1.2-5.3,5.6-3.9,9.1c0.8,2.5,3.3,4.4,6,4.3c2.2,0,4.2-1.1,5.7-2.5c1.1,1,2.1,2.1,3.1,3.2c-1.9,1.9-4.2,3.4-6.9,3.7
								c-3.6,0.5-7.4-0.4-10-3c-3.9-3.6-4.4-10-1.6-14.3C88.6,194.2,91,192.4,93.7,191.8z"/>
							<path class="st1" d="M189.1,192.2c2.2-1,4.6-0.9,6.9-0.4c1.9,0.4,3.7,1.2,5.1,2.5c-0.9,1.2-1.7,2.4-2.5,3.6c-2-1.2-4.2-2.4-6.6-2
								c-1,0.1-2.2,0.9-2,2.1c0,1.3,1.4,1.7,2.4,2c2.8,0.9,6.1,1.3,8.2,3.6c2.1,2.9,1.1,7.7-2.2,9.3c-0.5,0.2-1.1,0.8-1.5,0.2
								c0.1,0.1,0.2,0.3,0.2,0.5c-3,0.7-6.3,0.5-9.2-0.8c-1.3-0.5-2.5-1.4-3.7-2.3c1-1.1,1.9-2.3,2.9-3.4c1.8,1.5,4.1,2.6,6.4,2.6
								c1,0,2.1-0.2,2.9-0.8c0.7-0.8,0.5-2.3-0.5-2.8c-2.9-1.5-6.4-1.4-9-3.5c-1.4-1.1-1.9-3-1.8-4.7
								C185.2,195.4,186.9,193.1,189.1,192.2z"/>
							<path class="st1" d="M114.7,191.8c1.6,0,3.3,0,4.9,0c0,2.9,0,5.8,0,8.6c3,0,5.9,0,8.9,0c0.1-2.9,0-5.8,0.1-8.6c1.6,0,3.2,0,4.8,0
								c0,7.3,0,14.6,0,21.8c-1.6,0-3.2,0-4.8,0c0-2.9,0-5.8-0.1-8.8c-2.9,0-5.9,0.1-8.8,0c-0.1,2.9,0,5.8,0,8.8c-1.6,0-3.3,0-4.9,0
								C114.7,206.3,114.8,199.1,114.7,191.8z"/>
							<path class="st1" d="M144.1,191.8c1.6,0,3.2,0,4.9,0c0,7.3,0,14.5,0,21.8c-1.6,0-3.3,0-4.9,0C144.1,206.3,144.1,199.1,144.1,191.8
								z"/>
							<g>
								<path class="st1" d="M159.7,213.6c0-7.3-0.1-14.5,0-21.8c3.1,0.1,6.2,0,9.4,0c2.5,0,5.1,0.9,6.6,3c1.5,2,1.8,4.8,1,7.2
									c-0.7,2.2-2.6,3.8-4.7,4.5c-2.4,0.8-5,0.5-7.5,0.6c0,2.2,0,4.4,0,6.5C162.9,213.6,161.3,213.6,159.7,213.6z M164.5,196.2
									c0,2.2,0,4.4,0,6.6c2-0.1,4.2,0.4,6.1-0.5c2.2-1.1,2.1-4.8-0.2-5.7C168.5,195.8,166.4,196.3,164.5,196.2z"/>
							</g>
							<path class="st1" d="M66.6,200.3c1.2-2.2,4.4-3,6.5-1.6c2,1.2,2.8,4,1.7,6.1c-0.6,1.3-1.8,2-3.1,2.5l-0.1-0.5c0,0.1,0,0.4,0,0.5
								c-1.2,0.1-2.4,0-3.4-0.7C66,205.4,65.3,202.4,66.6,200.3z"/>
							<path class="st1" d="M214.6,198.3c1.9-0.8,4.4-0.1,5.6,1.6c1.5,2,1,5.1-1.1,6.5c-2.2,1.7-5.7,0.8-6.9-1.7
								C210.9,202.4,212.2,199.3,214.6,198.3z"/>
							<path class="st1" d="M199.4,228.3c0.9-0.5,1.8-0.9,2.7-1.3c1.6,3.6,3.4,7,5.1,10.6c0.1,0.2,0.2,0.6-0.1,0.6
								c-0.7,0.4-1.4,0.7-2.2,1c-1.1-2.4-2.3-4.7-3.4-7.1c-0.4,2-0.6,4.1-0.9,6.2c-1.8-1.1-3.6-2.2-5.4-3.2c1.2,2.4,2.3,4.8,3.4,7.1
								c-0.8,0.4-1.6,0.8-2.4,1.1c-1.5-3.2-3.1-6.4-4.6-9.6c-0.2-0.5-0.6-0.9-0.6-1.5c0.8-0.5,1.7-0.8,2.6-1.2c1.3,0.9,2.6,1.6,3.8,2.5
								c0.5,0.3,1,0.5,1.2,1.1C199,232.5,199.2,230.4,199.4,228.3z"/>
							<g>
								<path class="st1" d="M78.6,237.6c3.4-3,6.8-5.9,10.2-8.9c0.8,0.4,1.5,0.7,2.3,1.1c-0.2,4.5-0.4,9-0.7,13.4
									c-0.8-0.4-1.7-0.8-2.5-1.2c0.1-1,0.1-2,0.2-3c-1.6-0.7-3.1-1.5-4.7-2.2c-0.8,0.6-1.5,1.3-2.3,2C80.2,238.4,79.4,238,78.6,237.6z
									 M85.2,235c1,0.5,2,1,3,1.4c-0.1-1.4,0.1-2.8,0.2-4.2C87.4,233.2,86.4,234.1,85.2,235z"/>
							</g>
							<path class="st1" d="M98.2,233.2c0.9,0.3,1.9,0.6,2.8,1c0.4,2,0.9,3.9,1.4,5.9c1.6-1.3,3.1-2.6,4.7-3.9c1,0.3,1.9,0.6,2.8,0.9
								c-1.3,3.9-2.6,7.8-3.9,11.6c-0.9-0.3-1.7-0.6-2.6-0.9c0.8-2.5,1.7-5,2.6-7.5c-1.6,1.3-3.2,2.5-4.9,3.7c-0.1,0-0.2,0-0.2-0.1
								c-0.6-1.9-1-3.9-1.6-5.8c-0.9,2.5-1.7,4.9-2.5,7.4c-0.9-0.3-1.7-0.6-2.6-0.8C95.6,240.9,96.9,237,98.2,233.2z"/>
							<g>
								<path class="st1" d="M181,235.7c0.8-0.2,1.6-0.5,2.4-0.8c3,3.3,6,6.7,9,10.1c-0.9,0.3-1.7,0.6-2.6,0.9c-0.7-0.6-1.3-1.3-1.8-2
									c-0.2-0.3-0.6-0.1-0.8-0.1c-1.5,0.5-2.9,1-4.4,1.4c-0.1,1-0.2,2-0.2,3c-0.9,0.2-1.8,0.6-2.6,0.9
									C180.3,244.6,180.7,240.1,181,235.7z M183.3,238.4c-0.1,1.4-0.2,2.8-0.3,4.2c1-0.3,2-0.7,3-1
									C185.2,240.5,184.1,239.5,183.3,238.4z"/>
							</g>
							<path class="st1" d="M115.1,238.6c2.4-0.5,5.1,0.6,6.6,2.5c-0.6,0.6-1.2,1.1-1.8,1.7c-1.1-1-2.5-2.2-4.1-1.8
								c-0.5,0.1-0.5,0.7-0.7,1c1,1.6,3.2,1.8,4.5,3.2c1.9,1.6,1,5-1.3,5.7c-2.3,0.8-4.9-0.2-6.7-1.7c-0.3-0.4-0.9-0.7-0.9-1.2
								c0.6-0.6,1.2-1,1.8-1.5c1,1.3,2.4,2.3,4.1,2.3c0.5,0,1.1-0.3,1.2-0.9c0.2-0.6-0.3-1-0.7-1.2c-1.4-1-3.3-1.4-4.3-3
								C111.7,241.8,113,239.1,115.1,238.6z"/>
							<g>
								<path class="st1" d="M163.7,240c1.8-0.3,3.6-0.8,5.4-1.1c2.2-0.3,4.5,0.5,5.9,2.3c1.4,1.9,1.7,4.6,0.6,6.7
									c-0.9,1.7-2.7,2.8-4.6,3.2c-1.6,0.3-3.1,0.6-4.7,1C165.4,248,164.4,244,163.7,240z M166.9,241.8c0.4,2.4,1,4.8,1.5,7.2
									c1.4-0.3,2.8-0.5,4-1.3c1.6-1.6,1.3-4.7-0.7-5.9C170.2,240.9,168.4,241.6,166.9,241.8z"/>
							</g>
							<path class="st1" d="M124.4,240.2c3.4,0.3,6.8,0.7,10.2,1.1c-0.1,0.8-0.2,1.6-0.3,2.5c-1.3-0.1-2.5-0.2-3.8-0.4
								c-0.3,3.2-0.7,6.4-1.1,9.7c-0.9,0-1.8-0.2-2.7-0.3c0.3-3.2,0.8-6.4,1.1-9.6c-1.1-0.4-2.5-0.3-3.7-0.5
								C124.2,241.8,124.3,241,124.4,240.2z"/>
							<g>
								<path class="st1" d="M150.2,241.4c2.1-0.2,4.1-0.4,6.2-0.5c1.5-0.1,3.3,0.5,4,1.9c0.7,1.4,0.8,3.2-0.2,4.5
									c-0.4,0.6-1,0.9-1.5,1.3c1.2,1.3,2.3,2.7,3.4,4c-1.1,0.1-2.2,0.2-3.2,0.3c-1-1.2-2-2.4-3-3.6c-0.7,0.1-1.4,0.1-2.1,0.2
									c0.1,1.3,0.2,2.6,0.4,3.9c-0.9,0.1-1.8,0.1-2.7,0.2C150.9,249.6,150.5,245.5,150.2,241.4z M153.1,243.6c0.1,1.2,0.2,2.3,0.3,3.5
									c1.4-0.2,3-0.1,4.3-0.8c0.5-0.9,0.6-2.3-0.5-2.7C155.9,243.1,154.5,243.6,153.1,243.6z"/>
							</g>
							<path class="st1" d="M137.5,241.4c3.1,0,6.2,0.1,9.3,0.1c0,0.8,0,1.6,0,2.4c-2.2,0-4.4-0.1-6.6-0.1c0,0.8,0,1.7,0,2.5
								c1.9,0,3.9,0,5.8,0.1c0,0.8,0,1.6,0,2.4c-2,0-3.9-0.1-5.9-0.1c0,0.8,0,1.7,0,2.6c2.2,0,4.5,0.1,6.7,0.1c0,0.8,0,1.6,0,2.4
								c-3.2,0-6.3-0.1-9.5-0.1C137.4,249.6,137.4,245.5,137.5,241.4z"/>
						</g>
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
								<h3 class="Section__title">About Queen's Chips</h3>
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
								<input type="text" name="email" class="form-control input-bordered" placeholder="Join our weekly newsletter" />
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
						<h4 class="modal-title">Queen's Chips Video</h4>
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