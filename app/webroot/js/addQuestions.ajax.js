$(document).ready(function(){

	$('#add_question').click(function(){
		var nb_question = $('#ExerciseNbQuestion').val();
		$.ajax({
		    type: "post",
		    url: "../question/add",
		    data: {n: nb_question},
		    success: function(res) {
		        $('#add_question').before(res);
		        $('#ExerciseNbQuestion').val(parseInt(nb_question)+1);
		    }
		});
	});
});

function addQuestionType(elt){
	var typeQuestion = $(elt).find(':selected').attr('questiontype');
	var fieldset = $(elt).parent().parent().attr('id');
	$.ajax({
	    type: "post",
	    url: "../../"+ typeQuestion +"s/add",
	    data: {f:fieldset},
	    success: function(res) {
	    	$("#"+fieldset+" .typeQuestion").html(res);
	    }
	});
}

function addChoice(elt){
	var nb_choice = $(elt).parent().find('.nb_choice').attr('value');
	var fieldset = $(elt).parent().attr('id');
	var tab = fieldset.split('_');
	$.ajax({
	    type: "post",
	    url: "../../"+tab[0]+"s/addChoice",
	    data: {n: nb_choice, f: fieldset},
	    success: function(res) {
	        $(elt).before(res);
	        $(elt).parent().find('.nb_choice').val(parseInt(nb_choice)+1);
	    }
	});
}