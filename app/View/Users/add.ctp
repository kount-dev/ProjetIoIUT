<div class="users form">
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend><?php echo __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('group_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Lists'), array('controller' => 'group_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group List'), array('controller' => 'group_lists', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultats'), array('controller' => 'resultats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultat'), array('controller' => 'resultats', 'action' => 'add')); ?> </li>
	</ul>
</div>
