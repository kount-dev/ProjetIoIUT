<div class="questionTypes form">
<?php echo $this->Form->create('QuestionType'); ?>
	<fieldset>
		<legend><?php echo __('Add Question Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('controller');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
