<!doctype html>
<html class="no-js">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>SUPIRSIAGA</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Place favicon.ico and apple-touch-icon(s) in the root directory -->
		<link rel="stylesheet" href="{{asset('assets/vendor/foundation-icon-fonts/foundation-icons.css')}}">
		<link rel="stylesheet" href="{{asset('assets/vendor/onepage-scroll/onepage-scroll.css')}}">
		<!-- <link rel="stylesheet" href="{{asset('assets/style-font.css')}}"> -->
		<link rel="stylesheet" href="{{asset('assets/style.min.css')}}">
		

		<!--<link rel="stylesheet" href="{{asset('assets/vendor/jquery-ui/themes/base/jquery.ui.all.css')}}">-->

		<!-- Put new css under this css section. -->
		@yield('css')

		<script src="{{asset('assets/vendor/modernizr/modernizr.js')}}"></script>
	</head>
	<body>
		@yield('body')
		<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script> -->
		<script type="text/javascript" src="{{asset('assets/vendor/jquery/dist/jquery.min.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/jquery-ui/jquery-ui.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/onepage-scroll/jquery.onepage-scroll.min.js')}}"></script>
		<!--<script type="text/javascript" src="{{asset('assets/vendor/underscore/underscore.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/fastclick/lib/fastclick.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/jquery-placeholder/jquery.placeholder.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
		<script type="text/javascript" src="{{asset('assets/vendor/Lodash/dist/Lodash.min.js')}}"></script>-->
		<script type="text/javascript" src="{{asset('assets/vendor/foundation/js/foundation.js')}}"></script>
		
		<!-- Put New Javascript under @section('js') -->
		@yield('js')
		<script>
			$(document).foundation();
		</script>
		<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
		<!-- <script>
			(function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
			function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
			e=o.createElement(i);r=o.getElementsByTagName(i)[0];
			e.src='//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
			ga('create','UA-XXXXX-X');ga('send','pageview');
		</script> -->
	</body>
</html>