$(document).ready(function(){
	var namefile = $('#QuestionNamefile').val();
	var tab = namefile.split('_');
	var url = '../../../' + tab[0] + 's/edit/' + namefile;
	$.ajax({
	    type: "get",
	    url: url,
	    success: function(res) {
	        $('#edit_question').html(res);
	    }
	});
});

function addEditChoice(elt){
	var namefile = $('#QuestionNamefile').val();
	var tab = namefile.split('_');
	var nb_choice = $(elt).parent().find('.nb_choice').attr('value');
	var url = '../../../' + tab[0] + 's/addEditChoice';
	$.ajax({
	    type: "post",
	    url: url,
	    data: {n: nb_choice},
	    success: function(res) {
	        $(elt).before(res);
	        $(elt).parent().find('.nb_choice').val(parseInt(nb_choice)+1);
	    }
	});
}