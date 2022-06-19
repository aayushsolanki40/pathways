@extends('UI.layout.app')
@section('content')
<section class="section banner-main position-relative margin-top">
	<div class="banner-img"><img src="{{asset('assets/img/banner.webp')}}" class="w-100" alt="Pathways"><div id="main-container" class="lines position-absolute"></div></div>
	<div class="position-absolute banner-contents">
		<div class="container">
			<!--<h1>Discover <br>
                Collect & Sell <br>
                Extraordinary NFT</h1>-->
			<div class="carousel-mySwiper">
				<div class="swiper mySwiper">
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<h1><div class="slide-sub">Discover </div><div class="slide-sub">Collect & Sell </div><div class="slide-sub">Extraordinary NFT</div></h1>
						</div>
						<div class="swiper-slide">
							<div class="slide-sub">
								<h1><div class="slide-sub">Discover </div><div class="slide-sub">Collect & Sell </div><div class="slide-sub">Extraordinary NFT</div></h1>
							</div>
						</div>
						<div class="swiper-slide">
							<div class="slide-sub">
								<h1><div class="slide-sub">Discover </div><div class="slide-sub">Collect & Sell </div><div class="slide-sub">Extraordinary NFT</div></h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section explore">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="sub-title"><span>Explore Collection</span></h2>
				<div class="explore-carousel">
					<div class="swiper exploreSwiper">
						<div class="swiper-wrapper">
                            @foreach ($nfts as $nft)
							<div class="swiper-slide"><div class="explore-slide"><img src="{{$nft->image}}" class="w-100" alt="explore"></div></div>
							@endforeach
						</div>
					</div>
					<div class="swiper-button-prev explore-button-prev"><img src="{{asset('assets/img/left-arrow.svg')}}" class="w-100" alt="arrow"></div>
					<div class="swiper-button-next explore-button-next"><img src="{{asset('assets/img/right-arrow.svg')}}" class="w-100" alt="arrow"></div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section top-listing">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h2 class="sub-title"><span>Top Listing</span></h2>
			</div>
		</div>
		<div class="row margin-left-right-35">
            @foreach ($nfts as $nft)
            <div class="col-lg-3 col-md-3 col-sm-4 listing-column">
				<div class="listing-box">
					<div class="listing-sub"><img src="{{$nft->image}}" class="w-100 listing-img" alt="listing"> <a href="javascript:void(0);" class="favrourite-link position-absolute"><img src="{{asset('assets/img/favrourite.svg')}}" alt="favrourite"></a></div>
					<h3>{{$nft->title}}</h3>
					<div class="price-kd">{{$nft->price}} KWD</div>
				</div>
			</div>
            @endforeach
		</div>
	</div>
</section>
@endsection
