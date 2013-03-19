<div class="resultats index">
	<h2><?php echo __('Resultats'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('exercise_id'); ?></th>
			<th><?php echo $this->Paginator->sort('numero_tentative'); ?></th>
			<th><?php echo $this->Paginator->sort('date_envoie'); ?></th>
			<th><?php echo $this->Paginator->sort('taux_reussite'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($resultats as $resultat): ?>
	<tr>
		<td><?php echo h($resultat['Resultat']['id']); ?>&nbsp;</td>
		<td><?php echo h($resultat['Resultat']['name']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($resultat['User']['id'], array('controller' => 'users', 'action' => 'view', $resultat['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($resultat['Exercise']['name'], array('controller' => 'exercises', 'action' => 'view', $resultat['Exercise']['id'])); ?>
		</td>
		<td><?php echo h($resultat['Resultat']['numero_tentative']); ?>&nbsp;</td>
		<td><?php echo h($resultat['Resultat']['date_envoie']); ?>&nbsp;</td>
		<td><?php echo h($resultat['Resultat']['taux_reussite']); ?>&nbsp;</td>
		<td><?php echo h($resultat['Resultat']['created']); ?>&nbsp;</td>
		<td><?php echo h($resultat['Resultat']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $resultat['Resultat']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $resultat['Resultat']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $resultat['Resultat']['id']), null, __('Are you sure you want to delete # %s?', $resultat['Resultat']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Resultat'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Exercises'), array('controller' => 'exercises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Exercise'), array('controller' => 'exercises', 'action' => 'add')); ?> </li>
	</ul>
</div>
