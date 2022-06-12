<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Pathways</title>
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
<link rel="apple-touch-icon" sizes="57x57" href="{{asset('assets/favicon/apple-icon-57x57.png')}}">
<link rel="apple-touch-icon" sizes="60x60" href="{{asset('assets/favicon/apple-icon-60x60.png')}}">
<link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/favicon/apple-icon-72x72.png')}}">
<link rel="apple-touch-icon" sizes="76x76" href="{{asset('assets/favicon/apple-icon-76x76.png')}}">
<link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/favicon/apple-icon-114x114.png')}}">
<link rel="apple-touch-icon" sizes="120x120" href="{{asset('assets/favicon/apple-icon-120x120.png')}}">
<link rel="apple-touch-icon" sizes="144x144" href="{{asset('assets/favicon/apple-icon-144x144.png')}}">
<link rel="apple-touch-icon" sizes="152x152" href="{{asset('assets/favicon/apple-icon-152x152.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/favicon/apple-icon-180x180.png')}}">
<link rel="icon" type="image/png" sizes="192x192"  href="{{asset('assets/favicon/android-icon-192x192.png')}}">
<link rel="icon" type="image/png" sizes="32x32" href="{{asset('assets/favicon/favicon-32x32.png')}}">
<link rel="icon" type="image/png" sizes="96x96" href="{{asset('assets/favicon/favicon-96x96.png')}}">
<link rel="icon" type="image/png" sizes="16x16" href="{{asset('assets/favicon/favicon-16x16.png')}}">
<link rel="manifest" href="{{asset('assets/favicon/manifest.json')}}">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{asset('assets/favicon/ms-icon-144x144.png')}}">
<meta name="theme-color" content="#ffffff">
<!--<link href="css/jpreloader.css" rel="stylesheet" type="text/css" media="screen"/>-->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" href="{{asset('assets/fancybox-master/jquery.fancybox.min.css')}}" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" type="text/css" media="all"/>
<!--<link href="css/mouse.css" rel="stylesheet" type="text/css" media="all" />-->
<link href="{{asset('assets/css/webslidemenu.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/pathways.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
<header>
	<div class="container clearfix">
		<div class="row">
			<div class="col-12 d-flex justify-content-between align-items-center">
				<a href="{{route('ui.home')}}" class="pathways"><img src="{{asset('assets/img/pathways.svg')}}" alt="Pathways"></a>
				<div class="header-right d-flex align-items-center">
					<div class="navigation">
						<div class="wsmenucontainer clearfix">
							<div class="overlapblackbg"></div>
							<div class="wsmobileheader clearfix">
								<a id="wsnavtoggle" class="animated-arrow"><span></span></a>
							</div>
							<div class="wsmain">
								<nav class="wsmenu clearfix">
									<ul class="mobile-sub wsmenu-list">
										<li><a href="javascript:void(0);" class="link">Become a Node</a></li>
										<li><a href="{{asset('assets/explore-collection.html')}}" class="link">Explore</a></li>
										<li><a href="{{asset('assets/ranking.html')}}" class="link">Ranking</a></li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
					<div class="user-account">
						<ul class="user-account-ul">
							<li><a href="{{route('ui.nft.create')}}" class="button">Create</a></li>
							<li class="wallet"><a href="javascript:void(0);"><img src="{{asset('assets/img/wallet.svg')}}" alt="wallet"></a></li>
							<li class="notification"><a href="javascript:void(0);" class="dropdown-link"><img src="{{asset('assets/img/notification.svg')}}" alt="notification"><span class="counts position-absolute">3</span></a>
								<div class="dropdown position-absolute">
									<div class="dropdown-sub notification-down">
										<div class="row">
											<div class="col-12">
												<div class="notification-img"><img src="{{asset('assets/img/notification-1.webp')}}" alt="notification"></div>
												<div class="notification-dtl">
													<p>Lorem Ipsum is simply dummy text</p>
												</div>
											</div>
											<div class="col-12">
												<div class="notification-img"><img src="{{asset('assets/img/notification-2.webp')}}" alt="notification"></div>
												<div class="notification-dtl">
													<p>Lorem Ipsum is simply dummy text</p>
												</div>
											</div>
											<div class="col-12">
												<div class="notification-img"><img src="{{asset('assets/img/notification-3.webp')}}" alt="notification"></div>
												<div class="notification-dtl">
													<p>Lorem Ipsum is simply dummy text</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li class="porfile"><a href="javascript:void(0);"><img src="{{asset('assets/img/porfile.svg')}}" alt="profile_pic"></a></li>
							<li class="search"><a href="javascript:void(0);" class="search-link"><img src="{{asset('assets/img/search_icon.svg')}}" alt="search"></a>

							</li>
						</ul>
					</div>
				</div>
				<div class="search-bar">
					<div class="search-area">
						<div class="search-area-div"><input type="text" class="form-control" placeholder="Search Your Keywords..."></div>
					</div>
				</div>
				<div class="search-bar-base">
					<div class="search-term">
						<p>Popular Search Terms</p>
						<ul>
							<li><a href="javascript:void(0);">Air Force 1</a></li>
							<li><a href="javascript:void(0);">Jordan</a></li>
							<li><a href="javascript:void(0);">Air Max</a></li>
							<li><a href="javascript:void(0);">Blazer</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<a href="javascript:void(0);" class="close-btn position-absolute"><span class="pre-grey-circle"><svg fill="#111" height="30px" width="30px" viewBox="0 0 24 24"><path d="M15.04 12L24 2.96 21.04 0 12 8.96 3.04 0 0 2.96 9.04 12 0 20.96 3.04 24 12 14.96 21.04 24 24 20.96z"></path></svg></span></a>
	<div class="search-overlay"></div>
