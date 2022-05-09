<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

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

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="style.css" type="text/css" />
	<link rel="stylesheet" href="css/dark.css" type="text/css" />
	<link rel="stylesheet" href="css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="css/animate.css" type="text/css" />
	<!-- <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" /> -->

	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<!--  Specific Stylesheet -->
	<link rel="stylesheet" href="css/colors.php?color=1ABC9C" type="text/css" /> <!-- Cleaner Theme Color 1ABC9C - 335EEE-->
	<link rel="stylesheet" href="css/fonts.css" type="text/css" /> <!-- Cleaner Theme Font -->
	<link rel="stylesheet" href="cleaner.css" type="text/css" /> <!-- Cleaner Theme Custom CSS -->
	<!-- / -->

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/layers.css">
	<link rel="stylesheet" type="text/css" href="include/rs-plugin/css/navigation.css">

	<!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->

	

	<!-- ADD-ONS CSS FILES -->
	<!-- <link rel="stylesheet" type="text/css" href="include/rs-plugin/css/addons/revolution.addon.particles.css"> -->

    <!-- Responsive CSS FILES -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<!-- Responsive CSS FILES -->
	<link rel="stylesheet" type="text/css" href="css/extra.css">

	<style>
		
	</style>
	



	
 <!-- Web Credits: TechnoOutsource.com -->
 
 </head>

<body class="stretched">





	<!-- Document Wrapper -->
	<div id="wrapper" class="clearfix">



		<!-- Modal -->
		<!-- <?php include 'modal.html';?> -->
		<!--# Modal End -->

		<!-- Header -->
         <?php include 'header.html';?>
		<!-- #header end -->

		<!-- Slider -->
		<?php include 'slider.html';?>
		<!-- Slider -->


		<!-- Start :: Content		 -->
        <?php include 'start.html';?>
		<!-- End :: Content -->

		<!-- Footer -->
		<?php include 'footer.html';?>
		<!-- #footer end -->

	</div>
	<!-- #wrapper end -->

	<!-- Messenger Button -->
	<?php include 'messenger_button.html';?>
	<!-- Messenger Button end -->

	<!-- Go To Top -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts -->
	<script src="js/jquery.js"></script>
	<!-- <script src="js/plugins.min.js"></script> -->

	<!-- Footer Scripts -->
	<script src="js/functions.js"></script>

    <!-- sweetalert  -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<!-- unveil -->
	<script src="js/jquery.unveil.js"></script>

	

	<!-- ADD-ONS JS FILES -->

	<script>
		
		// Bootstrap  Slider function
        $(document).ready(function(){
            $("#myCarousel").carousel(
			);	
        });

		$(document).ready(function() {
            if ($.cookie('pop') == null) {
                $('#exampleModal').modal('show');
                $.cookie('pop', '1');
            }
        });

		/* 1. Proloder */
		$(window).on('load', function() {
            $('#preloader-active').fadeOut('slow');
            $('#myCarousel').addClass('active_carousel');
        });

		// myPostCarousel
		$(window).on('load', function() {
            $('#myPostCarousel').addClass('active_carousel');
        });

        // unveil function
	    $(document).ready(function() {
            $("img").unveil();
        });

	</script>


</body>
</html>