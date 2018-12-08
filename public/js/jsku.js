function showError(selector, pesan){
	$(selector).parents('.form-group').addClass('has-error');
	var helpBlock = $(selector).parents('.form-group').find('.help-block');
	if(helpBlock.length == 0){
		$(selector).parents('.form-group').append('<span class="help-block"></span>');
	}
	$(selector).parents('.form-group').find('.help-block').html(pesan);
}

$('input').parents('.form-group').removeClass('has-error');