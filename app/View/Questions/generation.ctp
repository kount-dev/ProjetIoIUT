<?php echo '<fieldset id="question_'.$num_question.'" class="question">'; ?>
	<legend class="title"><?php echo __('Question '.($num_question+1)); ?></legend>
<?php
	echo $this->Form->input('Question.'.$num_question.'.Question.points', array('label' => false, 'placeholder' => 'Points'));
	echo $this->Form->input('Question.'.$num_question.'.Question.difficulty', array('label' => false, 'placeholder' => 'Difficulty'));
	echo $this->Form->input('Question.'.$num_question.'.Discipline', array('label'=>'Question\'s disciplines', 'type'=>'select', 'multiple'=>true, 'options' => $disciplines));
	echo $this->Form->input('Question.'.$num_question.'.Question.question_type_id', array('empty' => 'Selectionnez votre type de question', 'options' => $question_types_list, 'onchange' => "javascript:addQuestionType(this);"));
	echo $this->Form->hidden('Question.'.$num_question.'.Question.user_id', array('value' => $author));
	echo $this->Form->hidden('Question.'.$num_question.'.Exercise.0', array('value' => $exerciseId));
?>
	<div class="questions typeQuestion generation">
	</div>
</fieldset>