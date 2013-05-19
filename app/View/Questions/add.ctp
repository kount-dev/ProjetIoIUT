<?php echo '<fieldset id="question_'.$num_question.'">'; ?>
    <legend><?php echo __('Question'); ?></legend>
<?php
    echo $this->Form->input('Question.'.$num_question.'.Question.points');
    echo $this->Form->input('Question.'.$num_question.'.Question.difficulty');
    echo $this->Form->input('Question.'.$num_question.'.Discipline',
                            array('label'=>'Question\'s disciplines',
                                  'type'=>'select',
                                  'multiple'=>true,
                                  'options' => $disciplines));
    echo $this->Form->input('Question.'.$num_question.'.Question.question_type_id',
                            array('empty' => 'Selectionnez votre type de question',
                                  'options' => $question_types_list,
                                  'onchange' => "javascript:addQuestionType(this);"));
    echo $this->Form->hidden('Question.'.$num_question.'.Question.user_id', array('value' => $author));
    echo $this->Form->hidden('Question.'.$num_question.'.Exercise.0', array('value' => $exerciseId));
?>
    <div class="questions typeQuestion generation">
    </div>
</fieldset>