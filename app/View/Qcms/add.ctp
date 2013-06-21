<?php echo "<fieldset id='Qcm_".$num_question."'>"; ?>
    <legend><?php echo __('QCM'); ?></legend>
<?php
    echo $this->Form->input('Question.'.$num_question.'.content.question');
    echo $this->Form->hidden('nb_choice', array('class' => 'nb_choice', 'value' => '3'));
    
    echo "<input type='checkbox' name='data[Question][".$num_question."][content][answers][]' id='Question".$num_question."ContentAnswers1' value='1'>";
    echo $this->Form->input('Question.'.$num_question.'.content.choices.1', array('label' => 'Choice 1'));
    
    echo "<input type='checkbox' name='data[Question][".$num_question."][content][answers][]' id='Question".$num_question."ContentAnswers2' value='2'>";
    echo $this->Form->input('Question.'.$num_question.'.content.choices.2', array('label' => 'Choice 2'));
    
    echo "<input class='add_choice' value='Add choice' type='button' onclick='javascript:addChoice(this);'>";
?>
</fieldset>