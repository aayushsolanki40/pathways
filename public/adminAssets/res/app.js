$(document).ready(function(){
    $(".partnerapprove_btn").click(function(){
        var partner_id = $(this).data('partnerid');
        $(this).prop('disabled', true);
        $.ajax({
         type:'POST',
         url: $('#update_partner_status').val(),
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {"_token": $('meta[name="csrf-token"]').attr('content'), "partner_id":partner_id},
         success:function(data){
            $("#partner_approve_btn"+partner_id).html('<span class="label label-success">Approved</span>');
         }
        });
    })
    
    $(document).on('change', ".user_status_btn", function(){
        var user_id = $(this).data('id');
        $.ajax({
         type:'POST',
         url: $('#update_user_status_url').val(),
         headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
         data: {"_token": $('meta[name="csrf-token"]').attr('content'), "user_id":user_id},
         success:function(data){
            console.log(data);
         }
        });
    })
})