<div class="iutGroups form">
<?php echo $this->Form->create('IutGroup'); ?>
	<fieldset>
		<legend><?php echo __('Edit Iut Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('IutGroup.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('IutGroup.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Iut Groups'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Group Lists'), array('controller' => 'group_lists', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group List'), array('controller' => 'group_lists', 'action' => 'add')); ?> </li>
	</ul>
</div>
