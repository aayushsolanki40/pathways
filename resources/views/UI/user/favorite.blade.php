@extends('UI.layout.app')
@section('content')
<section class="section banner-inner"><img src="img/notification-banner.webp" class="w-100" alt="notification"></section>
<section class="section position-relative">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="user-thumb position-relative">
					<div class="thumb-wrap"><div class="thumb-div"><img src="img/notification-1.webp" alt=""></div></div>
					<div class="user-title">Arcade Land</div>
					<a href="javascript:void(0);" class="edit-profile-btn"><img src="img/ediit.svg" alt="ediit"> Edit Profile</a>
				</div>
			</div>
			<div class="col-12 overflow-hidden">
				<div class="row">
					<div class="col-12 carousel-col">
						<div class="explore-tab-carousel position-relative">
							<div class="swiper notificationTabSwiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide"><a href="notification-1.html" class="explore-tab">Collected</a></div>
									<div class="swiper-slide">
										<div class="dropdown-container">
											<div class="dropdown-toggle explore-tab click-dropdown">
											 Created
											</div>
											<div class="dropdown-menu">
											  <ul>
												<li><a href="javascript:void(0);">Item</a></li>
												<li><a href="collection.html">Collection</a></li>
											  </ul>
											</div>
										</div>
									</div>
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab active">Favorite</a></div>
									<div class="swiper-slide"><a href="activity.html" class="explore-tab">Activity</a></div>
									<div class="swiper-slide">
										<div class="dropdown-container">
											<div class="dropdown-toggle explore-tab click-dropdown">
											 Offers
											</div>
											<div class="dropdown-menu">
											  <ul>
												<li><a href="offers-made.html">Offers Made</a></li>
												<li><a href="javascript:void(0);">Offers Received</a></li>
											  </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="swiper-button-prev notificationTab-button-prev"><img src="img/left-arrow.svg" class="w-100" alt="arrow"></div>
							<div class="swiper-button-next notificationTab-button-next"><img src="img/right-arrow.svg" class="w-100" alt="arrow"></div>
						</div>
					</div>
					<div class="col-12">
						<div class="row margin-left-right-35">
							<div class="col-lg-3 col-md-3 col-sm-4 listing-column">
								<div class="listing-box">
									<div class="listing-sub"><img src="img/listing1.webp" class="w-100 listing-img" alt="listing"> <a href="javascript:void(0);" class="favrourite-link position-absolute"><img src="img/favrourite.svg" alt="favrourite"></a></div>
									<h3>Invisible Friends #2965</h3>
									<div class="price-kd">5000 KWD</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-4 listing-column">
								<div class="listing-box">
									<div class="listing-sub"><img src="img/listing13.webp" class="w-100 listing-img" alt="listing"> <a href="javascript:void(0);" class="favrourite-link position-absolute"><img src="img/favrourite.svg" alt="favrourite"></a></div>
									<h3>Geometric Ape Club</h3>
									<div class="price-kd">5000 KWD</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-4 listing-column">
								<div class="listing-box">
									<div class="listing-sub"><img src="img/listing14.webp" class="w-100 listing-img" alt="listing"> <a href="javascript:void(0);" class="favrourite-link position-absolute"><img src="img/favrourite.svg" alt="favrourite"></a></div>
									<h3>Unique E #3167</h3>
									<div class="price-kd">5000 KWD</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-3 col-sm-4 listing-column">
								<div class="listing-box">
									<div class="listing-sub"><img src="img/listing15.webp" class="w-100 listing-img" alt="listing"> <a href="javascript:void(0);" class="favrourite-link position-absolute"><img src="img/favrourite.svg" alt="favrourite"></a></div>
									<h3>Invisible Friends #2965</h3>
									<div class="price-kd">5000 KWD</div>
								</div>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
