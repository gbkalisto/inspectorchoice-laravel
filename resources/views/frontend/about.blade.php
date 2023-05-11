@extends('frontend.layouts.main')
@section('main-section')
<!---banner section start here----->

<section class="banner-blog">
	<div class="banner-about">
		<h3>ABOUT</h3>
	</div>
</section>


<!---professionals section starst here--->

<section class="professional">
	<div class="container">
		<div class="professional-inner">
			<div class="professional-content">
				<div class="qualified-content">
					<p>Years Of Experience With Experienced Team</p>
					<h2>Successfully Delivering<br> Qualified Professionals</h2>
					<p class="cnt-menu">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
						sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
						aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo
						dolores et ea rebum. Stet clita kasd gubergren, no sea takimata ut labore et
						dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
						justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
				</div>
				<div class="qualified-menu">
					<ul>
						<li>We Are Confident About Our Projects.</li>
						<li>Provide High Quality Services.</li>
						<li>Experienced Professionals</li>
						<li>Easy Way To Get The Best Services</li>
					</ul>

					<a href="#" class="know">know more</a>
				</div>

			</div>
			<div class="qualified-image">
				<div class="qualified-main">
					<div class="image-one">
						<img src="{{url('frontend/images/host.jpg')}}">
					</div>
					<div class="image-two">
						<img src="{{url('frontend/images/capp.jpg')}}">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<!----who we are section start here--->

<section class="leadership">
	<div class="container">
		<div class="leadership-cont">
			<h2>WHO WE ARE</h2>
			<p>There are many variations of passages of Lorem Ipsum available,
				but the majority have suffered alteration in some form, by injected humour,
				or randomised words which don't look even slightly believable. If you are
				going to use a passage of Lorem Ipsum, you need to be sure there isn't
				anything embarrassing hidden in the middle of text. All the Lorem Ipsum
				generators on the Internet tend to repeat predefined chunks as necessary, making this the first true
				generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures,
				to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free
				from repetition, injected humour, or non-characteristic words etc.</p>
		</div>
		<div class="leadership-inner">
			<div class="leader membership">
				<h3>LEADERSHIP</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
					sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
					aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
					duo dolores et ea rebum. Stet clita kasd gubergren,
					no sea takimata ut labore et dolore magna aliquyam erat,
					sed diam voluptua</p>
			</div>
			<div class="leader">
				<img src="{{url('frontend/images/laptop.png')}}">
			</div>
			<div class="leader membership">
				<h3>RESEARCH</h3>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr,
					sed diam nonumy eirmod tempor invidunt ut labore et dolore magna
					aliquyam erat, sed diam voluptua. At vero eos et accusam et justo
					duo dolores et ea rebum. Stet clita kasd gubergren,
					no sea takimata ut labore et dolore magna aliquyam erat,
					sed diam voluptua</p>
			</div>
		</div>
	</div>
</section>


<!--construction section starst here--->

<section class="professional construct">
	<div class="container">
		<div class="professional-inner">

			<div class="qualified-image">
				<div class="qualified-main">
					<div class="image-onee">
						<img src="{{url('frontend/images/brown.jpg')}}">
					</div>
					<div class="image-twoo">
						<img src="{{url('frontend/images/person.jpg')}}">
					</div>
				</div>
			</div>
			<div class="professional-content">
				<div class="qualified-content">
					<p>Providing solutions of every kind</p>
					<h2>Best And Easiest<br>Construction Networking</h2>
					<p class="cnt-menu">Sit amet, consetetur sadipscing elitr, sed diam nonumy
						eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
						At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
						no sea takimata ut labore et dolore magna aliquyam erat, sed diam voluptua.
						At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
					<p class="cnt-menu">Sit amet, consetetur sadipscing elitr, sed diam nonumy
						eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua.
						At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren,
						no sea takimata ut labore et dolore magna aliquyam erat, sed diam voluptua.
						At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren</p>
				</div>
				<div class="qualified-menu knowbar">
					<a href="#" class="know">know more</a>
				</div>

			</div>
		</div>
	</div>
</section>
@endsection