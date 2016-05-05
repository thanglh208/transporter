<html>
<head>
	<title>SNS | @yield('title')</title>
	<!-- Jquery -->
	<script src="https://code.jquery.com/jquery-2.2.3.min.js"></script>
 <!-- THEME COLOUR STYLE (BY DEFAULT GREEN COLOR,  YOU CAN REPLACE green.css to red.css , orange.css, blue.css ,grey-bk.css or black-bk.css)  -->
    <link id="mainCSS" href="{{Asset('public/assets/css/themes/green.css')}}" rel="stylesheet" />
	<!-- Jquery Validation -->
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.15.0/jquery.validate.min.js"></script>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- Custom style -->
	<link rel="stylesheet" href="{{Asset('public/assets/css/style.css')}}">

	<!-- FONT-AWESOME CORE STYLE  -->
    <link href="{{Asset('public/assets/css/font-awesome.css')}}" rel="stylesheet" />
    <!-- CORE CUSTOM STYLE  -->
    <link href="{{Asset('public/assets/css/custom.css')}}" rel="stylesheet" />
    
    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Signika&subset=latin,latin-ext' rel='stylesheet' type='text/css' />
    <!-- CSS FOR DATATABLES -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
    <!-- DataTables -->
    <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

</head>
<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{Asset('')}}">SNS</a>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                	<li><a><?php echo Auth::user()->realName;?></a></li>
                	<li><a href="{{Asset('orders')}}">ĐẶT ĐƠN</a></li>                      
                    <li><a href="{{Asset('history')}}">LỊCH SỬ GIAO DỊCH</a></li>                      
                    <li><a href="{{Asset('auth/logout')}}">LOG OUT</a></li>
                    <li><a href=""></a></li>
                @endif
                @if(Auth::guest())
                	<li><a href="#home-sec">HOME</a></li>
                    <li><a href="#contact-sec">LIÊN HỆ</a></li>
                    <li><a href="{{Asset('orders')}}">ĐẶT ĐƠN</a></li> 
                    <li><a href="{{Asset('register')}}">ĐĂNG KÝ</a></li>
                    <li><a href="{{Asset('auth/login')}}">ĐĂNG NHẬP</a></li>

                @endif
                </ul>s
            </div>

        </div>
    </div>

    <br>
    <br>
    <br>
	<div class="container">
		@yield('content')
	</div>
	<div>
	@yield('contact')
	</div>
	 <div id="footer">
        &copy 2016 SNS | All Rights Reserved.

    </div>
    <!-- /FOOTER SECTION END  -->
    <div class="move-me toup-div">
        <a href="#home-sec">
            <i class="fa fa-arrow-up "></i>
        </a>

    </div>
	<!-- JQUERY SCRIPTS FUCTIONS  -->
    <script src="{{Asset('public/assets/js/jquery-1.11.1.js')}}"></script>
    <!-- BOOTSTRAP SCRIPTS FUCTIONS  -->
    <script src="{{Asset('public/assets/js/bootstrap.js')}}"></script>
    <!-- SROLLING SCRIPTS   -->
    <script src="{{Asset('public/assets/js/jquery.easing.min.js')}}"></script>
    <!-- STYLE SWITCHER SCRIPTS   -->
    <script src="{{Asset('public/assets/js/style-switcher.js')}}"></script>
     <!-- ON SCROLL SCRIPTS   -->
    <script src="{{Asset('public/assets/js/scrollReveal.js')}}"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="{{Asset('public/assets/js/custom.js')}}"></script>
</body>
</html>