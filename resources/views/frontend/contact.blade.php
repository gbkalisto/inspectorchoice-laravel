@extends('frontend.layouts.main') 
@section('main-section')
<link rel="stylesheet" href="{{url('frontend/css/work_join.css')}}">
<!---banner section start here----->
<section class="contact-blogg">
  <div class="contact-aboutt">
	<h3>contact</h3>
  </div>
</section>
<!---touch us section starts here--->
<section class="touch-main-bar">
  <div class="touch-us">
	<div class="container">
	  <div class="touch-us-inner">
		<div class="touch-us-left">
		  <h3>GET IN TOUCH WITH US</h3>
		  <p>Making sure you have all the services you might <br>need at your fingertips. Contact our support center </p>
		</div>
		<div class="touch-us-ryt">
		  <ul>
			<li>
			  <a href="#">
				<i class="fa-solid fa-phone"></i>(805) 400-4543 </a>
			</li>
			<li>
			  <i class="fa-solid fa-location-dot"></i>825 Riverside Ave #14 <br> Paso Robles, CA 93446
			</li>
		  </ul>
		</div>
	  </div>
	</div>
  </div>
  <!---frequently section start here--->
  <div class="frequently-main">
	<div class="container">
	  <div class="fqa-main">
		<h3>FREQUENTLY ASKED QUESTIONS</h3>
	  </div>
	  <div class="frequent-left-main">
		<form id="atend-form" action="{{url('/')}}/contact" method="POST">
		  <div class="form-inner">
			<div class="form-group">
			  @csrf
			  <label for="fname">name</label>
			  <input type="text" id="name" name="name" value="{{old('name')}}">
			  <span style="color:red">
				@error('name')
				  {{$message}}
			    @enderror
			  </span>
			  <label for="email">email</label>
			  <input type="email" id="email" name="email" value="{{old('email')}}">
			  <span style="color:red">
				@error('email')
				  {{$message}}
			    @enderror
			  </span>
			  <label for="phone">phone</label>
			  <input type="number" id="phone" name="phone" value="{{old('phone')}}">
			  <span style="color:red">
				@error('phone')
				  {{$message}}
			    @enderror
			  </span>
			</div>
			<div class="form-group">
			  <label for="mssg">Message</label>
			  <textarea id="text-bar" name="msg" rows="18" cols="57">{{old('msg')}}</textarea>
			  <span style="color:red">
				@error('msg')
				  {{$message}}
			    @enderror
			  </span>
			</div>
			<div class="form-group submit-btn-form">
			  <input type="submit" value="Submit now">
			</div>
		  </div>
		</form>
	  </div>
	</div>
  </div>
  <div class="map-menu">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3443.67131529041!2d76.37764751424241!3d30.331865681778584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3910292b4e34f5eb%3A0xc10962972b52e0e7!2sOmnia%20Hospital!5e0!3m2!1sen!2sin!4v1667218554489!5m2!1sen!2sin" width="1000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
<!---footer section starts here-----> @endsection