@extends('UI.layout.app')
@section('content')
<section class="section innerpages position-relative">
	<div class="container">
		<div class="row">
			<div class="col-12 overflow-hidden">
				<div class="row">
					<div class="col-12 carousel-col">
						<h1 class="text-uppercase">Explore Collection</h1>
						<div class="explore-tab-carousel position-relative">
							<div class="swiper exploreTabSwiper">
								<div class="swiper-wrapper">
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab active">Trending</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab">Photography</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab">Art</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab">Sports</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab">Domain Name</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab">Domain Name</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab">Domain Name</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab">Domain Name</a></div>
									<div class="swiper-slide"><a href="javascript:void(0);" class="explore-tab">Domain Name</a></div>
								</div>
							</div>
							<div class="swiper-button-prev exploreTab-button-prev"><img src="img/left-arrow.svg" class="w-100" alt="arrow"></div>
							<div class="swiper-button-next exploreTab-button-next"><img src="img/right-arrow.svg" class="w-100" alt="arrow"></div>
						</div>
					</div>
					<div class="col-12 explore-listing">
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
				</div>
			</div>
		</div>
	</div>
</section>
@endsection

