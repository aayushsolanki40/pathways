@extends('UI.layout.app')
@section('content')
<section class="section position-relative margin-top">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 left-colmun">
						<div class="left-side">
							<div class="left-colmun-img"><img src="{{$nft->image}}" class="w-100" alt="product"></div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 right-colmun">
						<div class="right-side w-100">
							<h2>{{$nft->title}}</h2>
							<ul class="user-ul">
								<li><div class="user-th"><img src="{{asset('assets/img/notification-1.webp')}}" alt=""></div><div class="user-heading">{{$nft->user->firstName}}</div></li>
								<li><div class="user-likes"><img src="{{asset('assets/img/likes-icon.svg')}}" alt=""></div><div class="user-heading">1463 Likes</div></li>
							</ul>
							<p>{{$nft->description}}</p>
							<div class="price">{{$nft->price}} KWD</div>
                            @if(($nft->owner != auth()->user()->id)&&($nft->userId != auth()->user()->id))
							<div class="row">
								<div class="col-lg-6 col-md-6 col-sm-6">
									<a href="{{route('ui.checkout.nft', $nft->id)}}" class="button w-100">Buy Now</a>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-6">
									<a href="javascript:void(0);" data-src="#offerModel" data-fancybox class="button w-100">Make An Offer</a>
									<a href="javascript:void(0);" data-src="#successModel" data-fancybox class="success" style="display:none">Make An Offer</a>
								</div>
							</div>
                            @endif
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 history-column">
						<h3>Price History</h3>
						<div class="history-box">
							<img src="{{asset('assets/img/history.webp')}}" class="w-100" alt="history"/>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 history-column">
						<h3>Listing History</h3>
						<div class="history-box">

						</div>
					</div>
				</div>
			</div>
			<div class="col-12 similar-collection">
				<h3>Similar collection</h3>
				<div class="row margin-left-right-35">
					<div class="col-lg-3 col-md-3 col-sm-4 listing-column">
						<div class="listing-box">
							<div class="listing-sub"><img src="{{asset('assets/img/listing1.webp')}}" class="w-100 listing-img" alt="listing"> <a href="javascript:void(0);" class="favrourite-link position-absolute"><img src="{{asset('assets/img/favrourite.svg')}}" alt="favrourite"></a></div>
							<h3>Invisible Friends #2965</h3>
							<div class="price-kd">5000 KWD</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 listing-column">
						<div class="listing-box">
							<div class="listing-sub"><img src="{{asset('assets/img/listing13.webp')}}" class="w-100 listing-img" alt="listing"> <a href="javascript:void(0);" class="favrourite-link position-absolute"><img src="{{asset('assets/img/favrourite.svg')}}" alt="favrourite"></a></div>
							<h3>Geometric Ape Club</h3>
							<div class="price-kd">5000 KWD</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 listing-column">
						<div class="listing-box">
							<div class="listing-sub"><img src="{{asset('assets/img/listing14.webp')}}" class="w-100 listing-img" alt="listing"> <a href="javascript:void(0);" class="favrourite-link position-absolute"><img src="{{asset('assets/img/favrourite.svg')}}" alt="favrourite"></a></div>
							<h3>Unique E #3167</h3>
							<div class="price-kd">5000 KWD</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-4 listing-column">
						<div class="listing-box">
							<div class="listing-sub"><img src="{{asset('assets/img/listing15.webp')}}" class="w-100 listing-img" alt="listing"> <a href="javascript:void(0);" class="favrourite-link position-absolute"><img src="{{asset('assets/img/favrourite.svg')}}" alt="favrourite"></a></div>
							<h3>Invisible Friends #2965</h3>
							<div class="price-kd">5000 KWD</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
@section('modalsContent')
<div id="offerModel" class="popup-hidden animated-modal">
	<div class="offer-div">
		<h2 class="anim1">Make An offer</h2>
		<div class="row">
			<div class="col-12">
				<div class="form-group anim2"><input type="text" class="form-control" placeholder="Price"></div>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-5">
				<div class="form-group anim3"><input type="text" class="form-control" placeholder="Date"></div>
			</div>
			<div class="col-lg-8 col-md-8 col-sm-7">
				<div class="form-group anim3"><input type="text" class="form-control" placeholder="Time"></div>
			</div>
			<div class="col-12">
				<button class="button anim4">Make Offer</button>
			</div>
		</div>
	</div>
</div>
<div id="successModel" class="popup-hidden animated-modal">
	<div class="success-div">
		<h2 class="anim1">Payment Successful</h2>
		<div class="cart-div anim2">
			<div class="cart-holder"><img src="{{asset('assets/img/product-1.webp')}}" class="w-100" alt=""></div>
			<p>Lorem Ipsum is simply dummy text of the printing andNzM</p>
		</div>
		<div class="share-div anim3">
			<h2 class="anim4">Share</h2>
			<ul class="social-media anim5">
				<li><img src="{{asset('assets/img/twitter-icon.svg')}}" alt="Twitter"></li><li><img src="{{asset('assets/img/website-icon.svg')}}" alt="website"></li><li><img src="{{asset('assets/img/instagram-icon.svg')}}" alt="Instagram"></li>
			</ul>
		</div>
	</div>
</div>
<div id="checkoutsModel" class="popup-hidden animated-modal">
	<div class="success-div">
		<h2 class="anim1">Checkout</h2>
		<div class="checkout-box">
			<div class="item-row d-flex title-div">
				<div class="item-title">Item</div>
				<div class="item-lbl">Subtotal</div>
			</div>
			<div class="item-row d-flex">
				<div class="product-div">
					<div class="product-holder"><img src="{{asset('assets/img/product-square.webp')}}" class="w-100" alt=""></div>
					<div class="item-title">
						<h2>Azuka Ape #5990</h2>
						<div class="item-div">
							<div class="thumb-wrap"><div class="thumb-div"><img src="{{asset('assets/img/notification-1.webp')}}" alt=""></div></div>
							<div class="heading">Arcade Land</div>
						</div>
					</div>
				</div>
				<div class="item-lbl"><h4>454 KWD</h4></div>
			</div>
			<div class="item-row d-flex total-div">
				<div class="item-title">Total</div>
				<div class="item-lbl">454 KWD</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script>
	$(document).ready(function(){
        @if(session()->has('paymentStatus'))
        $('.success').trigger('click');
        @endif
	});
</script>
@endsection
