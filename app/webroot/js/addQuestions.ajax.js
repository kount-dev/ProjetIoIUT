$(document).ready(function(){

	$('#add_question').click(function(){
		var nb_question = $('#ExerciseNbQuestion').val();
		$.ajax({
		    type: "post",
		    url: "../questions/generation",
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
	var fieldset = $(thisTest).parent().parent().attr('id');
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