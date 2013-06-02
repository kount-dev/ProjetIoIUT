<div class="answers form">
<?php echo $this->Form->create('Answer'); ?>
	<fieldset>
		<legend><?php echo __('Add Answer'); ?></legend>
	<?php
		echo $this->Form->input('namefile');
		echo $this->Form->input('user_id');
		echo $this->Form->input('exercise_id');
		echo $this->Form->input('attempt_number');
		echo $this->Form->input('success_rate');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>