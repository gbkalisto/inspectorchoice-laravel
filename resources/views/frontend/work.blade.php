@extends('frontend.layouts.main')
@section('main-section')

<!---banner section start here----->

<section class="banner-blogg">
	<div class="banner-aboutt">
		<h3>HOW IT WORKS</h3>
	</div>
</section>


<!-- residental construction section starts here--->


<section class="how-it-con construct">
	<div class="container">
		<div class="construct-inner">
			<div class="aboutt-choice-main">
				<div class="aboutt-choice-inner">
					<div class="about-cntt cntmenu">
						<h4 class="resident">RESIDENTIAL CONSTRUCTIONS</h4>
						<p>sit amet, consectetur adipiscing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							Duis aute irure dolor in reprehenderit in voluptate velit
							esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat</p>

					</div>
					<div class="abtt-img">
						<img src="{{url('frontend/images/House.jpg')}}">
					</div>

				</div>
				<div class="aboutt-choice-inner">
					<div class="abtt-img">
						<img src="{{url('frontend/images/const.jpg')}}">
					</div>
					<div class="about-cntt">
						<h4 class="resident">BUSINESS CONSTRUCTIONS</h4>
						<p>sit amet, consectetur adipiscing elit, sed do eiusmod tempor
							incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
							Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu</p>

					</div>

				</div>
			</div>
		</div>
	</div>
</section>



<!---combined section starts here--->

<section class="combined">
	<div class="combined-main">
		<h2>COMBINED EXPERIENCE OF ACTUAL BUILDING INSPECTORS
			TO QUALIFY ALL CONTRACTORS</h2>
		<a href="#" class="rqt-call">request a call back</a>
	</div>
</section>


<!--our solution section starts here--->

<section class="our-solution">
	<div class="container">
		<div class="solution-inner">
			<div class="solution-main">
				<h2>OUR SOLUTIONS</h2>
				<p>Lorem ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor
					incididunt utlabore et dolore magna aliqua. Utenim ad minim veniam quis nostrud
					exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.sit amet,
					consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
					Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
			</div>
			<div class="choose-inner-main">
				<div class="choose-main">
					<ul>
						<li>CHOOSE THE CORRECT SERVICE</li>
						<li>BE SURE OF WHAT YOU WANT</li>
					</ul>
				</div>
				<div class="choose-main">
					<ul>
						<li>COME TO SEE A LIVE PREVIEW</li>
						<li>CHOOSE BETWEEN RATES OR INSTANT PAYMENT</li>
					</ul>
				</div>
				<div class="choose-main">
					<ul>
						<li>COMPARE ALL THE SERVICE</li>
						<li>COMPARE ALL THE SERVICE</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>




@endsection