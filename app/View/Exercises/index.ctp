<div>
	<ul id="tabBar">
		<li id="admin_challenge_tab" class="tab"><?php echo $this->Html->link(__('Challenges'), array('controller' => 'exercises', 'action' => 'index')); ?></li>
		<li id="admin_users_tab" class="tab"><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?></li>
		<li id="admin_questions_tab" class="tab"><?php echo $this->Html->link(__('Questions'), array('controller' => 'questions', 'action' => 'index')); ?></li>
		<li id="admin_disciplines_tab" class="tab"><?php echo $this->Html->link(__('Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?></li>
		<li id="admin_typequestions_tab" class="tab"><?php echo $this->Html->link(__('Questions Type'), array('controller' => 'questionTypes', 'action' => 'index')); ?></li>
		<li id="admin_groupuser_tab" class="tab"><?php echo $this->Html->link(__('Groups User'), array('controller' => 'groups', 'action' => 'index')); ?></li>
	</ul>
</div>
<div>
	<ul>
		<li class="tab"><?php echo $this->Html->link(__('New Challenge'), array('controller' => 'exercises', 'action' => 'add')); ?></li>
		<li class="tab"><?php echo $this->Html->link(__('Import Challenge'), array('controller' => 'exercises', 'action' => 'import')); ?> </li>
		<li class="tab"><?php echo $this->Html->link(__('List Challenges'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li class="tab"><?php echo $this->Html->link(__('List Answers'), array('controller' => 'answers', 'action' => 'index')); ?> </li>
	</ul>
</div>
<div class="exercises index">
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('minimum_points'); ?></th>
			<th><?php echo $this->Paginator->sort('opening_date'); ?></th>
			<th><?php echo $this->Paginator->sort('closing_date'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($exercises as $exercise): ?>
	<tr>
		<td><?php echo h($exercise['Exercise']['id']); ?>&nbsp;</td>
		<td><?php echo h($exercise['Exercise']['name']); ?>&nbsp;</td>
		<td><?php echo h($exercise['Exercise']['minimum_points']); ?>&nbsp;</td>
		<td><?php echo h($exercise['Exercise']['opening_date']); ?>&nbsp;</td>
		<td><?php echo h($exercise['Exercise']['closing_date']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($exercise['User']['id'], array('controller' => 'users', 'action' => 'view', $exercise['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $exercise['Exercise']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $exercise['Exercise']['id']), null, __('Are you sure you want to delete # %s?', $exercise['Exercise']['id'])); ?>
			<?php echo $this->Html->link(__('Answers'), array('controller' => 'answers','action' => 'displayByIdExercise', $exercise['Exercise']['id'])); ?>
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