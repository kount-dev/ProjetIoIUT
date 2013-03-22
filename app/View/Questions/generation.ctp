<?php echo '<fieldset id="question_'.$num_question.'">'; ?>
    <legend><?php echo __('Question'); ?></legend>
<?php
    echo $this->Form->input('points');
    echo $this->Form->input('difficulty');
    echo $this->Form->input('discipline_id', array('empty' => 'Selectionnez votre type de question'));
    echo $this->Form->input('question_type_id',array('empty' => 'Selectionnez votre type de question','options' => $question_types, 'onchange' => "javascript:addQuestionType(this);"));
?>
    <div class="typeQuestion">
    </div>
</fieldset>