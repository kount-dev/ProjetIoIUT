<?php echo "<fieldset id='Qcu_".$num_question."'>"; ?>
    <legend><?php echo __('QCU'); ?></legend>
<?php
    echo $this->Form->input('Question.'.$num_question.'.content.question');
    echo $this->Form->hidden('nb_choice', array('class' => 'nb_choice', 'value' => '3'));
    echo $this->Form->radio('Question.'.$num_question.'.content.answer',
                            array('1' => $this->Form->input('Question.'.$num_question.'.content.choices.1', array('label' => 'Choice 1')), 
                            	'2' => $this->Form->input('Question.'.$num_question.'.content.choices.2', array('label' => 'Choice 2'))),
                            array('legend' => false));
    echo "<input class='add_choice' value='Add choice' type='button' onclick='javascript:addChoice(this);'>";
?>
</fieldset>