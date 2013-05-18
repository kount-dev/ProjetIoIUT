<div class="answers index">
	<h2><?php echo __('Answers'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('namefile'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('exercise_id'); ?></th>
			<th><?php echo $this->Paginator->sort('attempt_number'); ?></th>
			<th><?php echo $this->Paginator->sort('success_rate'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($answers as $answer): ?>
	<tr>
		<td><?php echo h($answer['Answer']['id']); ?>&nbsp;</td>
		<td><?php echo h($answer['Answer']['namefile']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($answer['User']['id'], array('controller' => 'users', 'action' => 'view', $answer['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($answer['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $answer['Exercise']['id'])); ?>
		</td>
		<td><?php echo h($answer['Answer']['attempt_number']); ?>&nbsp;</td>
		<td><?php echo h($answer['Answer']['success_rate']) . "%"; ?>&nbsp;</td>
		<td><?php echo h($answer['Answer']['created']); ?>&nbsp;</td>
		<td class="actions">
			<?php 

				echo $this->Html->link('FeedBack', array('action' => 'feedback', $answer['Exercise']['id'],$answer['Answer']['id'])); 
			?>
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
