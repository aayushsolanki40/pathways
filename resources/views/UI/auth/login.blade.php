@extends('UI.layout.app')
@section('content')
<section class="section innerpages position-relative">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="row text-center justify-content-center">
					<div class="col-lg-8 col-md-8 col-sm-10 system-column">
						<div class="upload-photo">
							<div class="file-upload pb-0">
								<div class="user-photo">
								</div>
								<h2 class="font-size56 mt-3">Welcome Back</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-12 ranking-listing">
				<div class="row text-center justify-content-center">
					<div class="col-lg-8 col-md-8 col-sm-10 system-column">
                        <form action="" method="post">
                            @csrf
						<div class="security-form">
                            <div class="security-form-sub signup-form">
								<div class="form-group"><input type="email" name="email" class="form-control" placeholder="Email" value="" required></div>
                                @if($errors->has('email'))
                                    <div class="error">{{ $errors->first('email') }}</div>
                                @endif
							</div>
							<div class="security-form-sub signup-form">
								<div class="form-group"><input type="password" name="password" class="form-control" placeholder="Password" value="" required></div>
                                @if($errors->has('password'))
                                    <div class="error">{{ $errors->first('password') }}</div>
                                @endif
							</div>
                            @if($errors->any())
                                    <span class="error align-center"> {!! implode('', $errors->all('<div>:message</div>')) !!}</span>
                            @endif
							<div class="form-group">
								<button class="button file-upload-btn" type="submit">Unlock</button>
								<div class="wallet-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>
							</div>
						</div>
                    </form>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>
@endsection
