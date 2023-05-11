@extends('frontend.layouts.main')
@section('main-section')
<link rel="stylesheet" href="{{url('frontend/css/index.css')}}">

<!---banner section starts here---->

<section class="banner-main">
    <div class="banner-inner-main">
        <div class="banner-cont">
            <div class="content-bar">
                <h2>LET OUR INSPECTORS HELP YOU</h2>
                <h3>FIND AND HIRE PROFESSIONALS<br> IN A FEW SIMPLE STEPS</h3>
            </div>
        </div>
        <div class="banner-image">
            <img src="{{url('frontend/images/girl.jpg')}}">
        </div>
    </div>
</section>

<!---solar section starts here---->

<section class="solar-main">
    <div class="container">
        <div class="solar-inner-main">
            <div class="electric-main">
                <div class="electric-content">
                    <h4>SOLAR</h4>
                </div>
                <div class="electric-image">
                    <img src="{{url('frontend/images/group 60.png')}}">
                </div>
            </div>
            <div class="electric-main">
                <div class="electric-content">
                    <h4>ELECTRICAL</h4>
                </div>
                <div class="electric-image">
                    <img src="{{url('frontend/images/Group 265.png')}}">
                </div>
            </div>
            <div class="electric-main">
                <div class="electric-content">
                    <h4>PLUMBING</h4>
                </div>
                <div class="electric-image">
                    <img src="{{url('frontend/images/Group 263.png')}}">
                </div>
            </div>
            <div class="electric-main">
                <div class="electric-content">
                    <h4>HVAC</h4>
                </div>
                <div class="electric-image">
                    <img src="{{url('frontend/images/Group 63.png')}}">
                </div>
            </div>
            <div class="electric-main">
                <div class="electric-content">
                    <h4>PAINTING</h4>
                </div>
                <div class="electric-image">
                    <img src="{{url('frontend/images/Group 264.png')}}">
                </div>
            </div>
            <div class="electric-main">
                <div class="electric-content">
                    <h4>ROOFING</h4>
                </div>
                <div class="electric-image">
                    <img src="{{url('frontend/images/Group 65.png')}}">
                </div>
            </div>
        </div>
    </div>
</section>

<!----about choice section starts here---->
<section class="about-choice">
    <div class="container">
        <div class="about-content">
            <h2>ABOUT INSPECTORS CHOICE</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                explicabo. Nemo enim ipsam voluptatem quia aut odit aut fugit, sed quia consequuntur magni dolores eos
                qui ratione voluptatem sequi nesciunt. Neque porro quisquam estipsum quia dolor sit amet,
                consectetur, adipisci velit, sed quia non numquam eius modi</p>
        </div>
        <div class="about-choice-main">
            <div class="about-choice-inner">
                <div class="about-cnt">
                    <h4>We Have Experienced Inspectors To Qualify All Contractors</h4>
                    <p>Unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo</p>

                    <a href="#" class="about-btn"><img src="{{url('frontend/images/arrow.png')}}"></a>
                </div>
                <div class="abt-img">
                    <img src="{{url('frontend/images/cap.jpg')}}">
                </div>

            </div>
            <div class="about-choice-inner">
                <div class="abt-img">
                    <img src="{{url('frontend/images/stick.jpg')}}">
                </div>
                <div class="about-cnt">
                    <h4>Perfectly Designed For Navigate The Complexity Of Construction</h4>
                    <p>Sde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo</p>
                    <a href="#" class="about-btn"><img src="{{url('frontend/images/arrow.png')}}"></a>
                </div>


            </div>
            <div class="about-choice-inner">
                <div class="about-cnt">
                    <h4>The Best And Easiest Construction Networking Services</h4>
                    <p>Acuae omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        totam rem aperiam, eaque ipsa quae ab illo</p>
                    <a href="#" class="about-btn"><img src="{{url('frontend/images/arrow.png')}}"></i></a>
                </div>
                <div class="abt-img">
                    <img src="{{url('frontend/images/cloud.jpg')}}">
                </div>

            </div>
        </div>
    </div>
</section>



