<!DOCTYPE HTML>
<html>
<head>
    <title>Ultra Modern an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Ultra Modern Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/cssAdmin/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{ asset('css/cssAdmin/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" >
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <!-- //font-awesome icons -->
    <!--animate-->
    <link href="{{ asset('css/cssAdmin/animate.css') }}" rel="stylesheet" type="text/css" media="all">
    <script src="{{ asset('js/jsAdmin/wow.min.js') }}"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

    <!-- js-->
    <script src="{{ asset('js/jsAdmin/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jsAdmin/jquery-1.11.1.min.js') }}"></script>

    <!--webfonts-->
    <link href='//fonts.googleapis.com/css?family=Comfortaa:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <!--//webfonts-->
    <!-- Metis Menu -->

    <link href="{{ asset('css/cssAdmin/custom.css') }}" rel="stylesheet">
    <!--//Metis Menu -->


</head>
<body class="cbp-spmenu-push">
<div class="main-content">
    <!--left-fixed -navigation-->
    <div class="sidebar" role="navigation">
        <div class="navbar-collapse">
            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right dev-page-sidebar mCustomScrollbar _mCS_1 mCS-autoHide mCS_no_scrollbar" id="cbp-spmenu-s1">
                <div class="scrollbar scrollbar1">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fas fa-tachometer-alt"></i><br>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-users"></i><br>Users <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="{{route('admin.index')}}">View Users</a>
                                </li>

                            </ul>
                            <!-- /nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-lock"></i><br>Admins <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="{{route('admins.create')}}">View Admins</a>
                                </li>
                                <li>
                                    <a href="{{route('admins.index')}}">Make Admin</a>
                                </li>
                            </ul>
                            <!-- /nav-second-level -->
                        </li>
                        <li>
                            <a href="{{route('gallery.index')}}"><i class="fab fa-envira"></i><br>User Gallery</a>
                        </li>

                        <li>
                            <a href="{{route('category.index')}}"><i class="fas fa-tags"></i><br>Categories</a>
                        </li>
                        <li>
                            <a href="#"><i class="fab fa-product-hunt"></i><br>Policies</a>
                        </li>
                        <li>
                            <a href="{{route('adminFAQ.index')}}"><i class="fa fa-question-circle"></i><br>FAQs</a>
                        </li>
                        <li>
                            <a href="{{route('adminLogin.create')}}"><i class="fas fa-sign-out-alt"></i><br>LogOut</a>
                        </li>

                    </ul>
                </div>
                <!-- //sidebar-collapse -->
            </nav>
        </div>
    </div>
    <!--left-fixed -navigation-->
    <!-- header-starts -->
    <div class="sticky-header header-section ">
        <div class="header-left">
            <!--logo -->
            <div class="logo">
                <a href="index.html"><h1>Ultra Modern</h1></a>
            </div>
            <!--//logo-->
            <div class="user-right">
                <div class="profile_details_left"><!--notifications of menu start -->
                    <div class="profile_details">
                        <ul>
                            <li class="dropdown profile_details_drop">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                    <div class="profile_img">
                                        <span class="prfil-img"><img src="images/a.png" alt=""> </span>
                                        <div class="clearfix"></div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu drp-mnu">
                                    <li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li>
                                    <li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li>
                                    <li> <a href="login.html"><i class="fa fa-sign-out"></i> Logout</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="profile_medile"><!--notifications of menu start -->
            <ul class="nofitications-dropdown">
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="badge">3</span></a>
                    <ul class="dropdown-menu anti-dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>You have 3 new messages</h3>
                            </div>
                        </li>
                        <li><a href="#">
                                <div class="user_img"><img src="images/1.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                        <li class="odd"><a href="#">
                                <div class="user_img"><img src="images/2.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                        <li><a href="#">
                                <div class="user_img"><img src="images/3.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                        <li>
                            <div class="notification_bottom">
                                <a href="#">See all messages</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <li class="dropdown head-dpdn">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                    <ul class="dropdown-menu anti-dropdown-menu">
                        <li>
                            <div class="notification_header">
                                <h3>You have 3 new notification</h3>
                            </div>
                        </li>
                        <li><a href="#">
                                <div class="user_img"><img src="images/2.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                        <li class="odd"><a href="#">
                                <div class="user_img"><img src="images/1.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                        <li><a href="#">
                                <div class="user_img"><img src="images/3.png" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clearfix"></div>
                            </a></li>
                        <li>
                            <div class="notification_bottom">
                                <a href="#">See all notifications</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="header-right">
            <!--toggle button start-->
            <div class="search-box">
                <form class="input">
                    <input class="sb-search-input input__field--madoka" placeholder="Search..." type="search" id="input-31">
                </form>
            </div>
            <button id="showLeftPush"><i class="fa fa-bars"></i></button>
            <div class="clearfix"> </div>
            <!--toggle button end-->
        </div>
        <div class="clearfix"> </div>
    </div>
    <!-- //header-ends -->

    <div id="page-wrapper">
        @yield('headBlock')
        @yield('content')


    <div class="copy-section">

        <p>&copy; 2016 Ultra Modern. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
    </div>
</div>
<!-- Classie -->
<script src="{{ asset('js/jsAdmin/classie.js') }}"></script>
<script>
    var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
        showLeftPush = document.getElementById( 'showLeftPush' ),
        body = document.body;

    showLeftPush.onclick = function() {
        classie.toggle( this, 'active' );
        classie.toggle( body, 'cbp-spmenu-push-toright' );
        classie.toggle( menuLeft, 'cbp-spmenu-open' );
        disableOther( 'showLeftPush' );
    };


    function disableOther( button ) {
        if( button !== 'showLeftPush' ) {
            classie.toggle( showLeftPush, 'disabled' );
        }
    }
</script>
<!-- Bootstrap Core JavaScript -->

<script type="text/javascript" src="{{ asset('js/jsAdmin/bootstrap.min.js') }}"></script>
<!--scrolling js-->
<script src="{{ asset('js/jsAdmin/jquery.nicescroll.js') }}"></script>
<script src="{{ asset('js/jsAdmin/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('js/jsAdmin/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/jsAdmin/custom.js') }}"></script>
    <script src="{{ asset('js/jsAdmin/modernizr.custom.js') }}"></script>
<!--//scrolling js-->

@yield('charts')
<!-- //Register -->
</body>
</html>