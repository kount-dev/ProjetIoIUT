<?php echo $this->Html->script('editQuestions.ajax'); ?>
<div class="questions form">
<?php echo $this->Form->create('Question'); ?>
	<fieldset>
		<legend><?php echo __('Edit Question'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('namefile');
		echo $this->Form->input('points');
		echo $this->Form->input('difficulty');
		echo $this->Form->hidden('user_id');
		echo $this->Form->hidden('question_type_id');
		echo $this->Form->input('Discipline');
	?>
	</fieldset>
	<div id="edit_question"></div>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

