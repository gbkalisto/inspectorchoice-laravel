<!---footer section starts here----->

<footer class="footer-bar">
    <div class="container">
        <div class="footer-inner-main">
            <div class="builter">
                <img src="{{url('frontend/images/logoo.png')}}">
                <p>Lorem ipsum dolor sit amet,<br> consectetur adipiscing elit Lorem ipsum</p>
                <div class="icon-bar">
                    <ul>
                        <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="get-touch builter">
                <h3>Contact Information</h3>
                <ul>
                    <li><a href="#"><i class="fa-solid fa-phone"></i>(805) 400-4543</a></li>
                    <li><i class="fa-solid fa-location-dot"></i>825 Riverside Ave #14 Paso Robles, CA 93446</li>

                </ul>
            </div>
            <div class="service-bar builter">
                <h3>Newsletter</h3>
                <p>Stay Updated on all that’s new add <br>noteworthy</p>
                <form>
                    <div class="teext-form">
                        <input type="text" id="fname" placeholder="Enter your Email"><br>
                        <input type="submit" id="sbmitt" value="" />

                    </div>
                </form>
            </div>

        </div>
        <div class="copyrgt">
            <div class="container">
                <div class="copyryt-inner-main">
                    <div class="copyryt-inner">
                        <p>© 2022 Inspectors Choices | All Rights Reserved</p>
                    </div>
                    <div class="copyryt-inner policy">
                        <ul>
                            <li class="term"><a href="#">Term of use</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
</footer>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="{{url('frontend/js/slick.js')}}" type="text/javascript" charset="utf-8"></script>
<script>
    $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 4
    });
</script>
<script>
    $(".cross").hide();
    $(".menu").hide();
    $(".hamburger").click(function() {
        $(".menu").slideToggle("slow", function() {
            $(".hamburger").hide();
            $(".cross").show();
        });
    });

    $(".cross").click(function() {
        $(".menu").slideToggle("slow", function() {
            $(".cross").hide();
            $(".hamburger").show();
        });
    });

    $(document).ready(function(){
		  $('.accordion-list > li > .answer').hide();
			
		  $('.accordion-list > li').click(function() {
			if ($(this).hasClass("active")) {
			  $(this).removeClass("active").find(".answer").slideUp();
			} else {
			  $(".accordion-list > li.active .answer").slideUp();
			  $(".accordion-list > li.active").removeClass("active");
			  $(this).addClass("active").find(".answer").slideDown();
			}
			return false;
		  });
		  
		});
</script>
</body>

</html>