</header>
@yield('content')
<footer>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="footer-box">
					<div class="pathways-foot"><img src="{{asset('assets/img/pathways.svg')}}" alt="pathways"></div>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="foot-links-box">
							<h4>My Account</h4>
							<ul>
								<li><a href="javascript:void(0);">Profile</a></li>
								<li><a href="javascript:void(0);">Favorites</a></li>
								<li><a href="javascript:void(0);">My Collections</a></li>
								<li><a href="javascript:void(0);">Settings</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="foot-links-box">
							<h4>Resources</h4>
							<ul>
								<li><a href="javascript:void(0);">Documentation</a></li>
								<li><a href="javascript:void(0);">eBooks</a></li>
								<li><a href="javascript:void(0);">Podcast</a></li>
								<li><a href="javascript:void(0);">Resources</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-6">
						<div class="foot-links-box">
							<h4>About  Us</h4>
							<ul>
								<li><a href="javascript:void(0);">Our Company</a></li>
								<li><a href="javascript:void(0);">Careers</a></li>
								<li><a href="javascript:void(0);">Contact Us</a></li>
								<li><a href="javascript:void(0);">News</a></li>
							</ul>
						</div>
					</div>


				</div>
			</div>
		</div>
	</div>
</footer>
<section class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-12 d-flex justify-content-between">
				<p>Copyright 2022 Pathways All Right Reserved</p>
				<ul class="social-media-foot">
					<li><a href="javascript:void(0);" class="instagram"><img src="{{asset('assets/img/instagram.svg')}}" alt="instagram"></a></li>
					<li><a href="javascript:void(0);" class="facebook"><img src="{{asset('assets/img/facebook.svg')}}" alt="facebook"></a></li>
					<li><a href="javascript:void(0);" class="twitter"><img src="{{asset('assets/img/twitter.svg')}}" alt="twitter"></a></li>
					<li><a href="javascript:void(0);" class="youtube"><img src="{{asset('assets/img/youtube.svg')}}" alt="youtube"></a></li>
				</ul>
				<p>Designed By <a href="https://www.design-master.com/" target="_blank" class="designed-link">Design Master</a></p>
			</div>
		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-migrate-1.4.1.min.js"></script>
<!--<script type="text/javascript" src="js/wow.min.js"></script>-->
<script type="text/javascript" src="{{asset('assets/js/webslidemenu.js')}}"></script>
<script src="{{asset('assets/fancybox-master/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('assets/fancybox-master/fancybox.js')}}"></script>
<!--start swiper-->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('assets/swiper/swiper.js')}}"></script>
<!--end swiper-->
<script src="{{asset('assets/js/lettering.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>
