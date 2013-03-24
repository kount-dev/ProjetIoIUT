$(document).ready(function(){

	$('#add_question').click(function(){
		var nb_question = $('#ExerciseNbQuestion').val();
		$.ajax({
		    type: "post",
		    url: "../questions/generation",
		    data: {n: nb_question},
		    success: function(res) {
		        $('#add_question').before(res);
		        $('#ExerciseNbQuestion').val(parseInt(nb_question)+1);
		    }
		});
	});
});

function addQuestionType(thisType){
	var typeQuestion = $(thisType).val();
	var fieldset = $(thisType).parent().parent().attr('id');
	console.log(fieldset);
	$.ajax({
	    type: "post",
	    url: "../"+ typeQuestion +"s/generation",
	    data: {f:fieldset},
	    success: function(res) {
	    	$("#"+fieldset+" .typeQuestion").html(res);
	    }
	});
}