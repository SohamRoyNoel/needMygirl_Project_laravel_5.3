<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Marry Off Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Style-sheets -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('css/flexslider.css') }}" type="text/css" media="screen" property="" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!--// Style-sheets -->
    <!--web-fonts-->
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <!--//web-fonts-->
</head>

<body>
<!-- banner -->

@yield('intro_banner')
<!-- //banner -->
<br>
    @yield('content')

    @yield('testiminials')

<!-- Footer -->
<footer class="footer-section-w3-agileits py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 footer-grids-w3-agile">
                <h2>Instagram Tweets</h2>
                <div class="row ff-images">
                    <a href="stories.html" class="col-4">
                        <img src="{{ asset('images/s1.jpg')}}" class="img-fluid" alt="Responsive image">

                    </a>
                    <a href="stories.html" class="col-4">
                        <img src="{{ asset('images/s2.jpg')}}" class="img-fluid" alt="Responsive image">

                    </a>
                    <a href="stories.html" class="col-4">
                        <img src="{{ asset('images/s3.jpg')}}" class="img-fluid" alt="Responsive image">

                    </a>
                    <a href="stories.html" class="col-4">
                        <img src="{{ asset('images/s3.jpg')}}" class="img-fluid" alt="Responsive image">

                    </a>
                    <a href="stories.html" class="col-4">
                        <img src="{{ asset('images/s3.jpg')}}" class="img-fluid" alt="Responsive image">

                    </a>
                    <a href="stories.html" class="col-4">
                        <img src="{{ asset('images/s1.jpg')}}" class="img-fluid" alt="Responsive image">

                    </a>
                </div>
            </div>
            <div class="col-lg-4 footer-grids-w3-agile">
                <h3>Get in touch</h3>
                <address>
                    <p>Congress Yerevan, 1 Italy St, Yerevan,</p>
                    <p class="my-2">Armenia,No 008921</p>
                    <p class="phone">phone: +0(21) 334 5678</p>
                    <p class="phone my-2">Fax: +0(21) 334 5678</p>
                    <p class="phone">Mail:
                        <a href="mailto:info@example.com">info@example.com</a>
                    </p>
                </address>
            </div>
            <div class="col-lg-4 footer-grids-w3-agile">
                <h3>Twitter feed</h3>
                <ul class="w3agile_footer_grid_list">
                    <li>Ut aut reiciendis voluptatibus adipiscing
                        <a href="#">example.com</a> alias, ut aut.
                        <span>
								<i class="fab fa-twitter"></i> 02 days ago</span>
                    </li>
                    <li>Itaque earum rerum hic tenetur a sapiente
                        <a href="#">example.com</a> ut aut.
                        <span>
								<i class="fab fa-twitter"></i> 03 days ago</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<!-- //Footer -->
<!-- copyright -->
<div class="copyright-w3layouts">
    <div class="container">
        <p class="py-xl-4 py-3">© 2018 Marry Off . All Rights Reserved | Design by
            <a href="http://w3layouts.com/"> W3layouts </a>
        </p>
    </div>
</div>
<!-- //copyright -->

<!-- Required common Js -->
<script src='{{ asset('js/jquery-2.2.3.min.js') }}'></script>


<!-- //Required common Js -->
<!-- stats -->

<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>

<!-- //stats -->
<!-- Responsiveslides -->

<script src="{{ asset('js/responsiveslides.min.js') }}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager: true,
            nav: false,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- // Responsiveslides -->
<!-- flexSlider -->
<script defer src="{{ asset('js/jquery.flexslider.js') }}"></script>

<script>
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>

<!-- //flexSlider -->

<!-- start-smoth-scrolling -->

<script src="{{ asset('js/move-top.js') }}"></script>
<script src="{{ asset('js/easing.js') }}"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- here stars scrolling icon -->
<script>
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //here ends scrolling icon -->
<!-- Js for bootstrap working-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- //Js for bootstrap working -->
</body>

</html>