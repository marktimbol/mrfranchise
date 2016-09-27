@extends('layouts.app')

@section('pageTitle', 'Franchise History')

@section('bodyClass', 'Franchise-history')

@section('subpage__header')
	<div class="Subpage">
		<div class="container Flex Flex--column Flex--center">			
			<h1 class="Subpage__title">Franchise History</h1>
			<h2 class="Subpage__subtitle">
				
			</h2>
		</div>
	</div>
@endsection

@section('content')
	<div class="Row">
		<div class="Column-12">
			{!! file_get_contents(public_path() . '/images/map-me.svg') !!}
		</div>
	</div>

	<div class="Row Franchises">
		<div class="Column-4 Franchise Flex Flex--center">
			<div class="Franchise__marker">
				{!! file_get_contents(public_path() . '/images/als-beef/marker.svg') !!}
			</div>
			<div class="Franchise__content">
				<h4 class="Section__title">Just Sold</h4>
				<h5 class="Franchise--name">Al's Beef</h5>
				<p>GCC Exclusive</p>
			</div>
		</div>

		<div class="Column-4 Franchise Flex Flex--center">
			<div class="Franchise__marker">
				{!! file_get_contents(public_path() . '/images/queens-chips/marker.svg') !!}
			</div>
			<div class="Franchise__content">
				<h4 class="Section__title">Just Sold</h4>
				<h5 class="Franchise--name">Queen's Chips</h5>
				<p>GCC Exclusive - Egypt &amp; Lebanon</p>
			</div>
		</div>

		<div class="Column-4 Franchise Flex Flex--center">
			<div class="Franchise__marker">
				{!! file_get_contents(public_path() . '/images/krush-burger/marker.svg') !!}
			</div>
			<div class="Franchise__content">
				<h4 class="Section__title">Just Sold</h4>
				<h5 class="Franchise--name">Krush Burger</h5>
				<p>KSA (West Region) &amp; Qatar</p>
			</div>
		</div>

	</div>
@endsection