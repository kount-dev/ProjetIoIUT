<div class="exercises index">
	<h2><?php echo __('Exercises'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('minimum_points'); ?></th>
			<th><?php echo $this->Paginator->sort('opening_date'); ?></th>
			<th><?php echo $this->Paginator->sort('closing_date'); ?></th>
			<th><?php echo $this->Paginator->sort('discipline_id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
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
			<?php echo $this->Html->link($exercise['Discipline']['name'], array('controller' => 'disciplines', 'action' => 'view', $exercise['Discipline']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($exercise['User']['id'], array('controller' => 'users', 'action' => 'view', $exercise['User']['id'])); ?>
		</td>
		<td><?php echo h($exercise['Exercise']['created']); ?>&nbsp;</td>
		<td><?php echo h($exercise['Exercise']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $exercise['Exercise']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $exercise['Exercise']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $exercise['Exercise']['id']), null, __('Are you sure you want to delete # %s?', $exercise['Exercise']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Exercise'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercices Disciplines'), array('controller' => 'exercices_disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercices Discipline'), array('controller' => 'exercices_disciplines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercices Questions'), array('controller' => 'exercices_questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercices Question'), array('controller' => 'exercices_questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Resultats'), array('controller' => 'resultats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Resultat'), array('controller' => 'resultats', 'action' => 'add')); ?> </li>
	</ul>
</div>
