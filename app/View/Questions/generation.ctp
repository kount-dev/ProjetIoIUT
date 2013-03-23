<?php echo '<fieldset id="question_'.$num_question.'">'; ?>
    <legend><?php echo __('Question'); ?></legend>
<?php
    echo $this->Form->input('Question.['.$num_question.'].points');
    echo $this->Form->input('Question.['.$num_question.'].difficulty');
    echo $this->Form->input('Discipline');
    echo $this->Form->input('Question.['.$num_question.'].question_type_id',array('empty' => 'Selectionnez votre type de question','options' => $question_types, 'onchange' => "javascript:addQuestionType(this);"));
?>
    <div class="typeQuestion">
    </div>
</fieldset>