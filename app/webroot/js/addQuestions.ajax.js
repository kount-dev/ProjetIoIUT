$(document).ready(function(){

	$('#add_question').click(function(){
		var nb_question = $('#ExerciseNbQuestion').val();
		$.ajax({
		    type: "post",
		    url: "../questions/generation2",
		    data: {n: nb_question},
		    success: function(res) {
		        $('.questions').append(res);
		        $('#ExerciseNbQuestion').val(parseInt(nb_question)+1);
		    }
		});
	});
});

function addQuestionType(thisTest){
	var typeQuestion = $(thisTest).val();
	$.ajax({
	    type: "post",
	    url: "../"+ typeQuestion +"s/generation2",
	    success: function(res) {
	    	$($(thisTest).parent().parent().attr('id')).append(res);
	    }
	});
}