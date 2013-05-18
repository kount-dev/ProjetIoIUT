<div class="exercises displayXp">
	<h2><?php echo __('Exercises'); ?></h2>
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
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $exercise['Exercise']['id'])); ?>
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