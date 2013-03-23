<?php echo '<fieldset id="question_'.$num_question.'">'; ?>
    <legend><?php echo __('Question'); ?></legend>
<?php
    echo $this->Form->input('Question.['.$num_question.'].points');
    echo $this->Form->input('Question.['.$num_question.'].difficulty');
    echo $this->Form->input('Question.['.$num_question.'].Discipline',array('multiple'));
    echo $this->Form->input('Question.['.$num_question.'].question_type_id',array('empty' => 'Selectionnez votre type de question','options' => $question_types, 'onchange' => "javascript:addQuestionType(this);"));
?>
    <div class="questions typeQuestion generation">
    </div>
</fieldset>