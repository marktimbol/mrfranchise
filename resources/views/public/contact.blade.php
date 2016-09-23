@extends('layouts.app')

@section('pageTitle', 'Contact Us')

@section('bodyClass', 'Contact-us')

@section('subpage__header')
	<div class="Subpage">
		<div class="container Flex Flex--column Flex--center">			
			<h1 class="Subpage__title">Get in Touch</h1>
			<h2 class="Subpage__subtitle"></h2>
		</div>
	</div>
@endsection

@section('content')
	<div class="Row">
		<div class="Column-6 Contact--left">
			<h3 class="Section__title">Contact Us</h3>
			<form method="POST">
				{{ csrf_field() }}
				<div class="form-group">
					<label for="name">Name</label>
					<input type="text" id="name" name="name" placeholder="Name" class="form-control" required />
				</div>
				<div class="form-group">
					<label for="email">eMail</label>
					<input type="email" id="email" name="email" placeholder="eMail" class="form-control" required />
				</div>	
				<div class="form-group">
					<label for="phone">Phone</label>
					<input type="text" id="phone" name="phone" placeholder="Phone" class="form-control" required />
              	</div>	

				<div class="form-group">
					<label for="message">Message</label>
					<textarea rows="5" name="message" id="message" class="form-control" required></textarea>
				</div>	

				<div class="form-group">
					<button type="submit" name="submit" class="btn btn-lg btn-primary">Let's talk</button>
				</div>
          </form>
		</div>
		<div class="Column-6 Contact--right">
			<h3 class="Section__title">Contact Information</h3>
			<address>
				Office 430, Building B Al Saaha Offices Burj Khalifa District, Dubai, United Arab Emirates<br />
				+971 55 177 2727<br />
				<a href="mailto:hello@mrfranchise.ae">hello@mrfranchise.ae</a>
			</address>

			<hr />

			<h3 class="Section__title">For Franchisor</h3>
			<p><a href="mailto:addme@mrfranchise.ae">addme@mrfranchise.ae</a></p>

			<hr />

			<h3 class="Section__title">Career Opportunities</h3>
			<p><a href="mailto:life@mrfranchise.ae">life@mrfranchise.ae</a></p>
		</div>
	</div>
@endsection