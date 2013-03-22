$(document).ready(function(){

	$('#add_question').click(function(){
		$.ajax({
		    type: "post",
		    url: "../questions/generation",
		    success: function(res) {
		        $('.questions').append(res);
		    }
		});
	});
});