jQuery(function(){

	$('#toolbar').click(function(){
		$('#wrapper').toggleClass('unfold');
	});

	$('.filter').click(function(){
		$(this).toggleClass('selected');
	});

});