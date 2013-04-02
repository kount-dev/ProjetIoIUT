<?php echo "<fieldset id='qcu_".$num_question."'>"; ?>
    <legend><?php echo __('QCU'); ?></legend>
<?php
    echo $this->Form->input('Question.'.$num_question.'.content.question');
    echo $this->Form->hidden('Qcunb_choice', array('value' => '3'));
    echo $this->Form->radio('Question.'.$num_question.'.content.answer',
                            array('1' => '', '2' => ''),
                            array('legend' => false));
    echo $this->Form->input('Question.'.$num_question.'.content.choices.1', array('label' => 'Choice 1'));
    echo $this->Form->input('Question.'.$num_question.'.content.choices.2', array('label' => 'Choice 2'));
    echo "<input id='add_choice' value='Add choice' type='button'>";
?>
</fieldset>
<script type="text/javascript">
$(document).ready(function(){

	$('#add_choice').click(function(){
		var nb_choice = $(this).parent().find('#Qcunb_choice').val();
		var fieldset = $(this).parent().attr('id');
		console.log(nb_choice);
		$.ajax({
		    type: "post",
		    url: "../qcus/addChoice",
		    data: {n: nb_choice, f: fieldset},
		    success: function(res) {
		        $('#add_choice').before(res);
		        $('#Qcunb_choice').val(parseInt(nb_choice)+1);
		    }
		});
	});
});

</script>