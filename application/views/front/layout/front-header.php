<?php
$currentUrl = $_SERVER['REQUEST_URI'];
$page = basename($currentUrl);
// dd($_SESSION);
?>

<body>

	<!-- ======= Top Bar ======= -->
	<section id="topbar" class="d-flex align-items-center">
		<div class="container d-flex justify-content-center justify-content-md-between">
			<div class="contact-info d-flex align-items-center">
				<i class="bi bi-envelope d-flex align-items-center"><a href="mailto:mail@intactconsultancy.com">mail@intactconsultancy.com</a></i>
				<i class="bi bi-phone d-flex align-items-center ms-4"><span>079 – 26644253</span></i>
			</div>
			<div class="social-links d-none d-md-flex align-items-center">
				<a href="https://www.facebook.com/IntactConsultancyServices" class="facebook"><i class="bi bi-facebook"></i></a>
				<a href="https://www.linkedin.com/company/intact-consultancy-services/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
				<a href="#" class="linkedin"><i class="bi bi-skype"></i></i></a>
			</div>
		</div>
	</section>

	<!-- ======= Header ======= -->
	<header id="header" class="d-flex align-items-center">
		<div class="container d-flex align-items-center justify-content-between">

			<h1 class="logo"><a href=""><span><img src="assets/img/main_logo.png" alt=""> </span></a></h1>
			<!-- Uncomment below if you prefer to use an image logo -->
			<a href="<?= base_url('/') ?>" class="logo"></a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto <?php echo (($page == "intect") ? "active" : "") ?>" href="<?= base_url('/') ?>">Home</a></li>
					<li class="dropdown"><a href="#" class="<?php echo (($page == 'about-us' || $page == "ourteam" || $page == "ourclient") ? "active" : "")  ?> "><span>About Us</span> <i class=" bi bi-chevron-down"></i></a>
						<ul>
							<li class="dropdown"><a href="about-us" class="<?php echo (($page == 'about-us') ? "active" : "")  ?> "> <span>Company Profile</span></i></a></li>
							<li><a class="nav-link scrollto  <?php echo (($page == 'ourteam') ? "active" : "")  ?>" href="ourteam">Our Team</a></li>
							<li><a class="nav-link scrollto <?php echo (($page == 'ourclient') ? "active" : "")  ?>" href="ourclient">Our Clients</a></li>
						</ul>
					<li class="dropdown"><a href="#" class="<?php echo (($page == 'consultation-audit' || $page == "thefactoriesact1948" || $page == "employees-provident-funds-and-miscellaneous-provisions-act" || $page == "employees-state-insuranceact" || $page == "payrollservices" || $page == "gujarat-labour-welfare-act-regulation" || $page == "building-and-other-construction" || $page == "contractlabour") ? "active" : "")  ?> "><span>Services</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li class="dropdown"><a href="consultation-audit"><span> Consulting, Advisory &
										Counselling Area</span></i></a></li>
							<li><a class="nav-link scrollto" href="thefactoriesact1948">The Factories Act, 1948</a>
							</li>
							<li><a class="nav-link scrollto" href="employees-provident-funds-and-miscellaneous-provisions-act">Employees'
									Provident
									Funds and Miscellaneous Provisions Act, 1952</a></li>
							<li><a class="nav-link scrollto" href="employees-state-insuranceact"> Employees' State
									Insurance Act, 1948</a></li>
							<li><a class="nav-link scrollto" href="payrollservices">Payroll Services</a></li>
							<li><a class="nav-link scrollto" href="gujarat-labour-welfare-act-regulation">Gujarat
									Labour Welfare Act Regulation</a></li>
							<li><a class="nav-link scrollto" href="building-and-other-construction">Building and Other
									Construction Workers Act, 1996</a></li>
							<li><a class="nav-link scrollto" href="contractlabour">Contract Labour (Regulation &
									Abolition) Act, 1970</a></li>
						</ul>
					<li><a class="nav-link scrollto <?php echo (($page == 'notification-updates') ? "active" : "")  ?> " href="notification-updates">Notifications & Updates</a></li>
					<li><a class="nav-link scrollto <?php echo (($page == 'information') ? "active" : "")  ?>" href="information">Information</a></li>
					<li><a class="nav-link scrollto <?php echo (($page == 'download') ? "active" : "")  ?>" href="download">Downloads</a></li>
					<li><a class="nav-link scrollto <?php echo (($page == 'inquiry') ? "active" : "")  ?>" href="inquiry">Inquiry</a></li>
					<li><a class="nav-link scrollto <?php echo (($page == 'contect-us') ? "active" : "")  ?>" href="contect-us">Contact Us</a></li>
					<i class="bi bi-list mobile-nav-toggle"></i>
			</nav>
			<!-- .navbar -->

		</div>
	</header>
	<!-- End Header -->
