<?php echo "<fieldset id='qcu_".$num_question."'>"; ?>
    <legend><?php echo __('QCU'); ?></legend>
<?php
    echo $this->Form->input('Question.'.$num_question.'.content.question');
    echo $this->Form->hidden('nb_choice', array('class' => 'nb_choice', 'value' => '3'));
    echo $this->Form->radio('Question.'.$num_question.'.content.answer',
                            array('1' => '', '2' => ''),
                            array('legend' => false));
    echo $this->Form->input('Question.'.$num_question.'.content.choices.1', array('label' => 'Choice 1'));
    echo $this->Form->input('Question.'.$num_question.'.content.choices.2', array('label' => 'Choice 2'));
    echo "<input class='add_choice' value='Add choice' type='button' onclick='javascript:addChoice(this);'>";
?>
</fieldset>
<script type="text/javascript">
$(document).ready(function(){

	// $('.add_choice').click(function(){
	// 	var nb_choice = $(this).parent().find('.nb_choice').val();
	// 	var fieldset = $(this).parent().attr('id');
	// 	console.log(nb_choice);
	// 	$.ajax({
	// 	    type: "post",
	// 	    url: "../qcus/addChoice",
	// 	    data: {n: nb_choice, f: fieldset},
	// 	    success: function(res) {
	// 	        $('.add_choice').before(res);
	// 	        $('.nb_choice').val(parseInt(nb_choice)+1);
	// 	    }
	// 	});
	// });
});

</script>