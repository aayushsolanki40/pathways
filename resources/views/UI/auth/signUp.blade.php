@extends('UI.layout.app')
@section('content')
<section class="section innerpages position-relative">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="position-relative font-size56">Signup</h1>
			</div>
			<div class="col-12 ranking-listing">
				<div class="row text-center justify-content-center">
					<div class="col-lg-8 col-md-8 col-sm-10 system-column">
						<div class="security-form">
							<div class="security-form-sub signup-form">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group"><input type="text" class="form-control" placeholder="First Name" value=""></div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-6">
										<div class="form-group"><input type="text" class="form-control" placeholder="Last Name" value=""></div>
									</div>
								</div>
								<div class="form-group"><input type="text" class="form-control" placeholder="Email" value=""></div>
								<div class="form-group"><input type="text" class="form-control" placeholder="Phone" value=""></div>
								<div class="form-group"><input type="password" class="form-control" placeholder="Password" value=""></div>
								<div class="form-group"><input type="password" class="form-control" placeholder="Confirm Password" value=""></div>
							</div>
							<div class="form-group">
								<button class="button file-upload-btn" type="submit">Sign Up</button>
								<div class="wallet-text">Already Have a Wallet? Connect</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
