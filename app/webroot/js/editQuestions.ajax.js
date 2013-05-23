$(document).ready(function(){
	var namefile = $('#QuestionNamefile').val();
	var tab = namefile.split('_');
	var url = '../../' + tab[0] + 's/edit/' + namefile;
	$.ajax({
	    type: "get",
	    url: url,
	    success: function(res) {
	        $('#edit_question').html(res);
	    }
	});
});
