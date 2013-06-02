<div class="exercises form">
<?php echo $this->Form->create('Exercise'); ?>
	<fieldset>
		<legend><?php echo __('Edit Exercise'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('minimum_points');
		echo $this->Form->input('opening_date');
		echo $this->Form->input('closing_date');
		echo $this->Form->input('user_id');
		echo $this->Form->input('Discipline');
		echo $this->Form->input('Question');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
