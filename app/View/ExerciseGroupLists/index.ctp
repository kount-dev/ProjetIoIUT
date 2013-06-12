<div class="exerciseGroupLists index">
	<h2><?php echo __('Exercise Group Lists'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('exercise_id'); ?></th>
			<th><?php echo $this->Paginator->sort('iut_group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($exerciseGroupLists as $exerciseGroupList): ?>
	<tr>
		<td><?php echo h($exerciseGroupList['ExerciseGroupList']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($exerciseGroupList['Exercise']['id'], array('controller' => 'exercises', 'action' => 'view', $exerciseGroupList['Exercise']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($exerciseGroupList['IutGroup']['name'], array('controller' => 'iut_groups', 'action' => 'view', $exerciseGroupList['IutGroup']['id'])); ?>
		</td>
		<td><?php echo h($exerciseGroupList['ExerciseGroupList']['created']); ?>&nbsp;</td>
		<td><?php echo h($exerciseGroupList['ExerciseGroupList']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $exerciseGroupList['ExerciseGroupList']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $exerciseGroupList['ExerciseGroupList']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $exerciseGroupList['ExerciseGroupList']['id']), null, __('Are you sure you want to delete # %s?', $exerciseGroupList['ExerciseGroupList']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Exercise Group List'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Iut Groups'), array('controller' => 'iut_groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Iut Group'), array('controller' => 'iut_groups', 'action' => 'add')); ?> </li>
	</ul>
</div>
