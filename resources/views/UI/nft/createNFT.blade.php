@extends('UI.layout.app')
@section('content')
<section class="section innerpages position-relative">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h1 class="text-uppercase">Create A new Item</h1>
			</div>
            @if($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
            @endif
			<div class="col-12 ranking-listing">
				<div class="row text-center justify-content-center">
					<div class="col-lg-8 col-md-8 col-sm-10 system-column">
                        <form action="{{route('ui.nft.store')}}" method="post" enctype='multipart/form-data'>
                            @csrf
                            <div class="security-form">
                                <div class="security-form-sub mt-0">
                                    <div class="form-group">
                                        <div class="upload-photo upload-rectangle">
                                            <p class="text-left">Upload File*</p>
                                            <div class="file-upload">
                                                <div class="image-upload-wrap">
                                                    <input name="image" class="file-upload-input" type="file" onchange="readURL(this);" accept="image/*" />
                                                    <div class="drag-text">

                                                    </div>
                                                </div>
                                                <div class="file-upload-content">
                                                    <img class="file-upload-image" src="#" alt="your image" />
                                                    <div class="image-title-wrap">
                                                    <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
                                                    </div>
                                                </div>
                                                <!--<button class="button file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Upload Photo</button>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group"><input name="title" type="text" class="form-control" placeholder="Name*" value=""></div>
                                    <div class="form-group"><textarea name="description" class="form-control" placeholder="Description"></textarea></div>
                                    <div class="form-group"><input name="price" type="text" class="form-control" placeholder="Price*" value=""></div>
                                </div>
                                <div class="form-group">
                                    <button class="button file-upload-btn" type="submit">Create</button>
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
