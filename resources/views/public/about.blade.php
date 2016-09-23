@extends('layouts.app')

@section('pageTitle', 'About Us')

@section('subpage__header')
	<div class="Subpage">
		<div class="container Flex Flex--column Flex--center">			
			<h1 class="Subpage__title">About Us</h1>
			<h2 class="Subpage__subtitle">
				The people behind our success
			</h2>
		</div>
	</div>
@endsection

@section('content')
	<div class="Row">
		<ul class="Teams">
			<li class="Team">
				<img src="/images/karim-el-ghazl.jpg" alt="" title="" class="img-responsive" />
			</li>
			<li class="Team">
				<img src="/images/jim-underwood.jpg" alt="" title="" class="img-responsive" />
			</li>
			<li class="Team">
				<img src="/images/paul-fuller.jpg" alt="" title="" class="img-responsive" />
			</li>
			<li class="Team">
				<img src="/images/sara-mahdi.jpg" alt="" title="" class="img-responsive" />
			</li>
		</ul>
	</div>
	
	<div class="Row">
		<div>
			<p>
				Mr. Franchise is a full service franchise brokerage firm. We are proud to have established a unique presence in the franchising sector in that all our affiliated brokers are not only trained and experienced franchise brokers, but also franchise and/or business owners themselves. When clients pose questions regarding franchising our answers are derived not only from classroom training but from real world experience. We have found that real life rarely co-operates with textbook business examples!
			</p>
			<p>
				We currently hold relationships with over 100 of the U.S. leading franchise brands. Our expansive portfolio provides our franchise buyer clients with a much broader and varied pool of franchises to research. Having more choices means our clients can choose the most appropriate franchise based on their background, skills and goals – rather than having to compromise.
			</p>
		</div>
	</div>
@endsection