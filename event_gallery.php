<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<!-- Document Title -->
	<title>ShynXL - Dream Again and Shine</title>
	<meta name="description" content="ShynXL">
	<meta name="keywords" content="ShynXL">
	<meta http-equiv="Content-Language" content="en-gb">
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
	<meta name="author" content="TechnoOutsource.com"> 
	<meta name="robots" content="all,index,follow"> 
	<meta name="distribution" content="Global"> 
	<meta name="page-type" content="Rich Internet Media" />
	<meta name="rating" content="General" />
	<meta name="audience" content="All" />
	<LINK href="favicon.ico" rel="shortcut icon">


	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<link rel="stylesheet" href="css/magnific-popup.css" type="text/css" />

	<link rel="stylesheet" href="css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />


<style>
.page-load-status.hovering-load-status {
	position: fixed;
	width: 100px;
	height: 100px;
	top: 50%;
	left: 50%;
	margin-top: -50px;
	margin-left: -50px;
	background-color: rgba(0,0,0,0.7);
	display: none;
}

.page-load-status.hovering-load-status .css3-spinner-ball-pulse-sync > div { background-color: #FFF; }

.content-wrap{padding: 0px;}


</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		
	
        <!-- Header -->
        <?php include 'header.html';?>
		<!-- #header end -->

		<!-- Start :: Content		 -->
        <?php include 'event_gallery.html';?>
		<!-- End :: Content -->

		<!-- Footer -->
		<?php include 'footer.html';?>
		<!-- #footer end -->
		

		

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="js/jquery.js"></script>
	<script src="js/plugins.min.js"></script>
	<script src="js/plugins.infinitescroll.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="js/functions.js"></script>

	<!-- unveil -->
	<script src="js/jquery.unveil.js"></script>

	<!-- Portfolio Script
	============================================= -->
	<script>

		jQuery(window).on( 'load', function(){

			var $container = $('.grid-container');

			$container.infiniteScroll({
				path: '.load-next-portfolio',
				button: '.load-next-portfolio',
				scrollThreshold: false,
				history: false,
				status: '.page-load-status'
			});

			$container.on( 'load.infiniteScroll', function( event, response, path ) {
				var $items = $( response ).find('.portfolio-item');
				// append items after images loaded
				$items.imagesLoaded( function() {
					$container.append( $items );
					$container.isotope( 'insert', $items );
					setTimeout( function(){
						$container.isotope('layout');
						SEMICOLON.widget.loadFlexSlider();
						SEMICOLON.widget.hoverAnimation();
					}, 1000 );
				});
			});

		});

		// unveil function
	    $(document).ready(function() {
            $("img").unveil();
        });

	</script>

</body>
</html>