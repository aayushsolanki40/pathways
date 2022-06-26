@extends('UI.layout.app')
@section('content')
<section class="section innerpages position-relative">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-uppercase">Edit Your profile</h1>
			</div>
			<div class="col-12 ranking-listing">
				<div class="row text-center justify-content-center">
					<div class="col-lg-9 col-md-9 col-sm-11 system-column">
						<div class="security-form">
							<div class="security-form-sub profile-div mt-0">
								<p class="text-left lbl-text">Enter Your Detailes</p>
								<div class="form-group"><input type="text" class="form-control" placeholder="Name*" value="{{$user->firstName.' '.$user->lastName}}"></div>
								<div class="form-group"><input type="text" class="form-control" placeholder="Email" value="{{$user->email}}"></div>
								<div class="form-group upload-files">
									<div class="upload-photo upload-rectangle">
										<p class="text-left lbl-text mb-0">Upload Profile Images</p>
										<div class="text-left lbl-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </div>
										<div class="file-upload">
											<div class="image-upload-wrap">
												<input class="file-upload-input" type="file" onchange="readURL(this, '.file-upload-image-profile');" accept="image/*" />
												<div class="drag-text">

												</div>
											</div>
											<div class="file-upload-content">
												<img class="file-upload-image-profile" src="{{$user->profile_img}}" alt="your image" />
												<div class="image-title-wrap">
												<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
												</div>
											</div>
											<!--<button class="button file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Photo</button>-->
										</div>
									</div>
								</div>
								<div class="form-group upload-files">
									<div class="upload-photo upload-rectangle">
										<p class="text-left lbl-text mb-0">Upload Cover Images</p>
										<div class="text-left lbl-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has </div>
										<div class="file-upload">
											<div class="image-upload-wrap">
												<input class="file-upload-input" type="file" onchange="readURL(this, '.file-upload-image-profile');" accept="image/*" />
												<div class="drag-text"></div>
											</div>
											<div class="file-upload-content">
												<img class="file-upload-image-cover" src="#" alt="your image" />
												<div class="image-title-wrap">
												<button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
												</div>
											</div>
											<!--<button class="button file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Photo</button>-->
										</div>
									</div>
								</div>
								<div class="sm-link"><p class="text-left lbl-text">Add Social Media Links </p></div>
								<div class="form-group">
									<div class="sm-div"><span class="sm-icon"><img src="{{asset('assets/img/website-icon.svg')}}" alt="website"></span> <div class="sm-text">Website</div></div>
									<input type="text" class="form-control" placeholder="Website" value="">
								</div>
								<div class="form-group">
									<div class="sm-div"><span class="sm-icon"><img src="{{asset('assets/img/twitter-icon.svg')}}" alt="Twitter"></span> <div class="sm-text">Twitter</div></div>
									<input type="text" class="form-control" placeholder="Twitter" value="">
								</div>
								<div class="form-group">
									<div class="sm-div"><span class="sm-icon"><img src="{{asset('assets/img/facebook-icon.svg')}}" alt="Facebook"></span> <div class="sm-text">Facebook</div></div>
									<input type="text" class="form-control" placeholder="Facebook" value="">
								</div>
								<div class="form-group">
									<div class="sm-div"><span class="sm-icon"><img src="{{asset('assets/img/discord-icon.svg')}}" alt="Discord"></span> <div class="sm-text">Discord</div></div>
									<input type="text" class="form-control" placeholder="Discord" value="">
								</div>
								<div class="form-group">
									<div class="sm-div"><span class="sm-icon"><img src="{{asset('assets/img/instagram-icon.svg')}}" alt="Instagram"></span> <div class="sm-text">Instagram</div></div>
									<input type="text" class="form-control" placeholder="Instagram" value="">
								</div>
								<div class="form-group">
									<div class="sm-div"><span class="sm-icon"><img src="{{asset('assets/img/telegram-icon.svg')}}" alt="Telegram"></span> <div class="sm-text">Telegram</div></div>
									<input type="text" class="form-control" placeholder="Telegram" value="">
								</div>
							</div>
							<div class="form-group">
								<button class="button file-upload-btn" type="submit">Save Changes</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection
