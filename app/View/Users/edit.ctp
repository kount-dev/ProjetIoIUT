<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Edit User'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('mail');
		echo $this->Form->input('xp');
		echo $this->Form->input('actual_rank');
		echo $this->Form->input('last_rank');
		echo $this->Form->input('group_id');
		echo $this->Form->input('avatar_namefile');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>