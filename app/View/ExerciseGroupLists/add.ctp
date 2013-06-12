<div class="exerciseGroupLists form">
<?php echo $this->Form->create('ExerciseGroupList'); ?>
	<fieldset>
		<legend><?php echo __('Add Exercise Group List'); ?></legend>
	<?php
		echo $this->Form->input('exercise_id');
		echo $this->Form->input('iut_group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Exercise Group Lists'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Exercise'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Iut Groups'), array('controller' => 'iut_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iut Group'), array('controller' => 'iut_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
