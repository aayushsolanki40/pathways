function readURL(input, elem="") {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();
      if(elem==''){
        $('.file-upload-image').attr('src', e.target.result);
        $('.file-upload-content').show();
      }
      else{
        $(elem).attr('src', e.target.result);
        $(elem).closest('.file-upload-content').show();
      }
      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
		$('.image-upload-wrap').addClass('image-dropping');
	});
	$('.image-upload-wrap').bind('dragleave', function () {
		$('.image-upload-wrap').removeClass('image-dropping');
});


/*function readURL(input2) {
  if (input2.files && input2.files[0]) {

    var reader2 = new FileReader();

    reader2.onload = function(e) {
      $('.image-upload-wrap2').hide();

      $('.file-upload-image2').attr('src', e.target.result);
      $('.file-upload-content2').show();

      $('.image-title2').html(input2.files[0].name);
    };

    reader2.readAsDataURL(input2.files[0]);

  } else {
    removeUpload2();
  }
}

function removeUpload2() {
  $('.file-upload-input2').replaceWith($('.file-upload-input2').clone());
  $('.file-upload-content2').hide();
  $('.image-upload-wrap2').show();
}
$('.image-upload-wrap2').bind('dragover', function () {
		$('.image-upload-wrap2').addClass('image-dropping2');
	});
	$('.image-upload-wrap2').bind('dragleave', function () {
		$('.image-upload-wrap2').removeClass('image-dropping2');
});*/
