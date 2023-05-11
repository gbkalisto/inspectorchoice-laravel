@extends('frontend.layouts.main')
@section('main-section')
    <link rel="stylesheet" href="{{url('frontend/css/work_join.css')}}">
    <!---banner section start here----->

    <section class="work-blogg">
        <div class="join-aboutt">
            <h3>Join Us</h3>
        </div>
    </section>

    <!---inspire-join section start here--->

    <section class="inspire-join ">
        <div class="container">
            <div class="inspire-join-inner">
                <div class="inspire-join-main">
                    <div class="inspire-join-cntt">
                        <h3>We Inspire Greatness<br>Join Us To Build Better Future</h3>
                    </div>
                    <div class="join-img">
                        <img src="{{url('frontend/images/white.png')}}">
                    </div>


                </div>

                <div class="inspire-join-right">
                    <div class="inspire-right-cnt">
                        <h3>Lets Do Great Things Together<br>Come Join With Us</h3>
                        <p>Ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor
                            incididunt utlabore et dolore magna aliqua. Utenim ad minim veniam quis
                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.sit amet,
                            consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                            aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                            commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu</p>
                        <a href="#" class="contact-btn">contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--reason section starts here--->

    <section class="reason-main">
        <div class="container">
            <div class="reason-join">
                <h3>Reasons For Joining Us</h3>
                <p>Ipsum dolor sit amet consectetur adipiscing elitsed do eiusmod tempor
                    incididunt utlabore et dolore magna aliqua. Utenim ad minim veniam quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.sit amet,</p>
            </div>
            <div class="reason-inner-main">
                <div class="reason-main-img">
                    <img src="{{url('frontend/images/numb.png')}}">
                    <h4>GOOD TEAM</h4>
                </div>
                <div class="reason-main-img">
                    <img src="{{url('frontend/images/numbb.png')}}">
                    <h4>PERMANENT CONTRACT</h4>
                </div>
                <div class="reason-main-img">
                    <img src="{{url('images/numbbb.png')}}">
                    <h4>GREAT EXPERIENCE</h4>
                </div>
            </div>
        </div>
    </section>


    <!----meet us section starts here--->

    <section class="let-meet-us">
        <div class="container">
            <div class="let-meet-inner">
                <div class="let-meet-main links">
                    <h2>LETS MEET US</h2>
                    <p>Ipsum dolor adipiscing elitsed <br>et dolore magna amet</p>
                </div>
                <div class="let-meet-main pagebar">
                    <h2>LINKED IN</h2>
                    <img src="{{url('frontend/images/ind.png')}}">
                    <a href="#" class="follow-us">follow our page</a>
                </div>
                <div class="let-meet-main pagebar">
                    <h2>JOBS OPPORTUNITIES</h2>
                    <img class="job-img" src="{{url('frontend/images/pen.png')}}">
                    <a href="#" class="follow-us">follow our page</a>
                </div>
            </div>
        </div>
    </section>
@endsection