<!--bussiness section start here-->

<section class="bussiness-main">
    <div class="container">
        <div class="bussiness-inner-main">
            <div class="bussiness-cont">
                <div class="bussiness-text">
                    <h2>Build Your Business<br>With Us Register Now</h2>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque laudantium, totam rem aperiam</p>
                    <div class="register">
                        <a href="#">register now</a>
                    </div>
                </div>
            </div>
            <div class="bussiness-img">
                <img src="{{url('frontend/images/helmet.png')}}">
            </div>

        </div>
    </div>
</section>


<!----- client section starts here---->
<section class="client-main">
    <div class="container">
        <div class="client-content">
            <h2>WHAT OUR CLIENT SAYS</h2>
            <p>cuae omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                totam rem aperiam,<br> eaque ipsa quae ab illo</p>
        </div>
        <div class="regular slider">
            <div>
                <div class="slide-bar">
                    <div class="slide-barr">
                        <div class="rgt-imge">
                            <img src="{{url('frontend/images/boy.png')}}">
                        </div>
                        <div class="left-cont">
                            <span class="left-spn">
                                <h4>John Doe</h4>
                                <h5>Business Entrepreneur</h5>
                            </span>
                        </div>
                    </div>
                    <div class="btm-cnt">
                        <p>Pero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi
                            sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                            mollitia animi,
                            id est laborum et dolorum fuga.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="slide-bar">
                    <div class="slide-barr">
                        <div class="rgt-imge">
                            <img src="{{url('frontend/images/grl.png')}}">
                        </div>
                        <div class="left-cont">
                            <span class="left-spn">
                                <h4>Annie Jordan</h4>
                                <h5>Entrepreneur</h5>
                            </span>
                        </div>
                    </div>
                    <div class="btm-cnt">
                        <p>Et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia
                            deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="slide-bar">
                    <div class="slide-barr">
                        <div class="rgt-imge">
                            <img src="{{url('frontend/images/boy.png')}}">
                        </div>
                        <div class="left-cont">
                            <span class="left-spn">
                                <h4>John Doe</h4>
                                <h5>Business Entrepreneur</h5>
                            </span>
                        </div>
                    </div>
                    <div class="btm-cnt">
                        <p>Pero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi
                            sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                            mollitia animi,
                            id est laborum et dolorum fuga.</p>
                    </div>
                </div>
            </div>

            <div>
                <div class="slide-bar">
                    <div class="slide-barr">
                        <div class="rgt-imge">
                            <img src="{{url('frontend/images/grl.png')}}">
                        </div>
                        <div class="left-cont">
                            <span class="left-spn">
                                <h4>Annie Jordan</h4>
                                <h5>Entrepreneur</h5>
                            </span>
                        </div>
                    </div>
                    <div class="btm-cnt">
                        <p>Et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia
                            deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="slide-bar">
                    <div class="slide-barr">
                        <div class="rgt-imge">
                            <img src="{{url('frontend/images/boy.png')}}">
                        </div>
                        <div class="left-cont">
                            <span class="left-spn">
                                <h4>John Doe</h4>
                                <h5>Business Entrepreneur</h5>
                            </span>
                        </div>
                    </div>
                    <div class="btm-cnt">
                        <p>Pero eos et accusamus et iusto odio dignissimos ducimus qui
                            blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                            excepturi
                            sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt
                            mollitia animi,
                            id est laborum et dolorum fuga.</p>
                    </div>
                </div>
            </div>
            <div>
                <div class="slide-bar">
                    <div class="slide-barr">
                        <div class="rgt-imge">
                            <img src="{{url('frontend/images/grl.png')}}">
                        </div>
                        <div class="left-cont">
                            <span class="left-spn">
                                <h4>Annie Jordan</h4>
                                <h5>Entrepreneur</h5>
                            </span>
                        </div>
                    </div>
                    <div class="btm-cnt">
                        <p>Et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium
                            voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati
                            cupiditate non provident, similique sunt in culpa qui officia
                            deserunt mollitia animi, id est laborum et dolorum fuga.</p>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
