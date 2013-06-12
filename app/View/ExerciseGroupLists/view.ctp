<div class="exerciseGroupLists view">
<h2><?php  echo __('Group List'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($exerciseGroupList['ExerciseGroupList']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exercise'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exerciseGroupList['Exercise']['id'], array('controller' => 'exercises', 'action' => 'view', $exerciseGroupList['Exercise']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Iut Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($exerciseGroupList['IutGroup']['name'], array('controller' => 'iut_groups', 'action' => 'view', $exerciseGroupList['IutGroup']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($exerciseGroupList['ExerciseGroupList']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($exerciseGroupList['ExerciseGroupList']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Exercise Group List'), array('action' => 'edit', $exerciseGroupList['ExerciseGroupList']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Exercise Group List'), array('action' => 'delete', $exerciseGroupList['ExerciseGroupList']['id']), null, __('Are you sure you want to delete # %s?', $exerciseGroupList['ExerciseGroupList']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Lists'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group List'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Iut Groups'), array('controller' => 'iut_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iut Group'), array('controller' => 'iut_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
