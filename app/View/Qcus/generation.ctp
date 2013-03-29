<fieldset>
    <legend><?php echo __('QCU'); ?></legend>
<?php
    echo $this->Form->input('Question.'.$num_question.'.content.question');
    echo $this->Form->radio('Question.'.$num_question.'.content.answer', array('1' => ''), array('legend' => false));
    echo $this->Form->input('Question.'.$num_question.'.content.choices.1', array('label' => 'Choice 1'));
    echo $this->Form->radio('Question.'.$num_question.'.content.answer', array('2' => ''), array('legend' => false));
    echo $this->Form->input('Question.'.$num_question.'.content.choices.2', array('label' => 'Choice 2'));
?>
</fieldset>