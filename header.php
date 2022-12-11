<?php 
/**
 * Changing the content of title of each page dynamically
 */

 $title = ""; 

 $path = $_SERVER['PHP_SELF'];
 $page = basename($path);

 switch ("$page") {
	default:
        $title = "Default title goes here";
   case 'index.php':
     $title = 'Bengal Gearless Knights'; 
     break;
  case 'know-about-bgk.php':
     $title = 'About Us';
     break;
  case 'mission.php':
     $title = 'Mission & Vision';
     break;
  case 'team.php':
     $title = 'Our Team Members';
     break;
  case 'sponsors.php':
     $title = 'Sponsors';
     break;
  case 'riding-guides.php':
     $title = 'Riding Guides';
     break;
  case 'feedback-complaints.php':
	 $title = 'Feedback & Complaints';
	 break; 
  case 'policy.php':
	 $title = 'Terms & Conditions';
	 break; 
  case 'contact.php':
	 $title = 'Our Contact Details';
	 break;  
 }

 $meta_description = 'BGK';

 
?>

<!DOCTYPE html>
<html lang="en">
	
<head>
		<meta charset="UTF-8"/>
		<meta name="description" content="description"/>
		<meta name="keywords" content="keywords"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge"/>
		<title><?= $title; ?> || <?= $meta_description; ?></title>
		<!-- styles-->
		<link rel="stylesheet" href="css/styles.min.css"/>
		<!-- Custom Style Sheet -->
		<link rel="stylesheet" href="css/app.css"/>
		<!-- web-font loader-->
		<script>
			WebFontConfig = {

				google: {

					families: ['Nunito+Sans:300,400,500,700,900', 'Quicksand:300,400,500,700'],

				}

			}

			function font() {

				var wf = document.createElement('script')

				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js'
				wf.type = 'text/javascript'
				wf.async = 'true'

				var s = document.getElementsByTagName('script')[0]

				s.parentNode.insertBefore(wf, s)

			}

			font()
		</script>
	</head>
	<body>
		<div class="page-wrapper">
			<!-- Mobile menu start-->
			<div class="menu-dropdown">
				<div class="menu-dropdown__inner" data-value="start">
					<div class="screen screen--start">
						<div class="screen__item screen--trigger item--active" data-category="home">
							<span>Home</span>
						</div>
						<div class="screen__item screen--trigger" data-category="about-us-mobile"><span>About Us</span><span>
							<svg class="icon">
								<use xlink:href="#chevron"></use>
							</svg></span></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Our Shop</a></div>
						<div class="screen__item screen--trigger" data-category="mobile-rides-menu"><span>Rides</span><span>
							<svg class="icon">
								<use xlink:href="#chevron"></use>
							</svg></span></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Our Gallery</a></div>
						<div class="screen__item screen--trigger">
							<span>Blogs</span>
						</div>
						<div class="screen__item screen--trigger">
							<span>Contact Us</span>
						</div>
						<ul class="screen__socials">
							<li><a class="item--facebook" href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a class="item--twitter" href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a class="item--youtube" href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<li><a class="item--instagram" href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul><a class="screen__button" href="#">Join BGK Now</a>
					</div>
				</div>
				<div class="menu-dropdown__inner" data-value="about-us-mobile">
					<div class="screen screen--sub">
						<div class="screen__heading">
							<h6 class="screen__back">
								<svg class="icon">
									<use xlink:href="#chevron-left"></use>
								</svg> <span>About Us</span>
							</h6>
						</div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Know About BGK</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Team Members</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Riding Guides</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Our Policy</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Our Mission</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Sponsors</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Feedback & Complaints</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Contact Us</a></div>
					</div>
				</div>
				<div class="menu-dropdown__inner" data-value="mobile-rides-menu">
					<div class="screen screen--sub">
						<div class="screen__heading">
							<h6 class="screen__back">
								<svg class="icon">
									<use xlink:href="#chevron-left"></use>
								</svg> <span>Rides of BGK</span>
							</h6>
						</div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Upcoming Rides</a></div>
						<div class="screen__item"><a class="screen__link" href="javascript:void(0);">Past Rides</a></div>
					</div>
				</div>
			</div>
			<!-- Mobile Menu end-->
			<!-- header start-->
			<header class="header shop-header header-f3">
				<div class="header__lower">
					<div class="row">
						<div class="col-12 d-flex align-items-center justify-content-between">
							<div class="header__lower-inner">
								<div class="header__phones d-none d-xl-block">Phone: <a href="tel:+31859644725">+31 85 964 47 25</a> <a href="tel:+31657926311">+31 65 792 63 11</a></div>
							</div>
							<div class="header__lower-inner d-none d-xl-block">
								<ul class="header__socials">
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="header__lower-inner">
								<ul class="lower-menu">
									<li class="lower-menu__item"><a class="lower-menu__link" href="#">Membership</a></li>
									<li class="lower-menu__item"><a class="lower-menu__link" href="#">Upcoming Rides</a></li>
									<li class="lower-menu__item"><a class="lower-menu__link" href="#">Past Rides</a></li>
									<li class="lower-menu__item"><a class="lower-menu__link" href="#">Events</a></li>
									<li class="lower-menu__item"><a class="lower-menu__link" href="#">Calendar</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="header__top">
					<div class="row align-items-center">
						<div class="col-6 col-lg-3"><a class="logo" href="index.php"><img class="logo__img" src="img/logo/bgk_logo_2.png" alt="logo"/></a></div>
						<div class="col-6 col-lg-9 d-flex justify-content-end align-items-center">
							<!-- main menu start-->
							<ul class="main-menu">
								<li class="main-menu__item main-menu__item--active"><a class="main-menu__link" href="index.php"><span>Home</span></a>
								</li>
								<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>About Us</span></a>
									<!-- sub menu start-->
									<ul class="main-menu__sub-list sub-list--style-2">
										<li><a href="know-about-bgk.php"><span>Know About BGK</span></a></li>
										<li><a href="mission.php"><span>Our Mission</span></a></li>
										<li><a href="team.php"><span>Team Members</span></a></li>
										<li><a href="sponsors.php"><span>Our Sponsors</span></a></li>
										<li><a href="riding-guides.php"><span>Riding Guides</span></a></li>
										<li><a href="feedback-complaints.php"><span>Feedback & Complaints</span></a></li>
										<li><a href="policy.php"><span>Our Policy</span></a></li>
										<li><a href="contact.php"><span>Contact Us</span></a></li>
										
									</ul>
									<!-- sub menu end-->
								</li>
								<li class="main-menu__item"><a class="main-menu__link" href="javascript:void(0);"><span>Our Shop</span></a></li>
								<li class="main-menu__item main-menu__item--has-child"><a class="main-menu__link" href="javascript:void(0);"><span>Rides</span></a>
									<ul class="main-menu__sub-list sub-list--style-2">
										<li><a href="javascript:void(0);"><span>Upcoming Rides</span></a></li>
										<li><a href="javascript:void(0);"><span>Past Rides</span></a></li>
									</ul>
								</li>
								<li class="main-menu__item"><a class="main-menu__link" href="javascript:void(0);"><span>Our Gallery</span></a></li>
								<li class="main-menu__item"><a class="main-menu__link" href="javascript:void(0);"><span>Blogs</span></a></li>
								<li class="main-menu__item"><a class="main-menu__link" href="javascript:void(0);"><span>Contact Us</span></a></li>

							</ul>
							<!-- main menu end--><a class="header__button" href="#">JOIN BGK NOW</a>
							<!-- menu-trigger start-->
							<div class="hamburger">
								<div class="hamburger-box">
									<div class="hamburger-inner"></div>
								</div>
							</div>
							<!-- menu-trigger end-->
						</div>
					</div>
				</div>
			</header>