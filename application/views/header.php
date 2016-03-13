<!DOCTYPE html>
<!-- This site was created in Webflow. http://www.webflow.com-->
<!-- Last Published: Sun Mar 13 2016 05:37:47 GMT+0000 (UTC) -->
<html data-wf-site="5634ecbff1efd346405c7d64" data-wf-page="56e4d61fa6ebff347a3c0276">
<head>
	<meta charset="utf-8">
	<title>VICTORIA</title>
	<base href="/HackVictoria/" />
	<meta property="og:title" content="singleprofile">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="generator" content="Webflow">
	<link rel="stylesheet" type="text/css" href="public/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="public/css/webflow.css">
	<link rel="stylesheet" type="text/css" href="public/css/testwebsitetest1.webflow.css">
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
	<script>
		WebFont.load({
			google: {
				families: ["Exo:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic","Roboto:300,regular,500","Roboto Condensed:300,regular,700","Roboto Slab:300,regular,700","Arbutus Slab:regular"]
			}
		});
	</script>
	<script type="text/javascript" src="public/js/modernizr.js"></script>
	<link rel="shortcut icon" type="image/x-icon" href="public/images/New icon.ico">
	<link rel="apple-touch-icon" href="public/images/metric-webclip.png">
</head>
<body>
	<div data-collapse="medium" data-animation="default" data-duration="400" data-contain="1" class="w-nav navigation">
		<div class="w-container">
			<a href="./" class="w-nav-brand brand-link">
				<div class="logo-text">VICTORIA</div>
			</a>
			<nav role="navigation" class="w-nav-menu nav-menu">
				<a href="./" class="w-nav-link nav-link">Home</a>
				<a href="profiles" class="w-nav-link nav-link">Profiles</a>
				<a href="#" class="w-nav-link nav-link">Contact us</a>
				<?php if($logged) { ?>
				<div class="personal">
					<div class="profile-pic"><img width="45" src="public/images/facebook-teerasej-profile-ball-circle.png">
					</div>
					<div data-delay="0" class="w-dropdown drop-down">
						<div class="w-dropdown-toggle test2">
							<div class="person-name">Smith J. William</div>
							<div class="w-icon-dropdown-toggle arrow"></div>
						</div>
						<nav class="w-dropdown-list list"><a href="http://manageprofile.php" class="w-dropdown-link indi-list">Manage Profile</a><a href="http://logout.php" class="w-dropdown-link indi-list">Logout</a>
						</nav>
					</div>
				</div>
				<?php } else { ?>
				<a href="sign-in" class="w-nav-link nav-link">Sign In</a>
				<a href="sign-up" class="w-nav-link nav-link">Sign Up</a>
				<?php } ?>
			</nav>
			<div class="w-nav-button nav-link menu">
				<div class="w-icon-nav-menu"></div>
			</div>
		</div>
	</div>