<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/font-awesome.min.css">
	<!-- Animation -->
	<link rel="stylesheet" href="plugins/animate.css">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="plugins/prettyPhoto.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="plugins/owl/owl.carousel.css">
	<link rel="stylesheet" href="plugins/owl/owl.theme.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/flex-slider/flexslider.css">
	<!-- Flexslider -->
	<link rel="stylesheet" href="plugins/cd-hero/cd-hero.css">
	<!-- Style Swicther -->
	<link id="style-switch" href="css/presets/preset3.css" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="img/favicon/favicon-32x32.png" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/favicon-144x144.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/favicon-72x72.png">
	<link rel="apple-touch-icon-precomposed" href="img/favicon/favicon-54x54.png">

</head>

<body>

	<!-- Style switcher start -->
	<!-- <div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
	</div> -->
	<!-- Style switcher end -->

	<div class="body-inner">

<!-- Header start -->
<?php require('header.php'); ?>
<!--/ Header end -->

<div id="banner-area">
	<img src="images/banner/img1.png" alt="">
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>About Us</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="home.php">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">About Us</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">

		<!-- Company Profile -->
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-suitcase"></i></span>
				<h2 class="title classic">Company Profile</h2>
			</div>
		</div><!-- Title row end -->

		<div class="row landing-tab">
			<div class="col-md-3 col-sm-5">
				<div class="nav flex-column nav-pills border-right" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					<a class="animated fadeIn nav-link py-4 active d-flex align-items-center" data-toggle="pill" href="#tab_1"
						role="tab" aria-selected="true">
						<i class="fa fa-info-circle mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">Who Are We</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_2" role="tab"
						aria-selected="true">
						<i class="fa fa-briefcase mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">OUR COMPANY</span>
					</a>
					<a class="animated fadeIn nav-link py-4 d-flex align-items-center" data-toggle="pill" href="#tab_3" role="tab"
						aria-selected="true">
						<i class="fa fa-android mr-4"></i>
						<span class="h4 mb-0 font-weight-bold">What We Do</span>
					</a> 
				</div>
			</div>
			<div class="col-md-9 col-sm-7">
				<div class="tab-content" id="v-pills-tabContent">
					<div class="tab-pane pl-sm-5 fade show active animated fadeInLeft" id="tab_1" role="tabpanel">
						<img src="./images/pages/linn1.png" class="img-fluid" style="width: 100px;height: 100px">
						<!-- <i class="fa fa-trophy icon-xl text-primary mb-4"></i> -->
						<h3>We Are Awwared Winning Company</h3>
						<p>Over the year we have lots of experience in our field.</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_2" role="tabpanel">
						<img src="./images/pages/linn1.png" class="img-fluid" style="width: 100px;height: 100px">
						<h3>We Have Worldwide Business</h3>
						<p>Over 15th year anniversary celebration</p>
					</div>
					<div class="tab-pane pl-sm-5 fade animated fadeInLeft" id="tab_3" role="tabpanel"> 
						<i class="fa fa-android icon-xl text-primary mb-4"></i>
						<h3>We Service IT Product</h3>
						<p>Over the year we have lots of experience in our field. </p>
					</div>
			
				</div>
			</div>
		</div>
		<!--/ Content row end -->
	</div>

</section>
	<!-- Footer start -->
	<?php require('footer.php'); ?>
	
	<!-- Footer end -->
</body>

</html>