<div class="exercicesDisciplines index">
	<h2><?php echo __('Exercices Disciplines'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('exercise_id'); ?></th>
			<th><?php echo $this->Paginator->sort('discipline_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($exercicesDisciplines as $exercicesDiscipline): ?>
	<tr>
		<td><?php echo h($exercicesDiscipline['ExercicesDiscipline']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($exercicesDiscipline['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $exercicesDiscipline['Exercise']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($exercicesDiscipline['Discipline']['name'], array('controller' => 'disciplines', 'action' => 'view', $exercicesDiscipline['Discipline']['id'])); ?>
		</td>
		<td><?php echo h($exercicesDiscipline['ExercicesDiscipline']['created']); ?>&nbsp;</td>
		<td><?php echo h($exercicesDiscipline['ExercicesDiscipline']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $exercicesDiscipline['ExercicesDiscipline']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $exercicesDiscipline['ExercicesDiscipline']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $exercicesDiscipline['ExercicesDiscipline']['id']), null, __('Are you sure you want to delete # %s?', $exercicesDiscipline['ExercicesDiscipline']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Exercices Discipline'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
	</ul>
</div>
