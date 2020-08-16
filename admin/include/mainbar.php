<!doctype html>
<html lang="en">

<head>
<title>Admin Pannel | AIFL - Assisi Institute of Foregin Langagues</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/main.css">
<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
<link rel="stylesheet" href="assets/css/demo.css">
<!-- GOOGLE FONTS -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
<!-- ICONS -->
<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<!-- //PHP CODE TO DISPLAY -->



<body>
<!-- WRAPPER -->
<div id="wrapper">
	<!-- NAVBAR -->
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="brand">
			<a href="index.php"><img src="assets/img/aifl.png" alt="Klorofil Logo" class="img-responsive logo"></a>
		</div>
		<div class="container-fluid">
			<div class="navbar-btn">
				<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
			</div>
			
			
			<div id="navbar-menu">
				<ul class="nav navbar-nav navbar-right">
					<!-- <li class="dropdown">
						<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
							<i class="lnr lnr-alarm"></i>
							<span class="badge bg-danger">5</span>
						</a>
						<ul class="dropdown-menu notifications">
							<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
							<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
							<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
							<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
							<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
							<li><a href="#" class="more">See all notifications</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="#">Basic Use</a></li>
							<li><a href="#">Working With Data</a></li>
							<li><a href="#">Security</a></li>
							<li><a href="#">Troubleshooting</a></li>
						</ul>
					</li> -->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/img/user.png" class="img-circle" alt="Avatar"> <span>AiFL Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
						<ul class="dropdown-menu">
							<li><a href="profile.php"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
							<!-- <li><a href="profile.php"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li> -->
							<!-- <li><a href="profile.php"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li> -->
							<li><a href="#logout"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
						</ul>
					</li>
					<!-- <li>
						<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
					</li> -->
				</ul>
			</div>
		</div>
	</nav>
	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
	<div id="sidebar-nav" class="sidebar">
		<div class="sidebar-scroll">
			<nav>
				<ul class="nav">
					<li><a href="index.php" class="<?php echo $dash; ?>"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
					

					<li>
						<a href="#gallery" data-toggle="collapse" class="<?php echo $gall; ?>"><i class="fa fa-folder"></i> <span>Gallery</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
						<div id="gallery" class="collapse <?php echo $coll; ?>">
							<ul class="nav">
								<li><a href="youtube.php" class=""><i class="fa fa-youtube"></i> <span>Youtube</span></a></li>
								<li><a href="gallery.php" class=""><i class="fa fa-file-image-o"></i> <span>Image</span></a></li>
							</ul>
						</div>
					</li>

					<li><a href="news.php" class="<?php echo $news; ?>"><i class="lnr lnr-bubble"></i> <span>News</span></a></li>
					
					<li>
						<a href="#updates" data-toggle="collapse" class="collapsed <?php echo $form; ?>"><i class="fa fa-address-card"></i> <span>Form Updates</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
						<div id="updates" class="collapse <?php echo $formcoll; ?>">
							<ul class="nav">
								<li><a href="newsletter.php" class="">NewsLetter Subscription</a></li>
								<li><a href="studreg.php" class="">Registered</a></li>
								<li><a href="contact.php" class="">Contact</a></li>
							</ul>
						</div>
					</li>
					<li><a href="profile.php" class="<?php echo $prof; ?>"><i class="fa fa-user-o "></i> <span>Profile</span></a></li>

					<!-- <li><a href="tables.html" class=""><i class="lnr lnr-dice"></i> <span>Security</span></a></li> -->
					
				</ul>
			</nav>
		</div>
	</div>
	<!-- END LEFT SIDEBAR -->
	