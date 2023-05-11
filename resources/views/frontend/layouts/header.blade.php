<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{'frontend/css/slick.css'}}">
    <link rel="stylesheet" type="text/css" href="{{'frontend/css/slick-theme.css'}}">
    <link rel="stylesheet" href="{{'frontend/css/custom.css'}}">
    <title>Work</title>
</head>

<body>
    <!--header section starts here--->
    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="header-imgg">
                    <a href="{{url('/')}}"><img src="{{url('frontend/images/inspector.png')}}"></a>
                </div>
                <div id="mobile-nav">
                    <div class="btn-header">
                        <button class="hamburger">&#9776;</button>
                        <button class="cross">&#735;</button>
                    </div>
                    <div class="menu">
                        <ul>
                            <a href="#">
                                <li>ABOUT</li>
                            </a>
                            <a href="#">
                                <li>CLASS</li>
                            </a>
                            <a href="#">
                                <li>CORPORATE TRAINING</li>
                            </a>
                            <a href="#">
                                <li>MEETUPS</li>
                            </a>
                            <a href="#">
                                <li>CONTACT</li>
                            </a>
                        </ul>
                    </div>
                </div>


                <nav id="nav-wrap">
                    <ul id="nav" class="nav">
                        <li class="current"><a class="smoothscroll" href="{{url('/')}}">Home</a></li>
                        <li><a class="smoothscroll" href="{{url('/about')}}">About</a></li>
                        <li><a class="smoothscroll" href="{{url('/work')}}">How its Works</a></li>
                        <li><a class="smoothscroll" href="{{url('/faq')}}">FAQ</a></li>
                        <li><a class="smoothscroll" href="{{url('/join')}}">Join Us</a></li>
                        <li><a class="smoothscroll" href="{{url('/contact')}}">Contact</a></li>
                    </ul>

                </nav>
                <div class="nav-btn">
                    <a href="#" class="register">register</a>
                    <a href="#" class="login">login</a>
                </div>
            </div>
        </div>
    </header>