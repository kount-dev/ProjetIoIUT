<?php echo '<fieldset id="question_'.$num_question.'">'; ?>
    <legend><?php echo __('Question'); ?></legend>
<?php
var_dump($question_types_list);
    echo $this->Form->input('Question.'.$num_question.'.points');
    echo $this->Form->input('Question.'.$num_question.'.difficulty');
    echo $this->Form->input('Question.Discipline'.$num_question,
                            array('label'=>'Question\'s disciplines',
                                  'type'=>'select',
                                  'multiple'=>true,
                                  'options' => $disciplines));
    echo $this->Form->input('Question.'.$num_question.'.question_type_id',
                            array('empty' => 'Selectionnez votre type de question',
                                  'options' => $question_types,
                                  'controlleur' => $question_types,
                                  'onchange' => "javascript:addQuestionType(this);"));
    echo $this->Form->hidden('Question.'.$num_question.'.user_id', array('value' => $author));
?>
    <div class="questions typeQuestion generation">
    </div>
</fieldset>