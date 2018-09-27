<!DOCTYPE HTML>
<html>
<head>
    <title>Ultra Modern an Admin Panel Category Flat Bootstrap Responsive Website Template | Inbox :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/cssAdmin/bootstrap.css') }}" rel='stylesheet' type='text/css' />
    <!-- Custom CSS -->
    <link href="{{ asset('css/cssAdmin/style.css') }}" rel='stylesheet' type='text/css' />
    <!-- font CSS -->
    <link rel="icon" href="{{ asset('images/icons.png')}}" type="image/x-icon" >
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

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
                            <a href="{{route('admindash.index')}}"><i class="fas fa-tachometer-alt"></i><br>Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fas fa-users"></i><br>Users <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="{{route('admin.index')}}">View Users</a>
                                </li>
                            </ul>
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
                            <a href="{{route('adminFAQ.index')}}"><i class="fa fa-question-circle"></i><br>FAQs</a>
                        </li>
                        <li>
                            <a href="{{route('adminLogin.create')}}"><i class="fas fa-sign-out-alt"></i><br>LogOut</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="sticky-header header-section ">
        <div class="header-left">
            <!--logo -->
            <div class="logo">
                <a href="{{route('admindash.index')}}"><h1>Ultra Modern</h1></a>
            </div>


            <div class="clearfix"> </div>
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

        <p>&copy; 2016 Ultra Modern. All rights reserved | Design by <a href="">Soham ROy</a></p>
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



</script>
<!-- Bootstrap Core JavaScript -->

<script type="text/javascript" src="{{ asset('js/jsAdmin/bootstrap.min.js') }}"></script>
<!--scrolling js-->

    <script src="{{ asset('js/jsAdmin/metisMenu.min.js') }}"></script>
    <script src="{{ asset('js/jsAdmin/custom.js') }}"></script>

<!--//scrolling js-->

@yield('charts')
<!-- //Register -->
</body>
</html>