@extends('UI.layout.app')
@section('content')
<section class="section innerpages position-relative">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-uppercase">Checkout</h1>
			</div>
			<div class="col-12 checkout-page">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 checkout-column">
						<div class="checkout-box">
                            <form action="{{route('make.payment')}}" method="POST">
                                @csrf
                                <input type="hidden" name="code[]" value="{{$nft->id}}">
                                <input type="hidden" name="name[]" value="{{$nft->title}}">
                                <input type="hidden" name="price[]" value="{{$nft->price}}">
                                <input type="hidden" name="desc[]" value="{{$nft->description}}">
                                <input type="hidden" name="qty[]" value="1">
							    <button type="submit" class="paypal-link"><img src="{{asset('assets/img/paypal-logo.png')}}" alt="paypal"></button>
                            </form>
							<div class="or"><span>Or</span></div>
							<div class="credit-debit-card">
								<h4>Credit/Debit Card</h4>
								<div class="row">
									<div class="col-12"><div class="form-group"><input type="text" placeholder="Card Number" class="form-control"></div></div>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<div class="form-group"><input type="text" placeholder="MM" class="form-control"></div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<div class="form-group"><input type="text" placeholder="YY" class="form-control"></div>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4">
										<div class="form-group"><input type="text" placeholder="CVV" class="form-control"></div>
									</div>
								</div>
								<div class="row"><div class="col-12 text-center"><button class="button" onClick="location.href='{{route('make.payment.nft', $nft->id)}}'">Pay</button></div></div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 checkout-column">
						<div class="checkout-box">
							<div class="item-row d-flex title-div">
								<div class="item-title">Item</div>
								<div class="item-lbl">Subtotal</div>
							</div>
							<div class="item-row d-flex">
								<div class="item-title">
									<h2>{{$nft->title}}</h2>
									<div class="item-div">
										<div class="thumb-wrap"><div class="thumb-div"><img src="{{asset('assets/img/notification-1.webp')}}" alt=""></div></div>
										<div class="heading">{{$nft->user->firstName.' '.$nft->user->lastName}}</div>
									</div>
								</div>
								<div class="item-lbl"><h4>{{$nft->price}} KWD</h4></div>
							</div>
							{{-- <div class="item-row d-flex">
								<div class="item-title">
									<h2>Azuka Ape #5990</h2>
									<div class="item-div">
										<div class="thumb-wrap"><div class="thumb-div"><img src="{{asset('assets/img/notification-1.webp')}}" alt=""></div></div>
										<div class="heading">Arcade Land</div>
									</div>
								</div>
								<div class="item-lbl"><h4>454 KWD</h4></div>
							</div> --}}
							<div class="item-row d-flex total-div">
								<div class="item-title">Total</div>
								<div class="item-lbl">{{$nft->price}} KWD</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
