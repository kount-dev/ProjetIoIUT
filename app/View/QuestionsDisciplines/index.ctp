<div class="questionsDisciplines index">
	<h2><?php echo __('Questions Disciplines'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('question_id'); ?></th>
			<th><?php echo $this->Paginator->sort('discipline_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($questionsDisciplines as $questionsDiscipline): ?>
	<tr>
		<td><?php echo h($questionsDiscipline['QuestionsDiscipline']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($questionsDiscipline['Question']['name'], array('controller' => 'questions', 'action' => 'view', $questionsDiscipline['Question']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($questionsDiscipline['Discipline']['name'], array('controller' => 'disciplines', 'action' => 'view', $questionsDiscipline['Discipline']['id'])); ?>
		</td>
		<td><?php echo h($questionsDiscipline['QuestionsDiscipline']['created']); ?>&nbsp;</td>
		<td><?php echo h($questionsDiscipline['QuestionsDiscipline']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $questionsDiscipline['QuestionsDiscipline']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $questionsDiscipline['QuestionsDiscipline']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $questionsDiscipline['QuestionsDiscipline']['id']), null, __('Are you sure you want to delete # %s?', $questionsDiscipline['QuestionsDiscipline']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Questions Discipline'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Questions'), array('controller' => 'questions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Question'), array('controller' => 'questions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Disciplines'), array('controller' => 'disciplines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discipline'), array('controller' => 'disciplines', 'action' => 'add')); ?> </li>
	</ul>
</div>
