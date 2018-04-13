$(document).ready(function(){

	$('.chat_head').click(function(){
		$('.chat_body').slideToggle('slow');
	});
    
	$('.msg_head').click(function(){
		$('.msg_wrap').slideToggle('slow');
	});
	
	$('.close').click(function(){
		$('.msg_box').hide();
	});
	
	$('.user').click(function(){

		$('.msg_wrap').show();
		$('.msg_box').show();
	});
    
    
	
	$('textarea').keypress(
    function(e){
        if (e.keyCode == 13) {
            e.preventDefault();
            var sender_msg = $(this).val();
            var varitm_id = $('#itm_id').val();
            var varemail = $('#email').val();
            $.ajax({
                method: "POST",
                url: "cus_chat.php",
                data: {sender_msg: sender_msg, itm_id: varitm_id, email: varemail}
            })
			$(this).val('');
			if(sender_msg!='')
			$('<div class="msg_b">'+sender_msg+'</div>').insertBefore('.msg_push');
			$('.msg_body').scrollTop($('.msg_body')[0].scrollHeight);
        }
    });
    
    
    
	
});