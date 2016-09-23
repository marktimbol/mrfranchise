@extends('layouts.app')

@section('pageTitle', 'Our Brands')

@section('subpage__header')
	<div class="Subpage">
		<div class="container Flex Flex--column Flex--center">			
			<h1 class="Subpage__title">Brands</h1>
			<h2 class="Subpage__subtitle">
				First rule of our brands is to talk about our brands
			</h2>
		</div>
	</div>
@endsection

@section('content')
	<div class="Cards">
		<div class="Row">
			<div class="Card Column-3 Als-beef">
				<div class="Card__header">
					<a href="/brands/als-beef">
						{!! file_get_contents(public_path() . '/images/als-beef/logo.svg') !!}
					</a>
				</div>
				<div class="Card__content">
					<h4 class="Card__title">Al's Beef</h4>
				</div>
			</div>

			<div class="Card Column-3 Queens-chips">
				<div class="Card__header">
					<a href="/brands/queens-chips">
						{!! file_get_contents(public_path() . '/images/queens-chips/logo.svg') !!}
					</a>
				</div>
				<div class="Card__content">
					<h4 class="Card__title">Queen's Chips</h4>
				</div>
			</div>

			<div class="Card Column-3 Krush-burger">
				<div class="Card__header">
					<a href="/brands/krush-burger">
						{!! file_get_contents(public_path() . '/images/krush-burger/logo.svg') !!}
					</a>
				</div>
				<div class="Card__content">
					<h4 class="Card__title">Krush Burger</h4>
				</div>
			</div>

			<div class="Card Column-3 Nancys-pizza">
				<div class="Card__header">
					<a href="/brands/nancys-pizza">
						{!! file_get_contents(public_path() . '/images/nancys-pizza/logo.svg') !!}
					</a>
				</div>
				<div class="Card__content">
					<h4 class="Card__title">Nancy's Pizza</h4>
				</div>
			</div>
		</div>

		<div class="Row">
			<div class="Card Column-3 Eyescream">
				<div class="Card__header">
					<a href="/brands/eyescream-and-friends">
						{!! file_get_contents(public_path() . '/images/eyescream/logo.svg') !!}
					</a>
				</div>
				<div class="Card__content">
					<h4 class="Card__title">Eyescream &amp; Friends</h4>
				</div>
			</div>
		</div>
	</div>
@endsection